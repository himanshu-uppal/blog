@extends('admin.master')

@section('title', 'Role')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3> Role</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('roles.create')}}" class="btn blue">Add new role </a>
		</div>		
	</div>
	<div class="row">
	
	
		
			Role Name :{{ $role->role }}</br>
			Display Name:{{ $role->display_name }}</br>
			Description:{{ $role->description }}</br>
			 @foreach($role->permissions as $role_permission)
              <p>{{ $role_permission->display_name }} </p>
              @endforeach
		
			<a href="{{ route('roles.edit',$role->id) }}" class="btn ">Edit</a>

			
			

		</div>
			
	
		
	
		   
	</div>
</main>
@endsection
