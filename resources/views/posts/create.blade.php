@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Title</legend>
                    <input value="{{ old('title') }}" name="title" type="text"
                        class="input w-full @error('title') input-error @enderror" placeholder="Title" />
                    @error('title')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror

                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Content</legend>
                    <textarea name="body" class="textarea h-24 w-full @error('body') textarea-error @enderror"
                        placeholder="Write something cool">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Image</legend>
                    <input name="images[]" multiple type="file" class="file-input w-full @error('images.*') file-input-error @enderror" />
                    @error('images.*')
                    <p class="label text-error"> {{$message}}</p>
                    @enderror
                    <label class="label">Max size 2MB</label>
                </fieldset>
                <button class="btn btn-primary mt-4 w-full">Create +</button>
            </form>
        </div>
    </div>
@endsection
