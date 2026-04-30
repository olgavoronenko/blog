@extends('partials.layout')
@section('title', 'Dashboard Page')
@section('content')
    {{ $posts->links() }}
    <div class="grid grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <div class="card bg-base-300  shadow-sm">
                <figure>
                <img src="https://wordclerks.com/pics/334-1fAYXc1515611357.jpg" />
            </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->snippet }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{route('post', ['post' => $post])}}" class="btn btn-primary">Read now</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
     {{ $posts->links() }}ˇ

@endsection
