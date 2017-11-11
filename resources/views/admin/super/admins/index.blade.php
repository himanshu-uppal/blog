@extends('admin.master')

@section('title', 'Admins')

@section('main')
<main>


<div class="row">
	<div class="col s1"></div> 
	
	<div class="col s10 ">
	<div class="row">
		<div class="col s6">
			<h3>All Admins</h3>
		</div>	
				
	</div>

	 <div class="row">
	 	@foreach($admins as $admin)
	 	 <div class="col s12 m6">
          <div class="card amber lighten-3">
            <div class="card-content ">
              <span class="card-title"> {{ $admin->name }}</span>
              @foreach($admin->roles as $admin_role)
              <p>{{ $admin_role->role }}</p>
              @endforeach
              @foreach($admin->permissions() as $admin_permission)
              <p>{{ $admin_permission }}</p>
              @endforeach
              
            
         
             
            </div>
            
          </div>
        </div>
	
	@endforeach
       
      </div>
	
	
			
		
	
		   
	</div>
</div>
</main>
@endsection
