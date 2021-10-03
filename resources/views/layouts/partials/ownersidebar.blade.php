  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('template/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{  request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="examples/icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{  request()->routeIs('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  request()->routeIs('obat.*') ? 'active' : '' }}" href="{{ route('obat.index')}}">
                <i class="ni ni-atom text-success"></i>
                <span class="nav-link-text">Obat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  request()->routeIs('inventory.*') ? 'active' : '' }}" href="#">
                <i class="ni ni-books text-info"></i>
                <span class="nav-link-text">Inventory</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  request()->routeIs('transaksi.*') ? 'active' : '' }}" href="#">
                <i class="ni ni-chart-bar-32 text-default"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> --}}
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>