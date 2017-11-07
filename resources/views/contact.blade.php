@extends('master')

@section('title', 'Contact')

@section('custom-styles')

{!! Html::style('css/parsley.css') !!}
@endsection
@section('main')

<h1>Contact page</h1>
<div class="container">

{!! Form::open(array('route'=>'contact.post','data-parsley-validate'=>'')) !!}


	{{ Form::label('email','Email:')}}
	{{ Form::text('email',null,array('class'=>'form-control','required'=>'','data-parsley-type'=>'email')) }}
	</br>
	{{ Form::label('subject','Subject:')}}
	{{ Form::text('subject',null,array('class'=>'form-control')) }}
	</br>
	{{ Form::label('message','Message:')}}
	{{ Form::textarea('message',null,array('class'=>'form-control','required'=>'')) }}
	</br>
	{{ Form::submit('Send Message')}}

{!! Form::close() !!}
</div>



@endsection

@section('footer-scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection