@extends('products.master')

@section('title', 'Giỏ Hàng')

@section('content')
    <h1 class="text-center mt-2">Giỏ Hàng</h1>

    <div class="container-fluid mt-3">
        <!-- Kiểm tra biến $product được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại thì hiển thị thông báo -->

        <!-- Nếu biến $product tồn tại thì hiển thị sản phẩm -->
        <div class="card col-12 mx-auto w-75">
            @if (isset($product))
                <div class="card-header">
                    Giỏ hàng đang trống.
                </div>
            @else
                <div class="card-header d-flex justify-content-between fs-5 fw-bold text-primary">
                    <span>Tổng số sản phẩm: {{ count($products) }}</span>
                    <span>Tổng số tiền: ${{ array_sum($sum) }}</span>
                </div>

                <ul class="list-group list-group-flush">
                    @unless(empty($products))
                        <form id="update-basket-form" action="{{ route('products.baskets.update') }}" method="POST">
                            @csrf
                            @foreach ($products as $product)
                                <li class="list-group-item d-flex justify-content-start">
                                    <img class="card-img" src="{{ asset('storage/images/test/iphone-12-violet-1.jpg') }}" alt="Đây là ảnh rất to" style="width: 150px; height: 150px;">
                                    <div>
                                        <p class="text-dark fw-bold mb-3">{{ $product->name }}</p>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Số lượng</span>
                                            <input class="form-control" name="{{ $product->id }}" type="number" value="{{ $quantities[$product->id] }}" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                                        </div>
                                        <a class="btn-sm btn-danger btn" href="{{ route('products.baskets.delete', $product->id) }}">Xóa sản phẩm này</a>
                                    </div>
                                </li>
                            @endforeach
                        </form>
                    @endunless

                    <li class="list-group-item">
                        <div class="d-flex justify-content-center">
                            @unless(empty($products))
                                <a id="update-basket-btn" class="btn btn-success mx-1" href="#">Cập nhật</a>
                                <a class="btn btn-danger mx-1" href="{{ route('products.baskets.delete') }}" onclick="return confirm('Bạn có chắc chắn?')">Xóa toàn bộ</a>
                            @endunless
                            <a class="btn btn-secondary mx-1" href="{{ route('products.index') }}">Quay lại</a>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.querySelector('a#update-basket-btn').addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm('Bạn có muốn cập nhật sản phẩm?')) {
                document.getElementById('update-basket-form').submit();
            } else {
                return false;
            }
        });

    </script>
@endpush
