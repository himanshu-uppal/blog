@extends('master')

@section('title', 'Home')

@section('main')

<h1>Index Page</h1>
<div >
@foreach($posts as $post)
<div >
	<h2>Title:- {{ $post->title }}</h2>
	<h5>Published : {{ date('F d, Y', strtotime($post->created_at)) }}</h5>
	<p>{{ $post->content }}</p>
	<p>{{ substr($post->content,0,250) }} 
		@if(strlen($post->content)>250) ... @else  @endif</p>


	</div>
@endforeach
</div>
<div class="text-center">
		{{ $posts->links() }}
	</div>
@endsection