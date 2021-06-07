<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        $userInfo = User::where('username', '=', $request->user)->first();
        //dd($userInfo);

        if (!$userInfo) {

            return back()->with('fail', 'Invalid username');
        } else {
            if ($userInfo->password == $request->password) {

                $request->session()->put('LoggedUser', $userInfo->id_user);
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
