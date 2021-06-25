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
        //$user = User::where('id', '=', session('LoggedUser'))->first();
        $car = Car::where('id', '=', $id)->first();
        return view('ad', [
            'car' => $car,
            'user' => $this->getUser()
        ]);
    }

    public function addToWatches($id)
    {

        $user = $this->getUser();
        $car = DB::table('user_car')
            ->where('user_id', '=', $user->id)
            ->where('car_id', '=', $id)
            ->get();
        if ($car->count() > 0) {
            echo "<script>alert('You already watching this ad')</script>";
            return redirect()->route('watches');
        } else {
            $user->cars()->attach($id);
            echo "<script>alert('Added to watches')</script>";
            return redirect()->route('watches');
        };



        //case user is not logged
        //return response()->json([
        //    'status' => 'success'
        //]);
    }
}
