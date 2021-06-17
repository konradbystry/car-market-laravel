<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;


class WatchesController extends Controller
{

    public function generateView()
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();

        return view('watches', [
            'user' => $user
        ]);
    }


    public function unwatch($id)
    {
        //dd($id);
        $user = User::where('id', '=', session('LoggedUser'))->first(); //change
        $user->cars()->detach($id);
        return redirect()->route('watches');
    }
}
