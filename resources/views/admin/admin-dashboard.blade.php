<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SJ Admin Dashboard</title>

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
      <img src="../../dist/img/sj.jpg" alt="Sj AdminLogo" class="brand-image img-circle elevation-4" style="opacity: .8">
      <span class="brand-text font-weight-light"> SJ Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="admin-dashboard" class="d-block">Admin</a>
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
                                     <a href="{{ route('admin.profile_edit',Auth::id()) }}" class="nav-link">
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
            <h1> Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
                                        <select name="users" class="form-control" placeholder=" Select User" required>
                                          <option value="roles">Select Users</option>
                                          @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                                                          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6">
                                      <div id="time_range" class="time_range time_range_width w-100">
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
                                          <th>Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($tasks->where('status','0') as $task)
                                              <tr>
                                                  <td>{{$task->id}}</td>
                                                  <td> {{$task->title}}</td>
                                                  <td>{{$task->users->name}}</td>
                                                  <td>{{ $task->project ? $task->project->name : 'N/A'}}</td>
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
                                                    <a class="btn btn-success" href="{{route('admin.task_details', $task->id)}}"> View</a>
                                                  </td>
                                                  
                                                  <td>
                                                    <a class="btn btn-danger" href="{{ route('admin.task_delete',$task->id) }}"> Delete</a>
                                                  </td>
                                                  
          
          
                                              </tr>
                          
          
                                              @endforeach
                                      </tbody>
                                  </table>
                                  {{-- <span >
                                    {{ $tasks->links()}}
                                </span>
                                <style>
                                  .w-5{
                                    display:none
                                  }
                                </style> --}}
          
                            
                          </div>
                      </div>
                  </div>
              </div>
          </div>
                          <!-- Projects Status Chart -->
              <div class="row">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="page-header">
                                  <h5>Project Status</h5>
                              </div>
                              <div id="users-project-status-container" class="pt-2">
                                <div class="table-responsive">
                            
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                      <tr>
                                          <th> ID </th>
                                          <th> Project_Name </th>
                                          <th>Project_member </th>
                                          <th>Project_Client</th>
                                          <th>Pending_task</th>
                                          <th>Completed_task</th>
                                          <th>View</th>
                                          <th>Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($projects as $project)
                                              <tr>
                                                  <td>{{$project->id}}</td>
                                                  <td> {{$project->name}}</td>
                                                  <td> @if ($project->userProjects != "")
                                                    @foreach($project->userProjects as $user) 
                                                    
                                                     <p>
                                                       {{ $user->name }}
                                                     </p>
                                                    @endforeach
                                                    @endif
                                                  </td>
                                                  <td>{{ $project->clients->name }}</td>
                                                  <td>{{ count($project->task->where('status', '0')) }}</td>
                                                  
                                                  
                                                    
                                                  <td> 
                                                    @if ($project->task != "")
                                                    @foreach($project->task->where('status','1') as $info)
                                                     
                                                      <p >
                                                          {{ $info->title }}
                                                      </p>
                                                      
                                                          
                                                     @endforeach
                                                                
                                                      @endif

                                                        </td>
                                                  <td>
                                                    <a class="btn btn-success" href="{{route('admin.project_delete', $project->id)}}"> View</a>
                                                  </td>
                                                  
                                                  <td>
                                                    <a class="btn btn-danger" href="{{ route('admin.project_details',$project->id) }}"> Delete</a>
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
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="page-header">
                                  <h5>Invoice Status</h5>
                              </div>
                              <div id="client-invoices-container" class="pt-2">
                                <div class="table-responsive">
                            
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                      <tr>
                                          <th> ID </th>
                                          <th> Invoice_No </th>
                                          <th>ClientName </th>
                                          <th>Amount_payable</th>
                                          <th>Status</th>
                                          <th>Recieved_By</th>

                                          <th>View</th>
                                          <th>Delete</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($invoices as $invoice)
                                              <tr>
                                                  <td>{{$invoice->id}}</td>
                                                  <td> {{$invoice->invoice_no}}</td>
                                                  <td> {{ $invoice->cli->name}}</td>
                                                  <td>{{ $invoice->total_bill }}</td>
                                                  <td>{{ $invoice->status }}
                                                    
                                                    </td>
                                                  
                                                  <td>Asad</td> 
                                                  
                                                    
                                                
                                                  <td>
                                                    <a class="btn btn-success" href="{{ url('detail_invoices',$invoice->id) }}"> View</a>
                                                  </td>
                                                  
                                                  <td>
                                                    <a class="btn btn-danger" href="{{ route('admin.invoices_delete',$invoice->id) }}"> Delete</a>
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
                              </div>
</section>
      <img class="img-stopwatch" id="imgTimer" alt="">
<div class="chat-popup card-body display-none" id="timeTracker">
<form method="POST" action="https://infyprojects.infyom.com/dashboard" accept-charset="UTF-8" id="timeTrackerForm" class="time-tracker-form"><input name="_token" type="hidden" value="GGqn24fZauzLiSd9zAqHrmQT22EDtxLnGUJj1h17">
<div class="modal-body time-tracker-modal">
  <div class="alert alert-danger display-none" id="timeTrackerValidationErrorsBox"></div>
  <div class="row">
      <div class="form-group col-sm-4">
          <label for="project_id">Project</label><span class="required">*</span>
          <select name="projects" class="form-control" placeholder=" Select projects" required>
            <option value="roles">Select Projects</option>
            @foreach ($projects as $project)
              <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
          </select>
        </div>
      <div class="form-group col-sm-4">
          <label for="task_id">Task</label><span class="required">*</span>
          <select name="tasks" class="form-control" placeholder=" Select Tasks" required>
            <option value="roles">Select Task</option>
            @foreach ($tasks->where('status','0') as $task)
              <option value="{{ $task->id }}">{{ $task->title }}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group col-sm-4">
          <label for="activity_type_id">Activity Type</label>
          <select id="" class="form-control">
            <option selected="selected" value="">Select Activity</option>
            <option  value="1">1</option>
            <option  value="2">2</option>
          </select>
      </div>
  </div>
  <div class="row">
      <div class="form-group col-sm-9">
          <label for="notes">Notes</label> <span id="tmNotesErr"></span>
          <textarea class="form-control" id="tmNotes" rows="5" name="note" cols="50"></textarea>
      </div>
      <div class="form-group col-sm-3">
          <div class="mt-5">
              <h3 id="timer"><b>00:00:00</b></h3>
              <div class="timer-button">
                  <button class="btn btn-success time-tracker-form__btn" id="startTimer">
                      <i id="startTimeTracker" class="far fa-play-circle"></i> Start
                  </button>
                  <button class="btn btn-danger time-tracker-form__btn display-none" id="stopTimer">
                      <i id="stopTimeTracker" class="far fa-stop-circle"></i> Stop
                  </button>
              </div>
          </div>
      </div>
  </div>
</div>
</form>
</div>
      <div id="timeEntryAdjustModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">New Time Entry</h5>
          <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
      </div>
      <form method="POST" action="https://infyprojects.infyom.com/dashboard" accept-charset="UTF-8" id="timeEntryAdjustForm"><input name="_token" type="hidden" value="GGqn24fZauzLiSd9zAqHrmQT22EDtxLnGUJj1h17">
      <div class="modal-body">
          <div class="alert alert-warning display-none" id="tmAdjustValidationErrorsBox"></div>
          <div class="form-group row">
              <div class="form-group col-sm-12">
                  <label for="start_time">Start Time</label><span class="required">*</span>
                  <div id="dvAdjustStartTime">
                      <input class="form-control" id="adjustStartTime" autocomplete="off" required name="start_time" type="text">
                  </div>
              </div>
              <div class="form-group col-sm-12">
                  <label for="end_time">End Time</label><span class="required">*</span>
                  <div id="dvAdjustEndTime">
                      <input class="form-control" id="adjustEndTime" autocomplete="off" required name="end_time" type="text">
                  </div>
              </div>
              <div class="form-group col-sm-12">
                  <label for="duration">Duration (minutes)</label>
                  <div id="dvAdjustDuration">
                      <input class="form-control" id="adjustDuration" readonly name="duration" type="number">
                  </div>
              </div>
          </div>
          <div class="text-right">
              <button type="button" class="btn btn-primary" id="adjustBtnSave" data-loading-text="&lt;span class=&#039;spinner-border spinner-border-sm&#039;&gt;&lt;/span&gt; Processing...">Save</button>
              <button type="button" id="adjustBtnCancel" class="btn btn-light ml-1" data-dismiss="modal">Cancel</button>
          </div>
      </div>
      </form>
  </div>
</div>
</div>
  </div>
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
