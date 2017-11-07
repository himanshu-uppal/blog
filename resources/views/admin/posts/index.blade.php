@extends('admin.master')

@section('title', 'All Posts')

@section('main')
<main>


<div class="container">
	<div class="row">
		<div class="col s6">
			<h3>All Posts</h3>
		</div>	
		<div class="col s6">
			<a href="{{route('posts.create')}}" class="btn blue">Create New Post </a>
		</div>		
	</div>
	
	<table class="table">
		<thead>
			<th>#</th>
			<th>Title</th>
			<th>Body</th>
			<th>Slug</th>
			<th>created At</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($posts as $post)
	<tr>
		<th>{{ $post->id }}</th>
		<td>{{ $post->title }}</td>
		<td>{{ substr($post->content,0,50) }}</td>
		<td><a href="{{ url($post->slug) }}">{{ $post->slug }}</a></td>
		<td>{{ date('F d, Y', strtotime($post->created_at)) }}</td>
		<td>
			<a href="{{ route('posts.show',$post->id) }}" class="btn ">View</a>
			<a href="{{ route('posts.edit',$post->id) }}" class="btn ">Edit</a>
		</td>
		
	</tr>
	@endforeach
		</tbody>

	</table>

	
		   <div class = "row" >
         <div class = "col s12" >
		{{ $posts->links() }}
	</div>
	
	</div>
</main>
@endsection
