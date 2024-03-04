<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Inertia\Inertia;
use Inertia\Response;

class PizzaController extends Controller
{
    //
    public function index(): Response
    {
        $pizzas = Pizza::all();

        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas
        ]);
    }
}
