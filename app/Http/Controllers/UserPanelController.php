<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPanelController extends Controller
{
    //private $user = $this->getUser();

    public function generateView()
    {

        $user = $this->getUser();
        $cars = DB::table('cars')->where('owner', '=', $user->name)->paginate(3);

        return view('UserPanel', [
            'cars' => $cars,
            'user' => $user
        ]);
    }

    public function remove($id)
    {
        $user = $this->getUser();
        $user->cars()->detach($id);
        Car::where('id', '=', $id)->firstorfail()->delete();
        return redirect()->route('user');
    }

    public function show($id)
    {
        $user = $this->getUser();
        $car = Car::where('id', '=', $id)->first();

        return view('RemoveFullScreen', [
            'car' => $car,
            'user' => $user
        ]);
    }
}
