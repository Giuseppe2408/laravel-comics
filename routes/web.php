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
    $arrComics = config('comics');
    return view('comics', 
    ['arrComics' => $arrComics]);
})->name('comics');



Route::get('/comic/{id}', function ($id) {
    $comics = null;
    foreach (config('comics') as $value){
        if ($value['id'] == $id) {
            $comics = $value;
            break;
        }
    }
    return view('comic', [
        'pageTitle' => 'comic - descrizione',
        'comics' => $comics
    ]);
})->name('comic');
