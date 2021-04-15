<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Hello Laravel</h1>

    <h2>Blade simplifie le PHP</h2>
    <?php echo date('d/m/Y'); ?>
    {{ date('d/m/Y') }}

    <h2>If en Blade</h2>
    @if (1 === 1)
        Je suis un if
    @endif

    <h2>Boucle en Blade</h2>
    @for ($i = 0; $i < 10; $i++)
        {{ $i }}
    @endfor

    <h2>Protection XSS en Blade</h2>
    {{ '<script>alert("toto")</script>' }}
    {!! '<h1>Pas de protection XSS</h1>' !!}
</body>
</html>
