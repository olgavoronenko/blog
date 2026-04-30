@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
            <div class="card bg-base-300  shadow-sm">
                <figure>
                <img src="https://wordclerks.com/pics/334-1fAYXc1515611357.jpg" />
            </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{!! $post->displayBody !!}</p>
                    <div class="card-actions justify-end">

                    </div>
                </div>
            </div>


@endsection
