<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121702521-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-121702521-1');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>

       
          <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Allura|Bilbo|Dawning+of+a+New+Day|Dynalight|Engagement|Euphoria+Script|Fredericka+the+Great|Gaegu|Italianno|Just+Me+Again+Down+Here|Kanit|League+Script|Lovers+Quarrel|Monsieur+La+Doulaise|Mr+De+Haviland|Mrs+Saint+Delafield|Nosifer|Oregano|Pacifico|Parisienne|Qwigley|Rancho|Rouge+Script|Ruthie|Sacramento|Sail|Satisfy|Vibur|Yesteryear" rel="stylesheet">
        
      <!--Import CKEDITOR-->
      <script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>



        <title>Blog: @yield('title')</title>
        @yield('custom-styles')   
        {!! Html::style('css/admin-style.css') !!} 
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
