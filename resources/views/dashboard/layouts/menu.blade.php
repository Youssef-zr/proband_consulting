<div class="navbar-custom-menu" style="float:right !important">
    <ul class="nav navbar-nav">

      <!-- change language -->
      <li class="user user-menu">
        <a href="{{ url('/') }}" data-toggle="tooltip" data-original-title='الموقع' data-placement="bottom">
          <i class="fa fa-globe"></i>
        </a>
      </li>
    
      {{-- logout user --}}
      <li class="dropdown user user-menu" data-toggle="tooltip" data-original-title='عضويتك' data-placement="bottom">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <img src="{{url('assets/img/avatar.png')}}" class="user-image" alt="User Image">
          <span class="hidden-xs">{{auth()->user()->name}}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{url('assets/img/avatar.png')}}" class="img-circle" alt="User Image">

            <p>
              {{auth()->user()->name}}
              
              <small style="margin-top:5px">تاريخ التسجيل <b>{{ created(auth()->user()->created_at) }}</b> </small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
              <a href="{{ adminUrl('logout') }}" class="btn btn-primary btn-flat"> <i class="fa fa-sign-out" style="margin-left: 5px"></i> تسجيل الخروج </a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>