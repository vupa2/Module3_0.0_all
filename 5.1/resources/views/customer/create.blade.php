@extends('home')

@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên khách hàng</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Ngày sinh</label>
                        <input id="dob" type="date" class="form-control" name="dob" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
