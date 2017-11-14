@extends('master')

@section('title', 'About')
  @section('page-header-tag')
<header class="header full-height" style="background: url('{{ route('image.show',['image8.jpg']) }}')">
@endsection


 

@section('page-header-title')
<h1>About</h1>
@endsection 
    
@section('page-header-meta')
<h4>
</h4>
@endsection 

@section('main')

<h1>About Page</h1>

@endsection