<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize d-inline">
        <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
          <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
          <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
        </button>
      </div>
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="javascript:void(0)">MI PROYECTO</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="search-bar input-group">
          <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
            <span class="d-lg-none d-md-block">Search</span>
          </button>
        </li>
        <li class="dropdown nav-item">
          <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="notification d-none d-lg-block d-xl-block"></div>
            <i class="tim-icons icon-sound-wave"></i>
            <p class="d-lg-none">
              Notifications
            </p>
          </a>
          <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src="{{ asset('imagenes/user.png') }}" alt="Profile Photo">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              Log out
            </p>
          </a>
          <small>{{ Auth::user()->name }}</small>
          <ul class="dropdown-menu dropdown-navbar">
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
            </li>
            <li class="nav-link">
              <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-link">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  Cerrar Sesión
              </a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </li>
        <li class="separator d-lg-none"></li>
      </ul>
    </div>
  </div>
</nav>

<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Escriba...">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
        </div>
      </div>
    </div>
  </div>




<?php
/*
  if(session()->has('mensaje'))
  {
    $mensaje = session()->get('mensaje');
    echo "-->> ".$mensaje;
  }
  */
?>

@if(session()->has('mensaje'))
  <div data-notify="container" id="divMensaje" class="col-11 col-md-4 alert alert-primary alert-with-icon" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; top: 20px; right: 20px;">
    
    <button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1062;">
      <i class="tim-icons icon-simple-remove"></i>
    </button>

    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
    
    <span data-notify="title"></span>

    <span data-notify="message">{{ session()->get('mensaje') }}</span>
    
    <a href="#" target="_blank" data-notify="url"></a>
  </div>
@endif