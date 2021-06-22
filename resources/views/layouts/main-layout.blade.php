<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/cropped-favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <script src="assets/js/header.js" defer></script>
    <script src="https://kit.fontawesome.com/ae43476c3b.js" defer crossorigin="anonymous"></script>
    <title>{{env("APP_NAME")}}</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Car Market</a>
        <ul>

            <li><a href={{env('APP_URL') . "/watches"}}>Watching</a></li>
            <li><a href={{env('APP_URL') . "/auth/register"}}>Register</a></li>
            <li><a href=
                @if(isset($user->name))
                {{env('APP_URL') . "/logout"}}>
                @else
                {{env('APP_URL') . "/auth/login"}}>
                @endif
            @if(isset($user->name))
            Logout
            @else
            Login
            @endif
            </a></li>
            <li><a href={{route('user')}}>{{$user->name ?? "Guest"}}</a></li>
            <li><form action={{env('APP_URL') . "/create-ad"}}><button class=button>+ Start selling</button></form></li>
        </ul>
    </header>

    @yield('content')


</body>

</html>
