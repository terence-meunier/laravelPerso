<?php

use App\Http\Controllers\AccueilController;
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
    return view('welcome');
});

Route::get('/home', function () {
    $test = 'Bonjour';
    return response($test, 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/accueil', [AccueilController::class, 'index']);

Route::get('/pool', function () {
    return response()->json([
        'id' => 1,
        'nom_ville' => 'Valence',
        'date' => '03/2021',
        'actif' => true,
        'section' => 'tech dev'
    ]);
});
