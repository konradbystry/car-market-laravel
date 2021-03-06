
@extends('layouts.main-layout')

@section('content')

    <section class="banner"></section>

    <div class="search-box">
        <form action={{route('search')}}>
            <input type="text" class="search-text" name="query" placeholder="Search for your dream car...">
            <button><i class="fas fa-search"></i></button>
        </form>
    </div>

    <section class="ads">

        @if (isset($cars))
            @if(count($cars)>0)
                @foreach ($cars as $car)
                    <div class="ad">
                        <a href={{env('APP_URL') . "/ad/" . $car->id}} class="text-decoration-none">
                            <div class="content">
                                <div class="photo">
                                    <img src={{asset('storage/' . $car->img_url)}} alt="">
                                </div>
                                <div class="description">
                                    <h2>{{$car->brand}} {{$car->model}}</h2>
                                    <ul>
                                        <li>{{$car->production_date}}</li>
                                        <li>{{$car->distance}} km</li>
                                        <li>{{$car->engine}}</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <h2>{{$car->price}} pln</h2>
                                    <form action={{env('APP_URL') . "/ad/" . $car->id . '/watch'}} class='watch'>
                                        <button class="watch-button" data-car="{{$car->id}}" data-user="{{isset($user)}}">watch</button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            @endif
        @endif



        <div class="pagination-block">
            {{$cars->links('layouts.pagination')}}
        </div>



    </section>




@endsection


@section('scripts')
<script
src="https://code.jquery.com/jquery-3.6.0.js"
 integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script>
    $(function(){
        $(".watch-button").click(function(e){
            e.preventDefault();
            const user = $(this).data('user');
            console.log(user);

            $.ajax({
                method: "GET",
                url: "http://localhost/car-market-laravel/public/ad/" + $(this).data('car') + "/watch"
            })
            .done(function(response) {

                if(user != "") {   //null didn't work, empty string case
                    alert("Added to watches");
                }else{

                    alert("Please login to watch this ad");
                }
            })
            .fail(function(response){
                alert("Smoething went wrong");
            })
        })
    });
</script>


@endsection

