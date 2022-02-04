@extends('layouts.app')

@section('content')
    <h1 class="py-5 text-center">
        {{$post->title}}
    </h1>

    <p class="text-center">
        {{$post->content}}
    </p>

    <div class="container pt-5">
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning mr-3">Modifica</a>
    </div>
@endsection

@section('title')
    {{$post->title}}
@endsection