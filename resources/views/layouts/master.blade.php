<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: auto;"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ZAOGA :: Pastors Database</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/css/app.css">
      </head>
      <body class="sidebar-mini sidebar-open" style="height: auto;">
      <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>

          </ul>

          <!-- SEARCH FORM -->
          <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>



           <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="btn btn-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>


                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 583px;">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="./images/icon.png" alt="ZAOGA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Pastors DB</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="./images/user.png" class="img-circle elevation-2" alt="User Image">

              </div>
              <div class="info">
                <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>
                      Starter Pages
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="#" class="nav-link active">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Active Page</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Inactive Page</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-th"></i>
                    <p>
                      Simple Link
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 583px;">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>

                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                      </p>

                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>

                  <div class="card card-primary card-outline">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>

                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                      </p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">Special title treatment</h6>

                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">Special title treatment</h6>

                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



      <div id="sidebar-overlay"></div></div>
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
   <script src="/js/app.js"></script>


      </body></html>
