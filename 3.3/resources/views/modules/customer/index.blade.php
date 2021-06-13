<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Danh sách khách hàng</title>
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Văn A</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="{{ route('customer.show', '1') }}">Xem</a> | <a href="{{ route('customer.edit', '1') }}">Sửa</a> | <a href="{{ route('customer.destroy', '1') }}">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nguyễn Văn B</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="{{ route('customer.show', '2') }}">Xem</a> | <a href="{{ route('customer.edit', '2') }}">Sửa</a> | <a href="{{ route('customer.destroy', '2') }}">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nguyễn Văn C</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="{{ route('customer.show', '3') }}">Xem</a> | <a href="{{ route('customer.edit', '3') }}">Sửa</a> | <a href="{{ route('customer.destroy', '3') }}">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nguyễn Văn D</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="{{ route('customer.show', '4') }}">Xem</a> | <a href="{{ route('customer.edit', '4') }}">Sửa</a> | <a href="{{ route('customer.destroy', '4') }}">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Nguyễn Văn E</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="{{ route('customer.show', '5') }}">Xem</a> | <a href="{{ route('customer.edit', '5') }}">Sửa</a> | <a href="{{ route('customer.destroy', '5') }}">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
