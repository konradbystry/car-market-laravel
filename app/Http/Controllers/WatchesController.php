<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WatchesController extends Controller
{

    public function generateView()
    {
        $user = $this->getUser();
        $cars = $user->cars()->paginate(3);
        //dd($cars);
        return view('watches', [
            'cars' => $cars,
            'user' => $user
        ]);
    }


    public function unwatch($id)
    {

        $user = $this->getUser();
        $user->cars()->detach($id);
        return redirect()->route('watches');
        // return response()->json([
        //    'success' => 'success'
        //]);
    }

    public function show($id)
    {
        $car = Car::where('id', '=', $id)->first();
        //$user = User::where('id', '=', session('LoggedUser'))->first();
        return view('UnwatchFullScreen', [
            'user' => $this->getUser(),
            'car' => $car
        ]);
    }
}
