@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked">
            <fieldset>


                <input type="email" id="stacked-email" placeholder="Login" />

                <input type="password" id="stacked-password" placeholder="Password" />
                <button type="submit" class="pure-button pure-button-primary">Sign in</button>
            </fieldset>
        </form>
    </div>

@endsection
