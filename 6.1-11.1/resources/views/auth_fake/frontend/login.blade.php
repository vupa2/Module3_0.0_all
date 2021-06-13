@extends('auth_fake.master')

@yield('Đăng Nhập')

@section('content')
    <div class="title m-b-md">
        {{ __('login') }}
    </div>

    <!-- Hiển thị thông báo đăng nhập thành công hay không -->
    @if (session()->has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{ session()->get('login-fail') }}</p>
        </div>
    @endif

    <!-- Hiển thị trạng thái chưa đăng nhập -->
    @if (session()->has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ session()->get('not-login') }}</p>
        </div>
    @endif

    <div class="form-login">
        <form class="text-left" method="POST" action="{{ route('auth.login') }}">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label" for="username">{{ __('username') }}</label>
                <input id="username" class="form-control" name="username" type="text" placeholder="{{ __('enter username') }}" required>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="password">{{ __('password') }}</label>
                <input id="password" class="form-control" name="password" type="password" placeholder="{{ __('password') }}" required>
            </div>
            <button class="btn btn-primary" type="submit">{{ __('login') }}</button>
        </form>
    </div>
@endsection
