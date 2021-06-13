@extends('posts.master')

@section('title', 'Edit Post')

@section('content')
    <h1 class="text-center mt-2">{{ __('edit post') }}</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="title">{{ __('title') }}</label>
            <input id="title" class="form-control" name="title" type="text" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="summary">{{ __('summary') }}</label>
            <textarea id="summary" class="form-control" name="summary" rows="1">{{ $post->summary }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="content">{{ __('content') }}</label>
            <textarea id="content" class="form-control" name="content" rows="10">{{ $post->content }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">{{ __('submit') }}</button>
        <a class="btn btn-secondary" href="{{ route('posts.index') }}">{{ __('go back') }}</a>
    </form>
@endsection
