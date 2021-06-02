<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarMarketController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('CarMarket', ['cars' => $cars]);
    }
}