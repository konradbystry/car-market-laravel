@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked" action={{route('auth.check')}} method="GET">
            @csrf



                <input type="user" id="stacked-user" name="user" placeholder="Login" value={{old('user')}} />

                <input type="password" id="stacked-password" name="password" placeholder="Password"/>
                <button type="submit" class="pure-button pure-button-primary">Sign in</button>

                @if (@Session::get('fail'))
                    <h2>fail</h2>
                @endif

        </form>
    </div>

@endsection
