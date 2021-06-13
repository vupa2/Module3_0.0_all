@extends('jquery-ajax.master')

@section('title', '[Bài tập] HTML DOM')

@section('content')
    <h5 class="text-center mt-2">Cửa hàng bánh Chocola</h5>
    <div class="d-flex justify-content-center">

        <div class="container-fluid mt-2">
            <div class="card text-dark bg-light mb-2">
                <div class="card-header fw-bold">Các loại bánh Chocola</div>
                <div class="card-body row justify-content-center">
                    <table id="shop" class="table text-center col-auto align-middle">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 40%">Tên</th>
                                <th scope="col" style="width: 30%">Giá</th>
                                <th scope="col" style="width: 30%">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 40%">Sản phẩm 1</td>
                                <td style="width: 30%">$1.1</td>
                                <td style="width: 30%">
                                    <a class="btn-add btn btn-primary" href="#">Thêm</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%">Sản phẩm 2</td>
                                <td style="width: 30%">$2.2</td>
                                <td style="width: 30%">
                                    <a class="btn-add btn btn-primary" href="#">Thêm</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 40%">Sản phẩm 3</td>
                                <td style="width: 30%">$3.3</td>
                                <td style="width: 30%">
                                    <a class="btn-add btn btn-primary" href="#">Thêm</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-2">
            <div class="card text-dark bg-light mb-2">
                <div class="card-header fw-bold">Giỏ hàng</div>
                <div class="card-body row justify-content-center">
                    <table id="cart" class="table text-center col-auto align-middle">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 40%">Tên</th>
                                <th scope="col" style="width: 20%">Giá</th>
                                <th scope="col" style="width: 30%">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="w-50 mx-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input id="cost" class="form-control text-center" type="number" value="0" readonly>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        const shop = $('#shop tbody');
        const cart = $('#cart tbody');
        const cost = $('#cost');

        shop.on('click', '.btn-add', function(event) {
            event.preventDefault();
            const temp = $(this).parents().eq(1).clone();
            const tempBtn = temp.find('.btn-add');
            tempBtn.toggleClass("btn-primary btn-danger");
            tempBtn.toggleClass("btn-add btn-remove");
            tempBtn.text('Xóa');
            cart.append(temp);
        });

        cart.on('click', '.btn-remove', function(event) {
            event.preventDefault();
            $(this).parents().eq(1).remove();
        });

        cart.bind("DOMSubtreeModified", function() {
            let sum = 0;
            $(this).children('tr').each(function() {
                const price = $(this).children('td').eq(1).text().trim();
                sum += parseFloat(price.substring(1));
            });
            cost.val(sum.toFixed(2));
        });

    </script>
@endpush
