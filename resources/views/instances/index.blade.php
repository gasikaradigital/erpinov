<!-- views/instances/index.blade.php -->

<x-app-layout>

@section('title', 'Mes Instances')

@section('content')
<h1>Mes Instances Dolibarr</h1>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('instances.create') }}" class="mb-3 btn btn-primary">Créer une nouvelle instance</a>

<table class="table">
    <thead>
        <tr>
            <th>URL</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($instances as $instance)
        <tr>
            <td>{{ $instance->url }}</td>
            <td>{{ $instance->status }}</td>
            <td>
                <form action="{{ route('instances.destroy', $instance) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette instance ?');">
                        Supprimer
                    </button>
                </form>
                <a href="{{ route('instances.redirect', $instance) }}" class="btn btn-sm btn-primary">
                    Connexion vers dolibarr
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Vous n'avez pas encore d'instance.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</x-app-layout>
