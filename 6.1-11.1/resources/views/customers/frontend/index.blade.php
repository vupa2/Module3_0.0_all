@extends('customers.master')

@section('title', __('customer list'))

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h3>{{ ucwords(__('customer list')) }}</h3>
            </div>

            <div class="col-12 w-25 mx-auto">
                @if (session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            @if ($customers->isEmpty())
                <div class="alert alert-danger alert-dismissible fade show w-25 mx-auto" role="alert">
                    {{ __('no data') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @else
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('first name') }}</th>
                            <th scope="col">{{ __('last name') }}</th>
                            <th scope="col">{{ __('dob') }}</th>
                            <th scope="col">Email</th>
                            <th scope="col">{{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $customer->first_name }}</td>
                                <td>{{ $customer->last_name }}</td>
                                <td>{{ $customer->dob }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('customers.edit', $customer->id) }}">{{ __('edit') }}</a>
                                    <a id="delete-customer" class="btn btn-sm btn-danger">{{ __('delete') }}</a>
                                    <form id="delete-customer-form" class="d-none" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif


        </div>
    </div>
    <a class="btn btn-primary" href="{{ route('customers.create') }}">{{ __('create') }}</a>
@endsection

@push('scripts')
    <script>
        document.querySelector('a#delete-customer').addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm("{{ __('confirm delete customer') }}")) {
                document.getElementById('delete-customer-form').submit();
            } else {
                return false;
            }
        })

    </script>
@endpush
