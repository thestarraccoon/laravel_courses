@extends('layouts.admin')

@section('content')
    <div>
        <div>
            <a href="{{ route('admin.post.create') }}" class="btn btn-success mb-3">Add shit</a>
        </div>
        <div>
            @foreach($posts as $post)
                <div><a href="{{ route('admin.post.show', $post->id) }}">{{ $post->title  }}</a></div>
            @endforeach
        </div>

        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
