<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>           
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:700|Titillium+Web:700|Exo+2:400,900" rel="stylesheet">
        <script src="https://use.fontawesome.com/2b18a9f74f.js"></script>

        {!! Html::style('css/frontend/prism.css') !!}
        {!! Html::style('css/frontend/style.css') !!}
        {!! Html::style('css/frontend/materialize.css') !!}


  
  
  
        <title>Blog: @yield('title')</title>
        @yield('custom-styles')      
    </head>
    <body>  
    @include('partials._header') 
    @include('partials._messages')  
    @section('main')
    @show  

    {!! Html::script('js/frontend/prism.js') !!}
    {!! Html::script('js/frontend/javascript.js') !!}
    {!! Html::script('js/frontend/materialize.min.js') !!}
    @yield('footer-scripts')
    </body>
    @include('partials._footer') 
</html>
