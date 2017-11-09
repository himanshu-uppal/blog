@extends('admin.master')

@section('title', 'Category')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3> Category</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('categories.create')}}" class="btn blue">Add New category </a>
		</div>		
	</div>
	<div class="row">
	
	
		
			Category Name :{{ $category->category}}</br>
			Description:{{ $category->description }}</br>
			Post_Count:post_count</br>
			<a href="{{ route('categories.edit',$category->id) }}" class="btn ">Edit</a>

			{!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
	{!! Form::submit('Delete',['class'=>' btn']) !!}
	{!! Form::close() !!}
			

		</div>
			
	
		
	
		   
	</div>
</main>
@endsection
