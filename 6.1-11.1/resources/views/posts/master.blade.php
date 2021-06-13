<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid w-75">
            <form class="d-flex">
                <input class="form-control me-2" type="search" aria-label="Search" placeholder="{{ __('search') }}">
                <button class="btn btn-outline-success" type="submit">{{ __('search') }}</button>
            </form>
            <div>
                <a class="btn btn-primary" href="{{ route('posts.create') }}">{{ __('create post') }}</a>
                @if (session()->has('login'))
                    <a class="btn btn-danger" href="{{ route('auth.logout') }}">{{ __('logout') }}</a>
                @else
                    <a class="btn btn-success" href="{{ route('auth.login') }}">{{ __('login') }}</a>
                @endif
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->currentLocale()) }}
                    </button>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('language.change', ['en']) }}">EN</a>
                        <a class="dropdown-item" href="{{ route('language.change', ['vi']) }}">VI</a>
                    </ul>
                </div>
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
