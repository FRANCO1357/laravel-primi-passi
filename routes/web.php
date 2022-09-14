<?php

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
    return view('homepage');
}); 

Route::get('/dogs', function () {
    $dog_breeds = [
        'Pastore Australiano',
        'Golden Retriver',
        'Alano',
        'Setter',
    ];
    return view('dogs', compact('dog_breeds'));
}); 

Route::get('/cats', function () {
    $cat_breeds = [
        'Savannah',
        'Persiano',
        'Siberiano',
        'Siamese',
    ];
    return view('cats', compact('cat_breeds'));
}); 

Route::get('/fishes', function () {
    $fish_breeds = [
        'Orata',
        'Triglia',
        'Ricciola',
        'Dentice',
    ];
    return view('fishes', compact('fish_breeds'));
}); 

Route::get('/birds', function () {
    $bird_breeds = [
        'Gabbiano',
        'Pettirosso',
        'Aquila',
        'Falco pellegrino',
    ];
    return view('birds', compact('bird_breeds'));
}); 
