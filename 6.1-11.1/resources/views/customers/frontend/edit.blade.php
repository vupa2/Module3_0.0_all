@extends('customers.master')

@section('title', __('edit customer'))

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>{{ ucwords(__('edit customer')) . ': ' . $customer->first_name . ' ' . $customer->last_name }}</h1>
            </div>
            <div class="col-12  w-25 mx-auto">
                <form method="POST" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="first-name">{{ __('first name') }}</label>
                        <input id="first-name" class="form-control" name="first_name" type="text" value="{{ $customer->first_name }}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="last-name">{{ __('last name') }}</label>
                        <input class="form-control" name="last_name" for="last-name" type="text" value="{{ $customer->last_name }}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" value="{{ $customer->email }}" placeholder="Enter email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="dob">{{ __('dob') }}</label>
                        <input id="dob" class="form-control" name="dob" type="date" value="{{ $customer->dob }}" required>
                    </div>
                    <button class="btn btn-primary" type="submit">{{ __('update') }}</button>
                    <a class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{ __('go back') }}</a>
                </form>
            </div>
        </div>
    </div>
@endsection
