@extends('layouts.subpages-layout')

@section('styles')
<link rel="stylesheet" href={{env('APP_URL') . "/assets/css/ad-fullscreen.css"}}>
<link rel="stylesheet" href={{env('APP_URL') . "/assets/css/test/css"}}>
@endsection



@section('content')

    <div class="add">

            <div class="contentt">
                <div class="photoo">
                    <img src={{asset('storage/' . $car->img_url)}} alt="">
                </div>
                <div class="descriptionn">
                    <h2>{{$car->brand}} {{$car->model}}</h2>
                    <ul>
                        <li>{{$car->production_date}}</li>
                        <li>{{$car->distance}} km</li>
                        <li>enigne</li>
                    </ul>
                </div>
                <div class="pricee">
                    <h2>{{$car->price}} pln</h3>
                    <form action={{env('APP_URL') . "/watches/" . $car->id . '/unwatch'}}>
                        <button class="unwatch-button">unwatch</button>
                    </form>

                </div>
            </div>
    </div>


@endsection
