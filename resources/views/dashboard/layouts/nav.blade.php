<header class="main-header">
    <!-- Logo -->
    <a href="{{ adminUrl('/') }}" class="logo hidden-xs">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Proband </b>Consulting</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      {{-- include menu --}}
        @include('dashboard.layouts.menu')
      {{-- include menu --}}

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url('/assets/img/avatar.png') }}" alt="admin image" >
        </div>
        <div class="pull-left info">
          <p class="text-center">
              {{auth()->user()->name}}
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">الأقســـام</li>

        {{-- dashboard link --}}
        <li class="{{active_dashboard_item('admin')[0]}}">
          <a href="{{adminUrl('/')}}">
            <i class="fa fa-dashboard"></i> <span>الرئيسية</span>
          </a>
        </li>

        {{-- articles link --}}
        <li class="treeview {{active_menu('articles')[0]}}">
            <a href="#">
              <i class="fa fa-list"></i> <span>المقالات</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
            </a>

            <ul class="treeview-menu" style="{{active_menu('articles')[1]}}">
                <li class="{{ setActive([adminUrl('articles/create')]) }}"><a href="{{ adminUrl('articles/create') }}"><i class="fa fa-circle-o"></i> أضف مقال</a></li>
                <li class="{{ setActive([adminUrl('articles')]) }}"><a href="{{ adminUrl('articles') }}"><i class="fa fa-circle-o"></i>قائمة المقالات</a></li>
            </ul>
        </li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>