@extends('admin.master')

@section('title', 'Permissions')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Permissions</h3>
		</div>	
		@can('create',App\Permission::class)
		<div class="col s4 ">
			<a href="{{route('categories.create')}}" class="btn blue">Add new permission </a>
		</div>
		@endcan		
	</div>
	
	<table class="table">
		<thead>
			<th>#</th>
			<th>Permission Name</th>			
			<th>Display Name</th>
			<th>Description</th>			
			<th></th>			
		</thead>
		<tbody>
			@foreach($permissions as $permission)
	<tr>
		<th>{{ $permission->id }}</th>
		<td>{{ $permission->name }}</td>
		<td>{{ $permission->display_name }}</td>		
		<td>{{ substr($permission->description,0,40) }}</td>
		
		<td>
			<div class="row">
				@can('update',$permission)
				<div class="col s6">
					<a href="{{ route('permissions.show',$permission->id) }}" class="btn ">View</a>
			
				</div>
				@endcan
				@can('delete',$permission)
				<div class="col s6">
					<a href="{{ route('permissions.edit',$permission->id) }}" class="btn ">Edit</a>
			
				</div>
				@endcan
				
			</div>
			
		</td>		
	</tr>
	@endforeach
		</tbody>

	</table>
	
		   
	</div>
</main>
@endsection
