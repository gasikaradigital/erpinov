<?php

// app/Services/InstanceProvisioningService.php

namespace App\Services;

use App\Models\Instance;
use App\Models\User;
use App\Models\DolibarrCredential;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class InstanceProvisioningService
{
    public function provisionInstance(User $user)
    {
        $subdomain = $this->generateSubdomain($user);

        $serverIp = $this->provisionServer();
        $this->deployDolibarr($serverIp);

        $dbName = $this->createDatabase($serverIp);

        $dolibarrPassword = Str::random(16);

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
}

