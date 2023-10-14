<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Fruit;

class FruitController extends Controller
{
    public function __invoke(Request $request) : View
    {
        $fruits = Fruit::all();

        return view('vacancies', [
            'fruits' => $fruits
        ]);
    }
}