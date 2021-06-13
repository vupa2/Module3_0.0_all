@extends('posts.master')

@section('title', $post->title)

@section('content')
    <h1 class="text-center mt-2">{{ $post->title }}</h1>

    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <span>{{ __('updated') . ' ' . \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</span>
            </div>
            <div>
                @can('update')
                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit', $post) }}">{{ __('edit') }}</a>
                @endcan
                @can('delete')
                    <a class="btn btn-sm btn-danger" href="{{ route('posts.destroy', $post) }}">{{ __('delete') }}</a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p class="fw-bold fst-italic">{{ $post->summary }}</p>
                <p>{{ $post->content }}</p>
                <a class=" fs-6 fst-italic float-end" href="{{ route('posts.index') }}">
                    {{ __('go back') }}
                </a>
            </blockquote>
        </div>
    </div>
@endsection
