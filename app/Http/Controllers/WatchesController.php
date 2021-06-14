<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class WatchesController extends Controller
{
    public function generateView()
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();
        //dd($user->cars);
        return view('watches', [
            'user' => $user
        ]);
    }
}
