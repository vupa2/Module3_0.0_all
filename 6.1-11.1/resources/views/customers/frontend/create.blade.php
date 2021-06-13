@extends('customers.master')

@section('title', __('create new customer'))

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>{{ __('create new customer') }}</h1>
            </div>
            <div class="col-12  w-25 mx-auto">
                <form method="POST" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="first-name">{{ __('first name') }}</label>
                        <input id="first-name" class="form-control" name="first_name" type="text" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="last-name">{{ __('last name') }}</label>
                        <input for="last-name" class="form-control" name="last_name" type="text" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="dob">{{ __('dob') }}</label>
                        <input id="dob" class="form-control" name="dob" type="date" required>
                    </div>
                    <button class="btn btn-primary" type="submit">{{ __('create') }}</button>
                    <a class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{ __('go back') }}</a>
                </form>
            </div>
        </div>
    </div>
@endsection
