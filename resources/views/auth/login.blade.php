@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked" action={{route('auth.check')}} method="GET">
            @csrf



                <input type="text" id="user" name='user' placeholder="Username" autocomplete="off" value="{{old('user')}}"> <br>

                <input type="password" id="password" name='password' placeholder="Password" /> <br>
                <button type="submit" class="pure-button pure-button-primary">Sign in</button>

                @if (@Session::get('fail'))
                    <h2>fail</h2>
                @endif


        </form>
    </div>

@endsection
