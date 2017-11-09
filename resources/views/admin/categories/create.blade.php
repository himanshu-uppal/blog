@extends('admin.master')

@section('title', 'Add Category')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')
<main>


<div class="container">
	<div class="row">
		<div class="col s6">
			<h3>Add Category</h3>
	{!! Form::open(array('route'=>'categories.store','data-parsley-validate'=>'true','method'=>'POST')) !!}
		


	<div class="row">
			<div class="input-field col s10">

				{{ Form::label('category','Category Name')}}
				{{ Form::text('category',null,array('class'=>'validate','data-parsley-required'=>'')) }}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s10">
				{{ Form::label('description','Description:')}}
				{{ Form::textarea('description',null,array('class'=>'materialize-textarea validate','data-parsley-required'=>'')) }}
			</div>
		</div>		
		<div class="row">
			<div class="input-field col s6">
				{{ Form::submit('Add Category',array('class'=>'btn green lighten-1 waves-effect waves-light'))}}
				{!! Form::close() !!}
			</div>
		</div>

		</div>
		<div class="col s6">
			<h4>Existing Categories</h4>
			<table>
				<thead>
			<th>#</th>
			<th>Category Name</th>
			<th>Description</th>				
		</thead>
		<tbody>
			 @foreach($categories as $category)
			 <tr>
	    <td>{{ $category->id}}</td>
		<td>{{ $category->category}}</td>
		<td>{{ substr($category->description,0,40) }}</td>
	
	</tr>		        
         
          

        @endforeach 
        </tbody>
            </table> 
		</div>
	</div>
	


	</div>
</main>
@endsection
@section('footer-scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection