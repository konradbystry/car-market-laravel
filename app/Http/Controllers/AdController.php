<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function generateView()
    {
        return view('ad');
    }
}
