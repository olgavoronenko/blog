@extends('partials.layout')
@section('title', 'Create Tag')
@section('content')
    <h1 class="text-3xl mb-4">Create Tag</h1>
    <form action="{{ route('tags.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="label">Tag Name</label>
            <input type="text" name="name" class="input input-bordered w-full" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
