<?php

// app/Http/Controllers/DolibarrController.php

namespace App\Http\Controllers;

use App\Models\Instance;
use App\Models\DolibarrCredential;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

class DolibarrController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'instance_id' => 'required|exists:instances,id',
            'token' => 'required',
        ]);

        $instance = Instance::findOrFail($request->instance_id);

        if (!Hash::check($request->token, $instance->auth_token) || $instance->token_expires_at < now()) {
            return response()->json(['message' => 'Token invalide ou expiré'], 403);
        }

        $credentials = DolibarrCredential::where('user_id', $instance->user_id)->first();

        if (!$credentials) {
            return response()->json(['message' => 'Identifiants non trouvés'], 404);
        }

        $response = $this->authenticateToDolibarr($credentials->username, decrypt($credentials->password), $instance->url);

        if ($response['success']) {
            return response()->json(['message' => 'Connexion réussie', 'data' => $response['data']]);
        } else {
            return response()->json(['message' => 'Échec de la connexion'], 401);
        }
    }

    private function authenticateToDolibarr($username, $password, $url)
    {
        $client = new Client();
        $response = $client->post($url . '/api/index.php/login', [
            'form_params' => [
                'login' => $username,
                'password' => $password,
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
            return ['success' => true, 'data' => $data];
        } else {
            return ['success' => false];
        }
    }
}
