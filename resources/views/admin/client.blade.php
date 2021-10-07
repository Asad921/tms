<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Clients </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
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
      <img src="../../dist/img/sj.jpg" alt=" SJ Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SJ Admin Dashboard</span>
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
              <li class="breadcrumb-item"><a href="{{ route('admin.client') }}">client</a></li>
              
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
                                <h5 class="modal-title" id="exampleModalLabel">New Client</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        
        
                                <div class="modal-body">
        
                                    <div class="form-group">
                                    @csrf
                                        <label> Client_Name </label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Client_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" class="form-control"  >
                                          <option >Select Department</option>
                                          <option value="Developer">Developer</option>
                                          <option value="IOS Developer">IOS Devolper</option>
                                          <option value="Admin">Admin</option>
                                          <option value="SQA">SQA</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control" placeholder="Enter Website" optional>
                                      

                                        
                                    </div>
                                    <div class="form-group">
                                      <label>U_type</label>
                                      <select name="utype" class="form-control">
                                        <option >Select Type</option>
                                          <option value="CLI">CLI</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Client_Profile</label>
                                        <input type="file"  name="image"  class="form-control" placeholder="Enter Image">
                                        
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
                        justify-content: space-between;">Client
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmenu" >
                               New Client +
                            </button>
                        </h6>
                    </div>
    
        

               
          </div>
          
        </div>

        <!-- Next -->

      <div class="container">
        <div class="row">
          @foreach ($users as $user )
            <div class="col-md-3" id="datatable">
              <div class="livewire-card card author-box shadow mb-5 rounded client-card-view hover-card"
                style="border-top: 3px solid #52d7f2">
              
                <div class="card-header client-card d-flex align-items-center user-card-index d-sm-flex-wrap-0">
                  <div class="author-box-left pl-0 mb-auto uAvatarCon">
                      <img alt="image" width="50" src="{{asset('upload/resources/views/'.$user->image)}}"
                            class="rounded-circle">
                  </div>
                  <div class="ml-2 w-100 mb-auto">
                    <div class="justify-content-between d-flex flex-column">
                      <div class="user-card-name pb-1">
                        <h4><a href="{{ route('admin.client_details',$user->id) }}" class="show-btn" data-id="2">{{$user->name}}</a></h4>
                      </div>
              
                      <div class="client-card-department " style="margin-right:50px;">
                        <a href=""
                        class="text-decoration-none">{{$user->email}}</a>
                      </div>
                      <div class="card-client-website" style=" margin-right:70px;">
                        <a href="  "
                          class="text-decoration-none">{{$user->website}} </a>
                      </div>
                    </div>
                    <a class="dropdown dropdown-list-toggle" style="margin-left: 145px;">
                      <a href="#" data-toggle="dropdown"
                          class="notification-toggle action-dropdown  position-xs-bottom">
                          <i class="fas fa-ellipsis-v action-toggle-mr"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-list-content dropdown-list-icons">
                              <a href="{{ route('admin.client_edit',$user->id ) }}" class="dropdown-item dropdown-item-desc edit-btn" >
                                  <i class="fas fa-edit mr-2 card-edit-icon"></i> Edit
                              </a>
                              <a href="{{ route('admin.client_delete' , $user->id ) }}" class="dropdown-item dropdown-item-desc delete-btn"
                                  data-id="5">
                                  <i class="fas fa-trash mr-2 card-delete-icon"></i>Delete
                              </a>
                          </div>
                      </div>
                    </a>
                    {{-- <div class="modal fade" id="edit_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Client Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form action="/update_client/{{$client->id}}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                                  <div class="modal-body">
          
                                      <div class="form-group">
                                      @csrf
                                          <label> Client_Name </label>
                                          <input type="text" name="name" id="name" value="{{$client->name}}"class="form-control" placeholder="Enter Client_name" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Department</label>
                                          <select name="department" id="department" class="form-control"  required>
                                            <option>Select Department</option>
                                            <option value="Developer" {{$client->department == "Developer" ? 'selected' : ""}}>Developer</option>
                                            <option value="IOS Developer" {{$client->department == "IOS Developer" ? 'selected' : "" }}>IOS Devolper</option>
                                            <option value="Admin" {{$client->department == "Admin" ? 'selected' : "" }}>Admin</option>
                                            <option value="SQA" {{$client->department == "SQA" ? 'selected' : "" }}>SQA</option>
  
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" name="email" id="email" value="{{$client->email}}" class="form-control" placeholder="Enter Email" required>
          
                                          
                                      </div>
                                      <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" name="password" id="password" value="{{$client->password}}" class="form-control" placeholder="Enter Password" required>
          
                                          
                                      </div>
                                      <div class="form-group">
                                          <label>Website</label>
                                          <input type="text" name="website" id="website" value="{{$client->website}}" class="form-control" placeholder="Enter Website" required>
          
                                          
                                      </div>
                                      <div class="form-group">
                                          <label>Client_Profile</label>
                                          <input type="file"  name="image" id="image" value="{{$client->image}}"  class="form-control" placeholder="Enter Image">
                                          <img src="{{asset('upload/resources/views/'.$client->image)}}" width="70px" height="70px" padding-top="20px" alt="img">
                                      </div>
                                      
          
                                  
          
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" name="" class="btn btn-primary">Update</button>
                                  </div>
                              </form>
          
                          </div>
                      </div>
                  </div>
                 --}}
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

<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){

    var table = $('#datatable').DataTable();

    table.on('click','.edit-btn', function(){

      $tr =   $(this).closest('tr');
      if($($tr)->hasclass('child')){
        $tr =$tr.prev('parent');
      }

      var data = table.row($tr).data();
      console.log(data);
      $(#name).val(data[1]);
      $(#department).val(data[2]);
      $(#email).val(data[3]);
      $(#password).val(data[4]);
      $(#website).val(data[5]);
      $(#image).val(data[6]);

      $('#editForm').attr('action','/client/'+data[0]);
      
      $('#edit_client').modal('show');


    });
  });


</script>
</body>
</html>
