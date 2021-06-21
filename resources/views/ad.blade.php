@extends('layouts.subpages-layout')

@section('styles')
<link rel="stylesheet" href={{env('APP_URL') . "/assets/css/ad-fullscreen.css"}}>
<link rel="stylesheet" href={{env('APP_URL') . "/assets/css/test/css"}}>
@endsection



@section('content')

    <div class="ad">

            <div class="content">
                <div class="photo">
                    <img src={{asset('storage/' . $car->img_url)}} alt="">
                </div>
                <div class="description">
                    <h2>{{$car->brand}} {{$car->model}}</h2>
                    <ul>
                        <li>{{$car->production_date}}</li>
                        <li>{{$car->distance}} km</li>
                        <li>enigne</li>
                    </ul>
                </div>
                <div class="price">
                    <h2>{{$car->price}} pln</h3>
                    <form action={{env('APP_URL') . "/ad/" . $car->id . '/watch'}}>
                        <button class="watch-button">watch</button>
                    </form>

                </div>
            </div>
    </div>


@endsection
