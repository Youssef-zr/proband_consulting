<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Proband Consulting</title>
    <!-- Stylesheets -->
    {!! Html::style('website/css/bootstrap.css')!!}
    {!! Html::style('website/plugins/revolution/css/settings.css')!!}
    
    <!-- REVOLUTION SETTINGS STYLES -->
    {!! Html::style('website/plugins/revolution/css/layers.css')!!}
    
    <!-- REVOLUTION LAYERS STYLES -->
    {!! Html::style('website/plugins/revolution/css/navigation.css')!!}
    
    <!-- REVOLUTION NAVIGATION STYLES -->
    {!! Html::style('website/css/style.css')!!}
    {!! Html::style('website/css/responsive.css')!!}

    <!--Color Switcher Mockup-->
    {!! Html::style('website/css/color-switcher-design.css')!!}
    <!--Color Themes-->
    <link id="theme-color-file" href="{{url('website/css/color-themes/default-theme.css')}}"  rel="stylesheet"/>
    <!-- owl carousel -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')!!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css')!!}
    
    <link rel="shortcut icon" href="website/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="website/images/favicon.png" type="image/x-icon" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
      
      {{-- app css --}}
      {!! Html::style('css/app.css')!!}
  </head>

  <body>
    <div class="page-wrapper">
        <div id="app">
          <spinner></spinner>
            <nav-bar></nav-bar>