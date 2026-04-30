@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <h1 class="text-3xl">Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn join-item btn-primary w-full mt-4">New Post +</a>
    <table class="table table-zebra w-full">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <div class="join">
                            <a class="btn join-item btn-info">View</a>
                            <a href="{{ route('posts.edit', ['post' => $posts]) }}" class="btn join-item btn-warning">Edit</a>
                            <button form="delete-form-{{$post->id}}" class="btn join-item btn-error" type="submit">Delete</button>


                        </div>
                        <form id="delete-form-{{$post->id}}" action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
