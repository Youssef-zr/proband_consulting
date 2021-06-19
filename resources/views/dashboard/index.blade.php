@extends('dashboard.layouts.master')
@section('braidcrump')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    لوحة تحكم المدير
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{adminurl('/')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
    </ol>
    </section>
@endsection

@section('content')
    {{-- section stats --}}
    <div class="box">
        <div class="box-header">
            <h3>{{$title}}</h3>
        </div>
        <div class="box-content">
            <div class="stats">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3>{{ $count_articles }}</h3>
              
                            <p>عدد المواضيع بالموقع</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-th-list"></i>
                          </div>
                          <a href="{{ adminUrl('articles') }}" class="small-box-footer">قائمة المواضيع <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>

        .stats{
            padding:15px
        }

        .small-box > .small-box-footer {
            text-align: right;
            padding: 5px 10px;
        }
    </style>
@endpush