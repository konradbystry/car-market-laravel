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
        $user = User::where('id', '=', session('LoggedUser'))->first();
        $cars = $user->cars()->paginate(3);
        //dd($cars);
        return view('watches', [
            'cars' => $cars,
            'user' => $user
        ]);
    }


    public function unwatch($id)
    {

        $user = User::where('id', '=', session('LoggedUser'))->first(); //change
        $user->cars()->detach($id);
        return redirect()->route('watches');
    }
}
