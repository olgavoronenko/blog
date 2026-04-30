@extends('partials.layout')
@section('title', 'Edit Tag')
@section('content')
    <h1 class="text-3xl mb-4">Edit Tag</h1>
    <form action="{{ route('tags.update', $tag) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="label">Tag Name</label>
            <input type="text" name="name" value="{{ old('name', $tag->name) }}" class="input input-bordered w-full" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
