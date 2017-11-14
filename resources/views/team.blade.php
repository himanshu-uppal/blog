@extends('master')

@section('title', 'Team')

  @section('page-header-tag')
<header class="header full-height" style="background: url('{{ route('image.show',['image8.jpg']) }}')">
@endsection

   

@section('page-header-title')
<h1>Our Team</h1>
@endsection 
    
@section('page-header-meta')
<h4>
</h4>
@endsection 

@section('main')

<h1>Team</h1>

@endsection