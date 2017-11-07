@extends('admin.master')

@section('title', 'View Post')

@section('main')
<main>


<div class="container">
	<h3>View Post</h3>
	<div class="row">
		<div class="col s7">
	<h5>{{ $post->title }}</h5>
	<p>{{ $post->content }}</p>
	
		
		
</div>
<div class="col s5 ">
	 <div class="card-panel grey lighten-5">
	 	<div class="row">

		<div class="col s2">Link:</div>
		<div class="col s10">
			<a href="{{ route('blog.single',$post->slug)}}">{{ $post->slug }}</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col s6">
		<a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default btn-sm">Edit</a>
	</div>
		<div class="col s6">
			{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>'btn btn-default btn-sm']) !!}
	{!! Form::close() !!}
		</div>
	</div>
	 </div>
	
	
	
	</div>
	</div>
	
		
	</div>
</main>
@endsection
