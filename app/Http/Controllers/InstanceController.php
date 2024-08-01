<?php

// app/Http/Controllers/InstanceController.php

namespace App\Http\Controllers;

use App\Models\Instance;
use App\Models\DolibarrCredential;
use App\Services\InstanceProvisioningService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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
        $instanceData = $this->provisioningService->provisionInstance($request->user());
        $instance = $instanceData['instance'];
        $dolibarrPassword = $instanceData['dolibarrPassword'];

        return redirect()->route('instances.index')
                         ->with('success', 'Instance créée avec succès !')
                         ->with('dolibarrPassword', $dolibarrPassword);
    }

    public function redirect(Request $request, Instance $instance)
    {
        if ($request->user()->id !== $instance->user_id) {
            abort(403, 'Non autorisé');
        }

        return redirect($instance->url);
    }

    public function destroy(Instance $instance)
    {
        if (auth()->id() !== $instance->user_id) {
            abort(403, 'Non autorisé');
        }

        $instance->delete();

        return redirect()->route('instances.index')->with('success', 'Instance supprimée avec succès.');
    }
}
