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
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/a-propos">A propos</a></li>
    </ul>

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
