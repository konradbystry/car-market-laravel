<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/cropped-favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">

    @yield('styles')

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ae43476c3b.js" defer crossorigin="anonymous"></script>
    <title>Car Market</title>
</head>
<body>
    <header class="sticky">
        <a href="#" class="logo">Car Market</a>
        <ul>
            <li><a href="#">Watching</a></li>
            <li><a href="#">Login</a></li>
            <li><button class=button>+ Start selling</button></li>
        </ul>
    </header>

    @yield('content')

</body>

</html>
