<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Vacancy;
use App\Fruit;

class VacanciesController extends Controller
{
    public function __invoke(Request $request) : View
    {
        $vacancies = Vacancy::all();
        $fruits = Fruit::all();

        return view('vacancies', [
            'vacancies' => $vacancies,
            'fruits' => $fruits
        ]);
    }
}
