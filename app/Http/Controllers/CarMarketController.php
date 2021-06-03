<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class CarMarketController extends Controller
{
    public function index()
    {
        $user = User::where('id_user', '=', session('LoggedUser'))->first();
        $cars = Car::all();

        return view('CarMarket', [
            'cars' => $cars,
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
