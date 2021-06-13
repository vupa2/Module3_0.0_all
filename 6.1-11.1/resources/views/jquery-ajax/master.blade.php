<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid w-75">
            <form class="d-flex">
                <input class="form-control me-2" type="search" aria-label="Search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div>
                <a class="btn btn-primary" type="submit" href="{{ url('/jquery') }}">Jquery</a>
                <a class="btn btn-danger" type="submit" href="{{ url('/ajax') }}">Ajax</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid w-75 my-3">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
