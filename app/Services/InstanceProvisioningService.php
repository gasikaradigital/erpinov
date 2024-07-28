<?php

namespace App\Services;

use App\Models\Instance;
use App\Models\User;
use Illuminate\Support\Str;

class InstanceProvisioningService
{
    /**
     * Provisionne une nouvelle instance Dolibarr pour l'utilisateur.
     *
     * @param User $user
     * @return Instance
     */
    public function provisionInstance(User $user)
    {
        // Générer un nom de sous-domaine unique
        $subdomain = $this->generateSubdomain($user);

        // Provisionner le serveur (simulé ici)
        $serverIp = $this->provisionServer();

        // Déployer Dolibarr (simulé ici)
        $this->deployDolibarr($serverIp);

        // Créer la base de données
        $dbName = $this->createDatabase($serverIp);

        // Créer l'instance dans la base de données
        $instance = Instance::create([
            'user_id' => $user->id,
            'url' => "https://{$subdomain}.erpnov.mg",
            'status' => 'active',
            'db_name' => $dbName,
        ]);

        // Déclencher l'événement de création d'instance
        event(new \App\Events\InstanceCreated($instance));

        return $instance;
    }

    /**
     * Génère un sous-domaine unique pour l'instance.
     *
     * @param User $user
     * @return string
     */
    private function generateSubdomain(User $user)
    {
        $base = Str::slug($user->name);
        $subdomain = $base;
        $i = 1;

        while (Instance::where('url', "https://{$subdomain}.erpnov.mg")->exists()) {
            $subdomain = $base . $i;
            $i++;
        }

        return $subdomain;
    }

    /**
     * Provisionne un serveur (simulé).
     *
     * @return string IP du serveur
     */
    private function provisionServer()
    {
        // Simulation de la création d'un serveur
        return '192.168.1.' . rand(1, 255);
    }

    /**
     * Déploie Dolibarr sur le serveur (simulé).
     *
     * @param string $serverIp
     */
    private function deployDolibarr($serverIp)
    {
        // Simulation du déploiement de Dolibarr
        // Dans un cas réel, cela pourrait impliquer SSH, Ansible, ou une API de votre fournisseur cloud
        logger("Déploiement de Dolibarr sur {$serverIp}");
    }

    /**
     * Crée une base de données pour l'instance (simulé).
     *
     * @param string $serverIp
     * @return string Nom de la base de données
     */
    private function createDatabase($serverIp)
    {
        // Simulation de la création d'une base de données
        return 'dolibarr_' . Str::random(10);
    }
}