@extends('admin.master')

@section('title', 'All Posts')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div>
	<div class="col s11 right-align">
	<div class="row">
		<div class="col s6">
			<h3>All Posts</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('posts.create')}}" class="btn blue">Create New Post </a>
		</div>		
	</div>
	
	<table class="table">
		<thead>
			<th>#</th>
			<th>Author</th>
			<th>Title</th>			
			<th>Slug</th>
			<th>Created At</th>
			<th>Published At</th>
			<th>Status</th>
			<th></th>			
		</thead>
		<tbody>
			@foreach($posts as $post)
	<tr>
		<th>{{ $post->id }}</th>
		<td>Author</td>
		<td>{{ $post->title }}</td>
		<td><a href="{{ url($post->slug) }}">{{ $post->slug }}</a></td>
		<td>{{ date('F d, Y', strtotime($post->created_at)) }}</td>
		<td>{{ date('F d, Y', strtotime($post->published_at)) }}</td>
		<td>Status</td>
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
	</div>
</main>
@endsection
