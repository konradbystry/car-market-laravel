<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private $username;
    private $password;
    private $msgs = [];

    public function generateView()
    {

        return view('auth.login');
    }



    public function check(Request $request)
    {


        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        $userInfo = User::where('name', '=', $request->user)->first();
        //dd($userInfo);

        if (!$userInfo) {

            return back()->with('fail', 'Invalid username');
        } else {
            if (Hash::check($request->password, $userInfo->password)) {

                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect()->route('index');
            } else {

                return back()->with('fail', 'Invalid password');
            }
        }

        // return $request->input();
    }



    //setters getters

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
