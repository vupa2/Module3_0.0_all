@extends('posts.master')

@section('title', __('blog list'))

@section('content')

    <h1 class="text-center mt-2">{{ __('blog list') }}</h1>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{{ session('success') }}</span>
            <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <span class="fw-bold fs-5">{{ $post->title }}</span>
                    <span class="fst-italic fs-6"> | {{ strtolower(__('updated')) . ' ' . \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</span>
                </div>
                <div>
                    <a class="btn btn-sm btn-success" href="{{ route('posts.edit', $post) }}">{{ __('edit') }}</a>
                    <a id="delete-post" class="btn btn-sm btn-danger">{{ __('delete') }}</a>
                    <form id="delete-post-form" class="d-none" action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $post->summary }}</p>
                    <a class=" fs-6 fst-italic float-end" href="{{ route('posts.show', $post) }}">
                        {{ __('readmore') }}
                    </a>
                </blockquote>
            </div>
        </div>
    @endforeach

    <div class="mt-3 mx-auto w-50">
        {{ $posts->links() }}
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('a#delete-post').addEventListener('click', (e) => {
            e.preventDefault();
            if (confirm("Do you really want to delete this post?")) {
                document.getElementById('delete-post-form').submit();
            } else {
                return false;
            }
        })

    </script>
@endpush
