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
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4300142452651464",
    enable_page_level_ads: true
  });
</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
      @yield('share-meta')      
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="icon" href="{{ route('image.show', 'favicon.png') }}" type="image/x-icon"/>

         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:700|Titillium+Web:700|Exo+2:400,900" rel="stylesheet">
        <script src="https://use.fontawesome.com/2b18a9f74f.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Allura|Bilbo|Dawning+of+a+New+Day|Dynalight|Engagement|Euphoria+Script|Fredericka+the+Great|Gaegu|Italianno|Just+Me+Again+Down+Here|Kanit|League+Script|Lovers+Quarrel|Monsieur+La+Doulaise|Mr+De+Haviland|Mrs+Saint+Delafield|Nosifer|Oregano|Pacifico|Parisienne|Qwigley|Rancho|Rouge+Script|Ruthie|Sacramento|Sail|Satisfy|Vibur|Yesteryear" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Harmattan" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mouse+Memoirs" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gurajada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tamma|Flamenco|Germania+One|Mallanna" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Skranji" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
        {!! Html::style('css/frontend/prism.css') !!}        
        {!! Html::style('css/frontend/materialize.css') !!}
        {!! Html::style('css/frontend/style.css') !!}

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
    {!! Html::script('js/frontend/masonry.pkgd.min.js') !!}
    @yield('footer-scripts')
    </body>
     @include('partials._footer') 
</html>
