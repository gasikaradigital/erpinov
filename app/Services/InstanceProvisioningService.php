<?php

// app/Services/InstanceProvisioningService.php

namespace App\Services;

use App\Models\Instance;
use App\Models\User;
use App\Models\DolibarrCredential;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class InstanceProvisioningService
{
    protected $apiKey;
    protected $apiBaseUrl;

    public function __construct()
    {
        $this->apiKey = env('DOLIBARR_API_KEY'); 
        $this->apiBaseUrl = 'https://erp.gasikara.mg/api/index.php/';
    }
    public function provisionInstance(User $user)
    {
        $apiKey = "F8YW110Rszu9n6kPVQPQtk7w4l4bUU8r";
        $apiUrl = "http://erp.gasikara.mg/api/index.php/";
        $subdomain = $this->generateSubdomain($user);

        $serverIp = $this->provisionServer();
        $this->deployDolibarr($serverIp);

        $dbName = $this->createDatabase($serverIp);

        $dolibarrPassword = Str::random(16);

        // Créer la base de données pour cette instance
        $this->createDatabase($dbName);

        $newUsers = json_encode(array(
            'login' => $user->name, // Identifiant de l'utilisateur
            'password' => $dolibarrPassword, // Mot de passe de l'utilisateur
            'lastname' => $user->name, // Nom de famille
            'firstname' => "koto", // Prénom
            'socid' => 0, // ID de la société (0 si pas de société)
            'admin' => 0
        ));

        $newUsersResult = $this->CallDolibarrAPI("POST",$apiKey, $apiUrl."users", $newUsers);

       
        $instance = Instance::create([
            'user_id' => $user->id,
            'url' => "https://{$subdomain}.erp.gasikara.mg",
            'status' => 'active',
            'db_name' => $dbName,
            'dolibarr_password' => bcrypt($dolibarrPassword),
        ]);

            DolibarrCredential::create([
                'user_id' => $user->id,
                'username' => $user->email,
                'password' => bcrypt($dolibarrPassword),
            ]);

            event(new \App\Events\InstanceCreated($instance));

            return ['instance' => $instance, 'dolibarrPassword' => $dolibarrPassword]; 
    }

    private function generateSubdomain(User $user)
    {
        $base = Str::slug($user->name);
        $subdomain = $base;
        $i = 1;

        while (Instance::where('url', "https://{$subdomain}.erp.gasikara.mg")->exists()) {
            $subdomain = $base . $i;
            $i++;
        }

        return $subdomain;
    }

    private function provisionServer()
    {
        return '192.168.1.' . rand(1, 255);
    }

     // La méthode corrigée
    private function deployDolibarr($serverIp)
    {
        // Déploie Dolibarr sur le serveur (simulation)
        Log::info("Déploiement de Dolibarr sur {$serverIp}");
    }

    private function createDatabase($serverIp)
    {
        return 'dolibarr_' . Str::random(10);
    }

    private function callDolibarrAPI($method, $apikey, $url, $data = false)
    {
        $curl = curl_init();
        $httpheader = ['DOLAPIKEY: '.$apikey];

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                $httpheader[] = "Content-Type:application/json";

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                break;
            case "PUT":

            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                $httpheader[] = "Content-Type:application/json";

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

}

