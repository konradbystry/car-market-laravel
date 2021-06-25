@extends('layouts.subpages-layout')

@section('content')

    <section class="ads">


        @if (isset($user))
        @foreach ($cars as $car)
         <div class="ad">
            <a href={{env('APP_URL') . "/user/" . $car->id}}>
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
                        <form action="">
                            <button class="remove-button" data-car="{{$car->id}}">Remove</button>
                        </form>

                    </div>

                </div>

            </a>

        </div>
        @endforeach
        @endif

        <div class="pagination-block">
            {{$cars->links('layouts.pagination')}}
        </div>

        @if (count($cars) == 0)
        <div class="empty">
            <h3>No ads yet, start selling now!</h3>
        </div>
        @endif

    </section>

@endsection

@section('scripts')

<script
src="https://code.jquery.com/jquery-3.6.0.js"
 integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script>
    $(function(){
        $(".remove-button").click(function(e){
            e.preventDefault();
            console.log($(this).data('car'));
            console.log('works');
            $.ajax({
                method: "GET",
                url: "http://localhost/car-market-laravel/public/user/" + $(this).data('car') + "/remove" ,
                //data: { name: "John", location: "Boston" }
            })
            .done(function(response) {
                window.location.reload();
            })
            .fail(function(response){
                alert("Something went wrong");
            })
        })
    });
</script>


@endsection
