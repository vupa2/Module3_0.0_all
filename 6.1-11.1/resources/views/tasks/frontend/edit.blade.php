@extends('tasks.master')

@section('title', "Sửa công việc $task->title")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Sửa công việc: {{ $task->title }}</h2>
        </div>

        <div class="col-md-12 w-50 mx-auto">
            <form method="POST" action="{{ route('tasks.update', $task) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Tên công việc</label>
                    <input id="title" class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{ old('title', $task->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="content">Nội dung</label>
                    <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="6">{{ old('content', $task->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image">Ảnh</label>
                    <input id="image" class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="due_date">Ngày hết hạn</label>
                    <input id="due_date" class="form-control @error('due_date') is-invalid @enderror" name="due_date" type="date" value="{{ old('due_date', $task->due_date) }}">
                    @error('due_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Sửa đổi</button>
                    <a class="btn btn-secondary" href="{{ route('tasks.index') }}">Hủy</a>
                </div>

            </form>
        </div>
    </div>
@endsection
