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
        $user = User::where('id', '=', session('LoggedUser'))->first();
        $car = Car::where('id', '=', $id)->first();
        return view('ad', [
            'car' => $car,
            'user' => $user
        ]);
    }

    public function addToWatches($id)
    {
        //dd('dodaje mordo');

        $user = User::where('id', '=', session('LoggedUser'))->first();
        $user->cars()->attach($id);    //case user is not logged
        return response()->json([
            'status' => 'success'
        ]);
    }
}
