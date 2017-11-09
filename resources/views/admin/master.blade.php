<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
       
          <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
      <!--Import CKEDITOR-->
      <script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>



        <title>Blog: @yield('title')</title>
        @yield('custom-styles')   
        {!! Html::style('css/style.css') !!} 
        {!! Html::style('css/materialize.min.css') !!}  
        {!! Html::style('css/parsley.css') !!} 
           
    </head>
    <body>  
    @include('admin.admin-header')  
   <!--  @include('partials._header') --> 
    @include('partials._messages')  
    @section('main')
    @show  
    @yield('footer-scripts')
    {!! Html::script('js/materialize.min.js') !!}
    {!! Html::script('js/javascript.js') !!}
    </body>    
   <!--  @include('partials._footer')  -->
</html>
