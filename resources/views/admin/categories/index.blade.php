@extends('admin.master')

@section('title', 'Categories')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Categories</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('categories.create')}}" class="btn blue">Add New category </a>
		</div>		
	</div>
	
	<table class="table">
		<thead>
			<th>#</th>
			<th>Category Name</th>
			<th>Description</th>
			<th>Post Count</th>			
			<th></th>			
		</thead>
		<tbody>
			@foreach($categories as $category)
	<tr>
		<th>{{ $category->id }}</th>
		<td>{{ $category->category}}</td>
		<td>{{ substr($category->description,0,40) }}</td>
		<td> post_count </td>	
		
		<td>
			<div class="row">
				<div class="col s6">
					<a href="{{ route('categories.edit',$category->id) }}" class="btn ">Edit</a>
			
				</div>
				<div class="col s6">
					{!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>' btn']) !!}
	{!! Form::close() !!}
				</div>
			</div>
			
		</td>		
	</tr>
	@endforeach
		</tbody>

	</table>
	
		   </div>
	</div>
</main>
@endsection
