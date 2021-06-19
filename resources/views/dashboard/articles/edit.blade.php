@extends('dashboard.layouts.master')

@section('braidcrump')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    لوحة تحكم المدير
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{adminurl('/')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="{{adminUrl('articles')}}"> <i class="fa fa-th-list"></i> المقالات</a></li>
        <li class="active">{{ $title }}</li>
    </ol>
    </section>
@endsection

@section('content')

<div class="box">
    <div class="box-header">
        <h3>{{$title}}</h3>
    </div>
    <div class="box-body">
        <form action="" ></form>

        {!! Form::model($article,['route'=>['articles.update',$article->id],'method'=>'PUT','files'=>true]) !!}
            @include('dashboard.articles.form')
        {!! Form::close() !!}
    </div>
</div>

@endsection