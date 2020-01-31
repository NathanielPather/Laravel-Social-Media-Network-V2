@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    @foreach ($posts as $post)
        <pre>
            <div id="user">{{$post->user}}</div><div id="timestamp">{{date('F d, Y', strtotime($post->created_at))}}</div>
            <div id="post">{{$post->post}}</div>
        </pre>
    @endforeach
@endsection
