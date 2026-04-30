@extends('partials.layout')
@section('title', 'Tags')
@section('content')
    <h1 class="text-3xl">Tags</h1>
    <a href="{{ route('tags.create') }}" class="btn join-item btn-primary w-full mt-4">New Tag +</a>
    <table class="table table-zebra w-full mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->created_at->diffForHumans() }}</td>
                    <td>{{ $tag->updated_at->diffForHumans() }}</td>
                    <td>
                        <div class="join">
                            <a href="{{ route('tags.show', $tag) }}" class="btn join-item btn-info">View</a>
                            <a href="{{ route('tags.edit', $tag) }}" class="btn join-item btn-warning">Edit</a>
                            <form id="delete-form-{{ $tag->id }}" action="{{ route('tags.destroy', $tag) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn join-item btn-error"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tags->links() }}
@endsection
