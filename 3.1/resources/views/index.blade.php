<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Ứng dụng kiểm tra email hợp lệ</title>
</head>

<body>
    <div class="main-content">
        <h1>Ứng dụng kiểm tra email hợp lệ</h1>
        <form method="post" action="{{ route('checkEmail') }}">
            @csrf
            <label for="email-input">Email:</label>
            <input id="email-input" type="text" placeholder="Nhập email cần kiểm tra" name="email">
            <input type="submit" value="Check">
        </form>
        @isset($isEmail)
            <span>Kết quả: {{ $isEmail ? 'Đúng định dạng Email' : 'Sai định dạng Email' }}</span>
        @endisset
    </div>
</body>

</html>
