<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function generateView()
    {
        $user = User::where('id', '=', session('LoggedUser'))->first(); //repeating

        return view('auth.register', [
            'user' => $user
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            $user = new User;
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $save = $user->save();
        } catch (Exception $e) {
            return back()->with('fail', 'This username or email is taken');
        }

        if ($save) {
            return back()->with('success', 'Account created');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
