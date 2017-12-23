@extends('master')

@section('title', 'Contact')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
  @section('page-header-tag')
<header class="header full-height" style="background: url('{{ route('image.show',['image8.jpg']) }}')">
@endsection
   

@section('page-header-title')
<h1>Contact</h1>
@endsection 
    
@section('page-header-meta')
<h4>
</h4>
@endsection 
@section('main')

<h1>Contact page</h1>
<div class="container">

{!! Form::open(array('route'=>'contact.post','data-parsley-validate'=>'')) !!}

<div class="row">
			<div class="input-field col s10">


	{{ Form::label('email','Email:')}}
	{{ Form::text('email',null,array('class'=>'validate','required'=>'','data-parsley-type'=>'email')) }}

</div>
</div>
<div class="row">
			<div class="input-field col s10">

	</br>
	{{ Form::label('subject','Subject:')}}
	{{ Form::text('subject',null,array('class'=>' validate')) }}
	</div>
</div>
<div class="row">
			<div class="input-field col s10">
	
	{{ Form::label('message','Message:')}}
	{{ Form::textarea('message',null,array('class'=>'materialize-textarea validate','required'=>'')) }}
	</div>
</div>
<div class="row">
		<div class="input-field col s10">
			
	
	{{ Form::submit('Send Message',array('class'=>'btn light-green accent-4 waves-effect waves-light'))}}
</div>
</div>

{!! Form::close() !!}
</div>



@endsection

@section('footer-scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection