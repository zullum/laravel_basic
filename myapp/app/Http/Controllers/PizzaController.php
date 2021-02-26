<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // define the controller methods
    public function index()
    {
        # code...
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
    
        $name = request('name') ?? '';
        $age = request('age') ?? '';
        return view('pizzas', [
            "pizzas" => $pizzas,
            "name" => $name,
            "age" => $age,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
