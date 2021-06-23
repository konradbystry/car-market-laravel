@extends('layouts.subpages-layout')

@section('content')

    <div class="login">
        <form class="pure-form pure-form-stacked" action='{{route('auth.save')}}' method="GET">
            @csrf



                <input type="text" id="username" name='username' placeholder="Username" autocomplete="off" value={{old('username')}}> <br>
                <input type="text" id="email" name='email' placeholder="Email" autocomplete="off"  value={{old('email')}}> <br>
                <input type="password" id="password" name='password' placeholder="Password" /> <br>


                <button type="submit" class="pure-button pure-button-primary">Register</button>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <h5 class="login-error">{{ $error }}</li>
                    @endforeach
                @endif

                @if (Session::get('fail'))
                    <h5 class="login-error">{{Session::get('fail')}}</h5>
                @endif


        </form>
    </div>

@endsection
