@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Formulaire en GET</h2>
        @if (request('name'))
        Bonjour {{ request('name') }}
        @endif

        <form action="">
            <input type="text" name="name">

            <button class="btn btn-primary">Envoyer</button>
        </form>

        <h2>Formulaire en POST</h2>

        <form action="" method="post">
            @csrf
            <!-- Génére une balise avec le token CSRF. Ce token permet
            de protéger le site contre les attaques CSRF. Laravel
            va simplement vérifier que le token envoyé correspond à celui
            de la personne qui est actuellement sur le site. -->
            <!-- <input type="hidden" name="_token" value="123456"> -->
            <input type="text" name="name">

            <button class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection