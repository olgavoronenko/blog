@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <div class="grid grid-cols-4 gap-4">
    @foreach ($posts as $post)
        <div class="card bg-base-300  shadow-sm">
            {{-- <figure>
                <img src="" />
            </figure> --}}
            <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p>{{$post->snippet}}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Read now</button>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
