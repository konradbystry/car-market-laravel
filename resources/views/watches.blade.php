@extends('layouts.subpages-layout')

@section('content')

    <section class="ads">


        @if (isset($user))
        @foreach ($cars as $car)
         <div class="ad">
            <a href={{env('APP_URL') . "/watches/" . $car->id}}>
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
                        <form action={{env('APP_URL') . "/watches/" . $car->id . "/unwatch"}}>
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
