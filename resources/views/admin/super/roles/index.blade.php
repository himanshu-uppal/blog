@extends('admin.master')

@section('title', 'Roles')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Roles</h3>
		</div>	
		<div class="col s4 ">
			<a href="{{route('roles.create')}}" class="btn blue">Add New role </a>
		</div>		
	</div>

	 <div class="row">
	 	@foreach($roles as $role)
	 	 <div class="col s12 m6">
          <div class="card amber lighten-3">
            <div class="card-content ">
              <span class="card-title"> {{ $role->display_name }}</span>
              <p>{{ substr($role->description,0,60) }}</p>
             
          </br>
              <div class="row">
				<div class="col s6">
					<a href="{{ route('roles.show',$role->id) }}" class="btn green lighten-1">Details</a>
			
				</div>
				<div class="col s6">
					<a href="{{ route('roles.edit',$role->id) }}" class="btn green lighten-1">Edit</a>
			
				</div>
				
			</div>
            </div>
            
          </div>
        </div>
	
	@endforeach
       
      </div>
	
	
			
		
	
		   
	</div>
</div>
</main>
@endsection
