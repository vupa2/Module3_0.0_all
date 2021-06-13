<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="col-12 menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link @if (session('language')==='en' ) text-danger @endif" href=" {{ route('language.change', ['en']) }}">EN @if (session('language') === 'en')<span class="sr-only">(current)</span>@endif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (session('language')==='vi' ) text-danger @endif" href="{{ route('language.change', ['vi']) }}">VI @if (session('language') === 'vi')<span class="sr-only">(current)</span>@endif</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-12 content w-75 mx-auto text-center">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
