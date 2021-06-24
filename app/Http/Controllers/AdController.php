<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

        $user = User::where('id', '=', session('LoggedUser'))->first();
        $car = DB::table('user_car')
            ->where('user_id', '=', $user->id)
            ->where('car_id', '=', $id)
            ->get();
        if ($car->count() > 0) {
            echo "<script>alert('You already watching this ad')</script>";
            return 5;
        } else {
            echo "<script>alert('Added to watches')</script>";
        };



        $user->cars()->attach($id);    //case user is not logged
        //return response()->json([
        //    'status' => 'success'
        //]);
    }
}
