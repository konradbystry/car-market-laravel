<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CreateAdController extends Controller
{
    public function generateView()
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();

        return view('CreateAd');
    }

    public function create(Request $request)
    {





        //dd($request->image);

        //dd('udało ci się Konrad gratuluję');

        $car = new Car();
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->distance = $request->distance;
        $car->production_date = $request->productionDate;
        $car->engine = $request->engine;
        $car->power = $request->power;
        $car->price = $request->price;
        $car->phone = $request->phone;
        $car->img_url = $request->brand . $request->model . '.jpg';
        $save = $car->save();

        if ($save) {
            $request->image->storeAs('public', $car->img_url);
            return 'good';
        }

        return 'bad';
    }
}
