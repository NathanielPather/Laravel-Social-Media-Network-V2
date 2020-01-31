@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <p>This is my body content.</p>
    @foreach ($posts as $post)
        <p>{{$post->user}}</p>
    @endforeach
@endsection
