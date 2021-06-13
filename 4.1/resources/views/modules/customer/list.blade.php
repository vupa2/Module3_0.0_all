<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Danh sách khách hàngn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <h1>Danh Sách Khách Hàng</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($customers) === 0)
                            <tr>
                                <td colspan="4">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach ($customers as $customer)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $customer['name'] }}</td>
                                    <td>{{ $customer['bod'] }}</td>
                                    <td>{{ $customer['email'] }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
