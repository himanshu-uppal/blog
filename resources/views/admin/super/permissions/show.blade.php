@extends('admin.master')

@section('title', 'Permission')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3> Permission</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('permissions.create')}}" class="btn blue">Add new permission </a>
		</div>		
	</div>
	<div class="row">
	
	
		
			Permission Name :{{ $permission->name }}</br>
			Display Name:{{ $permission->display_name }}</br>
			Description:{{ $permission->description }}</br>
		
			<a href="{{ route('permissions.edit',$permission->id) }}" class="btn ">Edit</a>

			
			

		</div>
			
	
		
	
		   
	</div>
</main>
@endsection
