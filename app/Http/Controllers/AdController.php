<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class AdController extends Controller
{
    public function generateView()
    {
        return view('ad');
    }

    public function show($id)
    {
        $car = Car::where('id', '=', $id)->first();
        return view('ad', ['car' => $car]);
    }
}
