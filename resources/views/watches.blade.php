@extends('layouts.subpages-layout')

@section('content')

    <section class="ads">
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

            @foreach ($user->cars as $cars)
            <a href="#">
                <div class="content">
                    <div class="photo">
                        <img src="http://localhost/car-market-laravel/public/assets/images/test-photo.jpg" alt="">
                    </div>
                    <div class="description">
                        <h2>{{$cars->brand}} {{$cars->model}}</h2>
                        <ul>
                            <li>{{$cars->production_date}}</li>
                            <li>{{$cars->distance}} km</li>
                            <li>enigne</li>
                        </ul>
                    </div>
                    <div class="price">
                        <h2>{{$cars->price}} pln</h3>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </section>

@endsection
