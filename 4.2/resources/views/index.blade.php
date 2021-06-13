<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Tasks List
            </div>
            @if (session()->has('create-success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('create-success') }}
                </div>
            @endif
            <div>
                @if (!isset($tasks))
                    <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Created</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($tasks) === 0)
                                <tr>
                                    <td colspan="5">
                                        <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                                    </td>
                                </tr>
                            @else
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->content }}</td>
                                        <td>{{ $task->created_at }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td>
                                            <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

</body>

</html>
