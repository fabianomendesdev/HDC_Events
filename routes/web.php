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
    $name = "Fabiano";
    $idade = 18;

    $arr = [10,20,30,40,50];

    $nomes = ["Matheus", "Maria", "João","Saulo"];

    return view('welcome',
    [
        'name' => $name,
        'idade' => $idade,
        'profissao' => 'Programador',
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/produtos', function() {

    return view('products');
});