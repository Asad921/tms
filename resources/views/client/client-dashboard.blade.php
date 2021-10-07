<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Client Dashboard</title>

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
        <a href="{{ route('client.dashboard') }}" class="nav-link">Home</a>
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
    <a href="{{ route('client.dashboard') }}" class="brand-link">
      <img src="../../dist/img/sj.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Client Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="{{ route('client.dashboard') }}" class="d-block"> SJ || {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('client.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             </p>
            
            </a>
                      </li>
          
                      <li class="nav-item">
                        <a href="{{ route('client.project') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                            Projects
                            
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('client.task') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                            Tasks
                            
                          </p>
                        </a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a href="{{ route('client.invoice') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                            Invoice
                            
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('client.calendar') }}" class="nav-link">
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
                       <a href="{{ route('client.profile_edit',Auth::id())}}" class="nav-link">
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
        
      </div><!-- /.container-fluid -->
    </section>

    <div class="main-content">
      <section class="section">
      <div class="section-header">
  <h1>Dashboard</h1>
</div>
<div class="section-body">
  <div class="row">
      <div class="col-lg-6">
          <div class="card">
              <div class="card-body">
                  <div class="page-header">
                      <h5>Project Status</h5>
                  </div>
                  <div id="project-status-container" class="pt-2">
                    <div class="table-responsive">
                            
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                          <tr>
                              <th> ID </th>
                              <th> Project_Name </th>
                              <th>Project_member </th>
                              <th>Project_Client</th>
                              
                              <th>View</th>
                             
                          </tr>
                          </thead>
                          <tbody>
                            @if (Auth::user()->clientProject !='')
                                
                            
                          @foreach(Auth::user()->clientProject as $project)
                                  <tr>
                                      <td>{{$project->id}}</td>
                                      <td> {{$project->name}}</td>
                                      <td>
                                        @if ($project->userProjects != "")
                                        @foreach($project->userProjects as $user) 
                                        
                                         <p>
                                           {{ $user->name }}
                                         </p>
                                        @endforeach
                                        @endif
                                        </td>
                                      <td>{{ $project->clients->name }}</td>
                                     
                                      
                                      
                                        
                                   
                                      <td>
                                        <a class="btn btn-success" href="{{route('client.project_detail', $project->id)}}"> View</a>
                                      </td>
                                      
                                     
                                      


                                  </tr>
              

                                  @endforeach
                                  @endif
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
                            
                          </tr>
                          </thead>
                          <tbody>
                            @if (Auth::user()->userInvoice != '')
                                
                            @foreach(Auth::user()->userInvoice as $invoice)
                            <tr>
                              <td>{{$invoice->id}}</td>
                              <td> {{$invoice->invoice_no}}</td>
                              <td> {{ $invoice->cli->name}}</td>
                              <td>{{ $invoice->total_bill+ $invoice->tax }}$</td>
                              <td>{{ $invoice->status }}
                                        
                              </td>
                              
                              <td>SJ Solutions</td> 
                              
                              
                              
                              <td>
                                <a class="btn btn-success" href=" {{ route('client.detail_invoice',$invoice->id) }} "> View</a>
                                      </td>
                                      
                                      
                                      
                                      
                                      
                                    </tr>
                                    
                                    
                                    @endforeach
                                    @endif
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

</div>
  </div>
</div>


  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="">SJ TMS Client Dashboard</a>.</strong> All rights reserved.
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
