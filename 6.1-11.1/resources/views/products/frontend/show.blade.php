@extends('products.master')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <h1 class="text-center mt-2">Chi tiết sản phẩm</h1>

    <div class="container-fluid mt-3">
        <!-- Kiểm tra biến $product được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại thì hiển thị thông báo -->

        <!-- Nếu biến $product tồn tại thì hiển thị sản phẩm -->
        <div class="card col-12 mx-auto w-50">
            @if (!isset($product))
                <div class="card-header">
                    Không có sản phẩm nào.
                </div>
            @else
                <div class="card-header">
                    <span class="fw-bold fs-5">{{ $product->name }}</span>
                </div>
                <div class="card-body row justify-content-center">
                    <div class="mb-3 d-flex justify-content-around fs-6 fw-bold">
                        <span class="card-text text-danger">Giá: ${{ $product->price }}</span>
                        <span class="card-text text-success">Số lượt xem: {{ $product->view_count }}</span>
                    </div>
                    <img src="{{ asset('storage/images/test/iphone-12-violet-1.jpg') }}" alt="Đây là ảnh rất to" class="card-img mb-3" style="width: 300px; height: 300px;">
                    <p class="card-text" ><span class="fw-bold">Mô tả: </span>{{ $product->description }}</p>
                    <!-- Nút XEM chuyển hướng người dùng quay lại trang danh sách sản phẩm -->
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-success mx-1" href="{{ route('products.baskets.add', $product->id) }}">Mua ngay</a>
                        <a class="btn btn-secondary mx-1" href="{{ route('products.index') }}">Quay lại</a>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
