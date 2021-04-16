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

        <form action="/annonce/creer" method="post">
            @csrf
            <!-- Génére une balise avec le token CSRF. Ce token permet
            de protéger le site contre les attaques CSRF. Laravel
            va simplement vérifier que le token envoyé correspond à celui
            de la personne qui est actuellement sur le site. -->
            <!-- <input type="hidden" name="_token" value="123456"> -->
            <div>
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div>
                <label for="price">Prix</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" name="sold" id="sold" class="form-check-input">
                <label for="sold">Vendu ?</label>
            </div>

            <button class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
