@extends('master')

@section('title', "| $post->title")

@section('main')

<h1>View Post</h1>

<div class="container">
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content }}</p>
  <a href="{{ url('$post->slug') }}">
    
    {{ $post->slug }}
  </a>
    
  </div>

@endsection
