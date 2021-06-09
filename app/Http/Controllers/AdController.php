<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

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

    public function addToWatches()
    {


        $user = User::where('id', '=', session('LoggedUser'))->first();
        $user->cars()->attach(2);
        redirect()->route('index');
    }
}
