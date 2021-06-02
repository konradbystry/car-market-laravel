<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $user;
    private $password;

    public function generateView()
    {

        return view('auth.login');
    }

    public function save(Request $req)
    {
        return $req->input();
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
