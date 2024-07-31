<?php

namespace App\Http\Controllers;

use App\Models\Instance;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Caprel\Dolibarr\Dolibarr;
use App\Services\InstanceProvisioningService;


    class InstanceController extends Controller
    {
    private $provisioningService;

    public function __construct(InstanceProvisioningService $provisioningService)
    {
        $this->provisioningService = $provisioningService;
    }

    public function index()
    {
        $instances = auth()->user()->instances;
        return view('instances.index', compact('instances'));
    }

    public function create()
    {
        return view('instances.create');
    }

    public function store(Request $request)
    {
        $instance = $this->provisioningService->provisionInstance($request->user());
        return redirect()->route('instances.index')->with('success', 'Instance créée avec succès !');
    }

    public function redirect(Request $request, Instance $instance)
    {
        if ($request->user()->id !== $instance->user_id) {
            abort(403, 'Non autorisé');
        }

        // Générer un token temporaire
        $token = Str::random(64);
        $instance->update(['auth_token' => $token, 'token_expires_at' => now()->addMinutes(5)]);

        // Construire l'URL de Dolibarr avec les paramètres d'authentification
        $dolibarrUrl = "https://erp.gasikara.mg/index.php";
        $params = http_build_query([
            'mainmenu' => 'home',
            'username' => $instance->user->email,
            'password' => $instance->dolibarr_password,
            'instance_id' => $instance->id,
            'auth_token' => $token
        ]);

        return redirect($dolibarrUrl . '?' . $params);
    }



    public function edit($id)
    {
        $edit = Instance::find($id);

        return view('ok');
        //dd($edit);
    }





    public function destroy(Instance $instance)
    {
        if (auth()->id() !== $instance->user_id) {
            abort(403, 'Non autorisé');
        }
        // Supprimer l'instance
        $instance->delete();

        return redirect()->route('instances.index')->with('success', 'Instance supprimée avec succès.');
    }

    public function login(Request $request, Instance $instance, $token)
    {
        if ($instance->auth_token !== $token || $instance->token_expires_at < now()) {
            abort(403, 'Token invalide ou expiré');
        }

        // Effacez le token après utilisation
        $instance->update(['auth_token' => null, 'token_expires_at' => null]);

        // Générez les paramètres de connexion pour Dolibarr
        $loginParams = http_build_query([
            'username' => $instance->user->email,
            'password' => $instance->dolibarr_password, // Vous devrez stocker ce mot de passe de manière sécurisée
        ]);

        // Redirigez vers la page de connexion de Dolibarr avec les paramètres
        return redirect($instance->url . '/index.php?mainmenu=home&leftmenu=setup&username=' . urlencode($instance->user->email) . '&password=' . urlencode($instance->dolibarr_password));
    }

}
