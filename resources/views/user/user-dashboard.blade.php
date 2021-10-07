<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('user.dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right"  aria-labelledby="navbarDropdown">

      <div class="border-t border-gray-100"></div>

      <!-- LogOut -->
      <form method="POST" action="{{ route('logout') }}">
          @csrf
         
          <a class="nav-item dropdown" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                          this.closest('form').submit();">
              {{ __('Log Out') }}
          </a>
      </form>
  </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('user.dashboard') }}" class="brand-link">
      <img src="../../dist/img/sj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SJ User Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="{{ route('user.dashboard') }}" class="d-block">SJ ||  {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             </p>
            
            </a>
                      </li>
          
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          
                             <li class="nav-item">
                            <a href="{{ route('user.project') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Add</p>
                            </a>
                          </li>
                          
                        </ul>
                        <li class="nav-item">
                            <a href="{{ route('user.clients') }}" class="nav-link">
                                <i class="nav-icon fas fa-fire"></i>
                                <p>
                                Clients
                             </p>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.task') }}" class="nav-link">
                                    <i class="nav-icon fas fa-thumbtack"></i>
                                    <p>
                                    Tasks
                                 </p>
                                </a>
                                </li>
                                
                                    <li class="nav-item">
                                        <a href="{{ route('user.role') }}" class="nav-link">
                                            <i class="nav-icon fas fa-user-tag"></i>
                                            <p>
                                            Roles
                                         </p>
                                        </a>
                                        </li>
                                       
                                   
                               
            
                                <li class="nav-header">More</li>
                                <li class="nav-item">
                                <a href="{{ route('user.calendar') }}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                    Calendar
                                 </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                    <p>
                                      Profile
                                      <i class="fas fa-angle-left right"></i>
                                    </p>
                                  </a>
                                <ul class="nav nav-treeview">
                      
                                  <li class="nav-item">
                                 <a href="{{ route('user.up_edit',Auth::id()) }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Update Profile</p>
                                 </a>
                               </li>
                               
                             </ul>
                                    
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="section-body">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-lg-4 col-md-4">
                              <h5>User Report <span
                                class="text-muted font-size-15px hours"></span></h5>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12">
                              <div class="row justify-content-end">
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 colUsers">
                                          
                                      </div>
                                            <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6">
                                      <div  class="time_range_width w-50">
                                          <i class="far fa-calendar-alt"
                                             aria-hidden="true"></i>&nbsp;&nbsp;<span></span> <b
                                                  class="caret"></b>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="work-report-container" class="pt-2">
                          <canvas id="daily-work-report"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
                      
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="page-header">
                              <h5>Open Tasks</h5>
                          </div>
                          <div id="users-open-tasks-container" class="pt-2">
                            <div class="table-responsive">
                            
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                  <tr>
                                      <th> ID </th>
                                      <th> Task_name </th>
                                      <th>Task_Assigne </th>
                                      <th>Project</th>
                                      <th>Priority</th>
                                      <th>Status</th>
                                      <th>View</th>
                                      
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach(Auth::user()->task as $task)
                                  
                                  
                                          <tr>
                                              <td>{{$task->id}}</td>
                                              <td> {{$task->title}}</td>
                                              <td>{{$task->users->name}}</td>
                                              <td>{{$task->project ? $task->project->name : 'N/A'}}</td>
                                              <td> 
                                                @if ($task->priority == 4)
                                                {{ 'Highest' }}
                                              @elseif ($task->priority == 3)
                                                {{ 'High' }}
                                              @elseif ($task->priority == 2)
                                                {{ 'Meduim' }}
                                              @elseif ($task->priority == 1)
                                                {{ 'Low' }}
                                              @endif
                                            </td>
                                              <td>
                                                <?php
                              if ($task->status == '0') { ?>
                    
                                <span  class="badge badge-danger text-uppercase mr-3">InComplete</span> 
                    
                                  <?php }else { ?>
                                  <span  class="badge badge-success text-uppercase mr-3">COMPleted</span> 
                    
                                          <?php } ?>
                                              </td>
                                              <td>
                                                <a class="btn btn-success" href="{{route('user.task_details', $task->id)}}"> View</a>
                                              </td>
                                              
                                              
                                              
      
      
                                          </tr>
                      
      
                                          @endforeach
                                  </tbody>
                              </table>

                      </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-header flex-wrap">
                            <h5>Daily Work Report</h5>
                            <div id="rightData">
                                <div id="developers-report-date-picker" class="time_range">
                                    <i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;&nbsp;
                                    <span></span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>
                        <div id="developers-daily-work-report-container" class="pt-2">
                            <canvas id="developers-daily-work-report"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                              </div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="">SJ TMS User Dashboard</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
