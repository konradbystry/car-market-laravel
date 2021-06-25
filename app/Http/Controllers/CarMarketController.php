<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CarMarketController extends Controller
{

    public function index()
    {
        $cars = DB::table('cars')->paginate(3);
        return view('CarMarket', [
            'cars' => $cars,
            'user' => $this->getUser()
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function search(Request $request)
    {
        //$user = User::where('id', '=', session('LoggedUser'))->first();

        if (isset($_GET['query'])) {
            $searchText = $_GET['query'];
            $cars = DB::table('cars')->where('brand', 'LIKE', '%' . $searchText . '%')->paginate(3);
            $cars->appends($request->all());
            return view('CarMarket', [
                'cars' => $cars,
                'user' => $this->getUser()
            ]);
        } else {
            return redirect()->route('index');
        }
    }
}
