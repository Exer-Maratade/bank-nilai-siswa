<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center ml-md-auto">
        <li class="nav-item d-xl-none">
          <!-- Sidenav toggler -->
          <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center ml-auto ml-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              @if (auth()->user()->level == 'admin')
                <span class="badge badge-pill badge-success mr-3">Admin</span>
              @else
                <span class="badge badge-pill badge-info mr-3">Pejabat Utama</span>
              @endif
              <span class="avatar avatar-sm rounded-circle">
                <img src="{{ url('frontend/images/profile.png') }}">
              </span>
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title d-md-none">
              <h6 class="text-overflow m-0">{{ auth()->user()->name }}</h6>
            </div>
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="ni ni-button-power"></i>
                <span>Keluar</span>
              </button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
