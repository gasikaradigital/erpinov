<?php

namespace App\Http\Controllers;

use App\Models\Instance;
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
        //return redirect($instance->url . '/index.php');
        
        //Test redirection vers compte DoliCloud
        return redirect()->away('https://rakotonirina.with7.dolicloud.com');
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
}
