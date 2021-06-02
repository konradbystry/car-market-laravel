@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked" action={{route('auth.save')}} method="GET">
            @csrf



                <input type="user" id="stacked-user" name="user" placeholder="Login" />

                <input type="password" id="stacked-password" name="password" placeholder="Password" />
                <button type="submit" class="pure-button pure-button-primary">Sign in</button>

        </form>
    </div>

@endsection
