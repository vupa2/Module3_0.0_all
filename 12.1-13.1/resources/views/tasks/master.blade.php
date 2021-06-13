<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid w-75">
            <form class="d-flex">
                <input class="form-control me-2" type="search" aria-label="Search" placeholder="{{ __('search') }}">
                <button class="btn btn-outline-success" type="submit">{{ __('search') }}</button>
            </form>
            <div>
                <a class="btn btn-success" href="{{ route('tasks.create') }}">{{ __('create') }}</a>
                <a class="btn btn-primary" href="{{ route('tasks.index') }}">{{ __('homepage') }}</a>
                @if (auth()->user())
                    <a id="logout-btn" class="btn btn-danger" href="#">{{ __('logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                @else
                    <a class="btn btn-info" href="{{ route('login') }}">{{ __('login') }}</a>
                @endif
                <div class="btn-group">
                    <button class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-expanded="false">
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

    <div class="container w-75 text-center mt-3">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script>
        document.querySelector('#logout-btn').addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm("Do you really want logout?")) {
                document.querySelector('#logout-form').submit();
            } else {
                return false;
            }
        })

    </script>

    @stack('scripts')
</body>

</html>
