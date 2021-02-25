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
    return view('welcome');
});

Route::get('/testjson', function () {
    return view('testjson');
});

Route::get('/pizzas', function () {
    $pizzas = [
        [
        "type" => "Hawaiian", 
        "base" => "cheesy crust",
        "price" => 15, 
        ],
        [
        "type" => "mexico", 
        "base" => "garlic crust",
        "price" => 10, 
        ],
        [
        "type" => "Vegi", 
        "base" => "vegi crust",
        "price" => 5, 
        ]
    ];

    $name = request('name');
    return view('pizzas', [
        "pizzas" => $pizzas,
        "name" => $name,
        ]);
});