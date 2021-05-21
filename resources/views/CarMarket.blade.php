
@extends('layouts.main-layout')

@section('content')

    <section class="banner"></section>

    <div class="search-box">
        <form action="">
            <input type="text" class="search-text" placeholder="Search for your dream car...">
            <button><i class="fas fa-search"></i></button>
        </form>
    </div>

    <section class="ads">

    @foreach ($cars as $car)
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
                            <li>2.0 Pb</li>
                        </ul>
                    </div>
                    <div class="price">
                        <h2>{{$car->price}} pln</h2>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

    </section>

@endsection

