@extends('layouts.subpages-layout')

@section('styles')
<link rel="stylesheet" href="assets/css/ad-fullscreen.css">
@endsection



@section('content')

    <div class="ad">
        <a href="#">
            <div class="content">
                <div class="photo">
                    <img src="http://localhost/car-market-laravel/public/assets/images/test-photo.jpg" alt="">
                </div>
                <div class="description">
                    <h2>Ford Mustang</h2>
                    <ul>
                        <li>year</li>
                        <li>car distance</li>
                        <li>enigne</li>
                    </ul>
                </div>
                <div class="price">
                    <h2>100 000 pln</h3>
                </div>
            </div>
        </a>
    </div>

@endsection
