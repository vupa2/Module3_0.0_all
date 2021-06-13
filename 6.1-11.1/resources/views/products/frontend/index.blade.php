@extends('products.master')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <h1 class="text-center mt-2">Danh sách sản phẩm</h1>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center row-cols-sm-3 g-3">
            <!-- Kiểm tra biến $products được truyền sang từ ProductController -->
            <!-- Nếu biến $products không tồn tại hoặc có số lượng băng 0 (không có sản phẩm nào) thì hiển thị thông báo -->
            @if (!isset($products) || count($products) === 0)
                <p class="text-danger">Không có sản phẩm nào.</p>
            @else
                <!-- Nếu biến $products tồn tại thì hiển thị sản phẩm -->
                @foreach ($products as $product)
                    <div class="card m-3 w-25">
                        <img class="card-img-top mx-auto" src="{{ asset('storage/images/test/iphone-12-violet-1.jpg') }}" alt="Đây là ảnh rất to" style="width: 150px; height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <div class="mb-3">
                                <p class="card-subtitle badge bg-danger me-2">Giá: ${{ $product->price }}</p>
                                <p class="card-subtitle badge bg-success">Lượt xem: {{ $product->view_count }}</p>
                            </div>
                            <p class="card-text">{{ $product->description }}</p>
                            <!-- Nút XEM chuyển hướng người dùng sang trang chi tiết -->
                            <a class="btn btn-success" href="{{ route('products.baskets.add', $product->id) }}">Thêm vào giỏ</a>
                            <a class="btn btn-primary me-1" href="{{ route('products.show', $product) }}">Xem</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
