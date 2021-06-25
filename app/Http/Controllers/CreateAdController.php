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
        //$user = User::where('id', '=', session('LoggedUser'))->first();

        return view('CreateAd', ['user' => $this->getUser()]);
    }

    public function create(Request $request)
    {



        //dd($user = User::where('id', '=', session('LoggedUser'))->first()->name);

        //dd($request->image);
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'distance' => 'required|numeric',
            'productionDate' => 'required|date',
            'engine' => 'required',
            'power' => 'required|numeric',
            'price' => 'required|numeric',
            'phone' => 'required|numeric',
            'image' => 'required'

        ]);


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
        $car->owner = User::where('id', '=', session('LoggedUser'))->first()->name;
        $save = $car->save();

        if ($save) {
            $request->image->storeAs('public', $car->img_url);
            return redirect()->route('user');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
