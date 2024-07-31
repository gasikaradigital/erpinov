<x-app-layout>

@section('title', 'Créer une Instance')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-white card-header bg-primary">
                    <h1 class="mb-0 h3">Créer une nouvelle instance Dolibarr</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('instances.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <div class="alert alert-info" role="alert">
                                <i class="bi bi-info-circle me-2"></i>
                                Cliquez sur le bouton ci-dessous pour créer votre nouvelle instance Dolibarr.
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-plus-circle me-2"></i>
                                Créer mon instance
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>