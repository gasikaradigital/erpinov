<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ERP NOV - GASIKARA DIGITAL')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">ERP NOV - GASIKARA DIGITAL</a>
            @auth
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instances.index') }}">Mes Instances</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Déconnexion</button>
                    </form>
                </li>
            </ul>
            @endauth
        </div>
    </nav>
    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>