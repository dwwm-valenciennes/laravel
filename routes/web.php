<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/a-propos', function () {
    $name = 'Fiorella';

    return view('about', [
        'name' => $name,
        'bibis' => [1, 2, 3, 4],
    ]);
});

Route::get('/hello/{nom?}', function ($nom = 'Fiorella') {
    return "<h1>Hello $nom</h1>";
})->where('nom', '.{2,}'); // Le nom doit faire 2 caractères minimum

// Afficher les annonces
Route::get('/nos-annonces', function () {
    // ATTENTION use Illuminate\Support\Facades\DB;
    $properties = DB::select('select * from properties where sold = :sold', [
        'sold' => 0,
    ]);
    // Si on ne veut plus écrire de SQL...
    $properties = DB::table('properties')
        ->where('sold', 0)->where('sold', '=', 1, 'or')->get();
    // WHERE sold = 0 OR sold = 1

    return view('properties/index', [
        'properties' => $properties,
    ]);
});

// On va créer une route pour voir UNE seule annonce
// La route ressemble à cela : /annonce/2
// On pourra donc récupérer l'id de l'annonce en dynamique
// Avec cette ID, on doit faire la bonne requête (select ... where ...)
// On crée une nouvelle vue properties/show
// On affiche l'annonce (Titre, prix, description) sur cette page

Route::get('/annonce/{id}', function ($id) {
    // $property = DB::table('properties')->where('id', $id)->get()->first();
    $property = DB::table('properties')->find($id);

    if (! $property) {
        abort(404); // On renvoie une 404 avec Laravel
    }

    return view('properties/show', ['property' => $property]);
});
