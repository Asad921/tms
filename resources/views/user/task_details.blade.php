<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Task Details</title>

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
      <span class="brand-text font-weight-light">User Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="admin-dashboard" class="d-block">SJ ||  {{ Auth::user()->name }}</a>
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
                                <a href="{{ route('admin.calendar') }}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                    Calendar
                                 </p>
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/calendar" class="nav-link">
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
              <li class="breadcrumb-item"><a href="{{ route('user.task') }}">Task</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Name:</label>
                        <p>{{ $task->title }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Asign To</label>
                        <p>{{ $task->users->name }}</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                      <label for="name" class="font-weight-bold">Task_assigner</label>
                      <p>{{ $task->task_assignee->name }}</p>
                  </div>
              </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Priority:</label>
                        <p>
                          @if ($task->priority == 4)
                          {{ 'Highest' }}
                        @elseif ($task->priority == 3)
                          {{ 'High' }}
                        @elseif ($task->priority == 2)
                          {{ 'Meduim' }}
                        @elseif ($task->priority == 1)
                          {{ 'Low' }}
                        @endif
                      </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Tags</label>
                        <p>{{ $task->tags }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Due_date</label>
                        <p>{{ $task->due_date }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="open_tasks" class="font-weight-bold">Pending Tasks:</label>
                        <br>
                        <p>1</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Status:</label>
                        <p>Active</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Project_Name:</label>
                        <p>{{ $task->project->name }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="created_at" class="font-weight-bold">Created On:</label>
                        <br>
                        <span data-toggle="tooltip" data-placement="right"
                              title="">{{ $task->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="created_at" class="font-weight-bold">Last Updated:</label>
                        <br>
                        <span data-toggle="tooltip" data-placement="right"
                              title="">{{ $task->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="attachment" class="font-weight-bold">Profile:</label>
                        <br>

             <img id='showImage' class="img-thumbnail thumbnail-preview" src="https://ui-avatars.com/api/?name={{ $task->users->name }}&amp;size=64&amp;rounded=true&amp;color=fff&amp;background=fc6369">
                                            </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="created_at" class="font-weight-bold">Description:</label>
                        <br>
                        <span data-toggle="tooltip" data-placement="right"
                              title="">{{ $task->Description }}</span>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

    </section>
  </div>
</div>
</body>
</html>