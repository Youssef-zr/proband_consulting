<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Proband Consulting |
    @if (isset($title))
        {{$title}}
    @endif
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  <!-- Theme style Rtl -->
  {!! Html::style('adminlte/RTL/AdminLTE.min.css') !!}
  {!! Html::style('adminlte/RTL/bootstrap-rtl.min.css') !!}
  {!! Html::style('adminlte/RTL/profile.css') !!}
  {!! Html::style('adminlte/RTL/rtl.css') !!}
  {!! Html::style('adminlte/RTL/fonts/fonts-fa.css') !!}

  {{-- AdminLTE Skins. Choose a skin from the css/skins --}}
    {!! Html::style('adminlte/dist/css/skins/_all-skins.min.css') !!}
  {{-- folder instead of downloading all of theme to reduce the load --}}

  {{-- noty plugin --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css"/>

  {{--  noty plugin script  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script> 

  {{-- select 2 styleSheet --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  {{-- icon fav --}}
  <link rel="shortcut icon" href="website/images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="website/images/favicon.png" type="image/x-icon" />

  <style>
      .select2-container .select2-selection--single .select2-selection__rendered
      {
          padding-left: 0 !important
      }
      .select2-results {
        text-align: right;
      }
      .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
        margin-left: 8px;
        color: #ec1f1f;
        font-size:19px
      }
      
      .select2{
        display:block;
        width: auto !important;
      }

  </style>

@stack('css')

</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">