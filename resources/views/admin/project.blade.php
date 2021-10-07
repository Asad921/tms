<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Project </title>

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
        <a href="admin-dashboard" class="nav-link">Home</a>
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
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="../../dist/img/sj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="admin-dashboard" class="d-block">SJ || Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
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
                            <a href="{{ route('admin.project') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Add</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Edit</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('admin.projectdetails') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Detail</p>
                            </a>
                          </li>
                        </ul>
                        <li class="nav-item">
                            <a href="{{ route('admin.client') }}" class="nav-link">
                                <i class="nav-icon fas fa-fire"></i>
                                <p>
                                Clients
                             </p>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.task') }}" class="nav-link">
                                    <i class="nav-icon fas fa-thumbtack"></i>
                                    <p>
                                    Tasks
                                 </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.user') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                        Users
                                     </p>
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.role') }}" class="nav-link">
                                            <i class="nav-icon fas fa-user-tag"></i>
                                            <p>
                                            Roles
                                         </p>
                                        </a>
                                        </li>
                                       
                                   
                               
            
                                <li class="nav-header">More</li>
                                <li class="nav-item">
                                <a href="{{ route('admin.calendar') }}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                    Calendar
                                 </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.invoice_index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>
                                        Invoice
                                     </p>
                                    </a>
                                    </li>
                                    
           
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
        
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.project') }}">Project</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            
            
                <div class="modal fade" id="addmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.project_store') }}" method="POST" enctype="multipart/form-data">
        
        
                                <div class="modal-body">
        
                                    <div class="form-group">
                                    @csrf
                                        <label> Project Name :</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Project_name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label> Clients</label>
                                      <select name="clients_name" class="form-control" placeholder=" Select Roles" required>
                                          <option value="roles">Select Client</option>
                                          @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client ? $client->name : 'N/A' }}</option>
                                          @endforeach
                                        </select>
                                      
                                  </div>
                                  <div class="form-group">
                                    <label>Users</label>
                                    <select name="users_name[]" class="form-control" placeholder=" Select User"  required multiple>
                                        <option value="roles">Select Users</option>
                                        @foreach ($users as $user)
                                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                      </select>
                                    
                                </div>
                                    <div class="form-group">
                                        <label>Color Picker :</label>
                                        <input  type="color"  placeholder="Choose Color "  required>
                                        
                                    </div>

                                
        
                                </div>
                                <div class="modal-footer">      
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="" class="btn btn-primary">Save</button>
                                </div>
                            </form>
        
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-1 font-weight-bold text-primary" style="font-size: 25px; display: flex;
                        justify-content: space-between;">Project
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmenu" >
                        Add New Project
                            </button>
                        </h6>
                    </div>
    
        

               
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          @foreach ($projects as $project )
          {{-- @dd($project->users->name) --}}
{{-- {{ $project->users->name }} --}}
          @php
            // echo $userName = $project['users']->name;
            // echo $userName->name;
          @endphp
           
            <div class=" col-md-4">
              <div class="livewire-card card project-card shadow mb-5 rounded removeMarginX hover-card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="progress progress-bar-mini height-30 mt-3 project-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:100% ; background-color: #3F51B5">
                        </div>
                        <p class="project-progress-width text-dark mt-2 mr-4    ">79%</p>
                    </div>
                  </div>
              </div>  
              <div class="card-header d-flex justify-content-between align-items-center pt-0 pr-3 pb-3 pl-3">
                  <div class="d-flex">
                      <small class="text-dark">{{ $project->name }}</small>
                      <a href="{{ route('admin.project_details',$project->id) }}">
                        <h4 class="text-dark card-report-name">{{ $project->name }}</h4>
                      </a>
                  </div>
                  <a class="dropdown dropdown-list-toggle"></a><a href="#" data-toggle="dropdown" class="notification-toggle action-dropdown " style="margin-left: 185px;"><i class="fas fa-ellipsis-v"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-list-content dropdown-list-icons">
                              <a href="{{ route('admin.projectEdit',$project->id) }}" class="dropdown-item dropdown-item-desc edit-btn" data-id="186"><i class="fas fa-edit mr-2 card-edit-icon"></i> Edit
                              </a>
                              <a href="{{ route('admin.project_delete',$project->id) }}" class="dropdown-item dropdown-item-desc delete-btn" data-id="186"><i class="fas fa-trash mr-2 card-delete-icon"></i>Delete
                              </a>
                          </div>
                      </div>
                  
              </div>
              <div class="card-body pt-0 pl-3 pb-0">
                  <div>
                      <span class="badge badge-primary text-uppercase projectStatus">Ongoing</span>
                      <span class="float-right projectStatistics">
                                                  <b>{{ count($project->task->where('status', '0')) }}</b>
                              <span> Pending Tasks </span>
                                          </span>
                  </div>
                  
                  <div class="float-right">
                    <span class="mr-1">Client:</span>
                    <span>{{ $project->clients->name }}</span>
                  </div>
              </div>
              
              
              <div class="card-body d-flex justify-content-between align-items-center pt-5   ">
                <div class="d-inline-block">
                           @if ($project->userProjects != "")
                           @foreach($project->userProjects as $user) 
                           
                            <img class="projectUserAvatar p-0" src="https://ui-avatars.com/api/?name={{ $user->name }}&amp;size=30&amp;rounded=true&amp;color=fff&amp;background=fc6369" title="">
                           
                           @endforeach
                           @endif
                  {{-- <img class="projectUserAvatar p-0" src="https://ui-avatars.com/api/?name={{ $projects }}&amp;size=30&amp;rounded=true&amp;color=fff&amp;background=ffaa2e" title=""> --}}
                </div>
              </div>
            </div>
                </div>
          @endforeach
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
    <strong>Copyright &copy; 2021 <a href="">SJ TMS Admin Dashboard</a>.</strong> All rights reserved.
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
