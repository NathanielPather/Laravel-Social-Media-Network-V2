@extends('layouts.master')

@section('title', 'Page Title')

@section('navbar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
