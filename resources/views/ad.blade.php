@extends('layouts.subpages-layout')

@section('styles')
<link rel="stylesheet" href={{env('APP_URL') . "/assets/css/ad-fullscreen.css"}}>
@endsection



@section('content')

    <div class="ad">
        <a href="#">
            <div class="content">
                <div class="photo">
                    <img src="http://localhost/car-market-laravel/public/assets/images/test-photo.jpg" alt="">
                </div>
                <div class="description">
                    <h2>{{$car->brand}} {{$car->model}}</h2>
                    <ul>
                        <li>{{$car->production_date}}</li>
                        <li>{{$car->distance_record}} km</li>
                        <li>enigne</li>
                    </ul>
                </div>
                <div class="price">
                    <h2>{{$car->price}} pln</h3>
                </div>
            </div>
        </a>
    </div>

@endsection
