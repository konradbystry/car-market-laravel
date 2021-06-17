@extends('layouts.subpages-layout')

@section('content')

    <section class="ads">


        @if (isset($user))
        @foreach ($user->cars as $cars)
         <div class="ad">
            <a href={{env('APP_URL') . "/ad/" . $cars->id}}>
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
                        <form action={{env('APP_URL') . "/watches/unwatch/" . $cars->id}}>
                            <button class="unwatch-button">unwatch</button>
                        </form>

                    </div>

                </div>

            </a>

        </div>
        @endforeach
        @else
            <div class="emptyWatches">
                <h2>No watches yet... go browse some ads!</h2>
            </div>
        @endif

    </section>

@endsection
