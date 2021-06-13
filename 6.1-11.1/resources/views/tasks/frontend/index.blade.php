@extends('tasks.master')

@section('title', __('task list'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{{ __('task list') }}</h2>
        </div>

        <div class="col-md-12">
            @if (session()->has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ session('success') }}
                </p>
            @endif
        </div>

        <div class="col-md-12">
            <table class="table table-striped  align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('name') }}</th>
                        <th scope="col">{{ __('content') }}</th>
                        <th scope="col">{{ __('image') }}</th>
                        <th scope="col">{{ __('due date') }}</th>
                        <th scope="col">{{ __('action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td>
                                @if ($task->image)
                                    <img src="{{ asset('storage/images/task/' . $task->image) }}" alt style="width: 100px; height: 100px">
                                @else
                                    {{ __('no image') }}
                                @endif
                            </td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('tasks.edit', $task) }}">{{ __('edit') }}</a>
                                <a id="delete-task" class="btn btn-sm btn-danger" href="#">{{ __('delete') }}</a>
                                <form id="delete-task-form" action="{{ route('tasks.destroy', $task) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('a#delete-task').addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm("{{ __('confirm delete task') }}")) {
                document.getElementById('delete-task-form').submit();
            } else {
                return false;
            }
        })

    </script>
@endpush
