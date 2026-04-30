@extends('partials.layout')
@section('title', 'View Tag')
@section('content')
    <h1 class="text-3xl mb-4">Tag: {{ $tag->name }}</h1>

    <h2 class="text-2xl mt-6 mb-2">Posts with this tag:</h2>

    @if($posts->count())
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    @else
        <p>No posts found for this tag.</p>
    @endif
@endsection
