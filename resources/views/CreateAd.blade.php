@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked" action='{{route('create-ad.upload')}}' method="POST" enctype="multipart/form-data">
            @csrf
                <input type="text" id="brand" name='brand' placeholder="Brand" autocomplete="off" value={{old('brand')}}> <br>
                <input type="text" id="model" name='model' placeholder="Model" autocomplete="off"  value={{old('model')}}> <br>
                <input type="number" id="distance" name='distance' placeholder="Distance" autocomplete="off"  value={{old('distance')}}> <br>
                <input type="date" id="productionDate" name='productionDate' placeholder="Production Date" autocomplete="off"  value={{old('productionDate')}}> <br>
                <input type="text" id="engine" name='engine' placeholder="Engine" autocomplete="off" value={{old('engine')}}> <br>
                <input type="number" id="power" name='power' placeholder="Power" autocomplete="off" value={{old('power')}}> <br>
                <input type="number" id="price" name='price' placeholder="Price" autocomplete="off" value={{old('price')}}> <br>
                <input type="text" id="phone" name='phone' placeholder="Phone Number" autocomplete="off" value={{old('phone')}}> <br>

                <label for="image">Image</label>
                <input type="file" id="image" name='image'>
                <button type="submit" class="pure-button pure-button-primary">Create</button>
        </form>
    </div>

@endsection
