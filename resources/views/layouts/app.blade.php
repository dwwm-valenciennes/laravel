<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            Immobiliare
        @show
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Immobiliare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                        Accueil
                    </a>
                    <a class="nav-link {{ request()->is('a-propos') ? 'active' : '' }}" href="/a-propos">
                        A propos
                    </a>
                    <a class="nav-link {{ request()->is('nos-annonces') ? 'active' : '' }}" href="/nos-annonces">
                        Nos annonces
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
