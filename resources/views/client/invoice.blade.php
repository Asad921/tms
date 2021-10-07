<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Invoices </title>

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
                        <a href="{{ route('client.invoice') }}" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
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
              <li class="breadcrumb-item"><a href="{{ route('client.invoice') }}">Invoice</a></li>
              
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
                                <h5 class="modal-title" id="exampleModalLabel">Create Invoice</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-1 font-weight-bold text-warning" style="font-size: 25px; display: flex;
                        justify-content: space-between;">Invoice
                            
                        </h6>
                    </div>
    
        

               
          </div>
          
        </div>

        <!-- Next -->

      <div class="container">
        <div class="row">
        @if(Auth::user()->userInvoice !='')
          @foreach (Auth::user()->userInvoice as $invoices )
            <div class="col-12 col-md-6 col-lg-4 extra-large">
                <div class="livewire-card card card- shadow mb-5 rounded invoice-card-height removeMarginX hover-card" style="border-top: 3px solid #FFC300">
                    <div class="card-header d-flex justify-content-between align-items-center itemCon p-3">
                        <div class="d-flex">
                             
                            <div class="d-flex" >
                                <h4 class="text-warning invoice-clients invoice_title" >
                                    <a class="text-warning" href="{{ route('client.pdf_download',$invoices->id) }}">{{ $invoices->name }}</a>
                                </h4>
                                <br>&nbsp;
                                <p href="" class=" ">
                                    (<small class="text-warning"  >{{ $invoices->invoice_no }}</small>)
                            
                                    
                                </p>
                                
                            </div>
                        </div>
                        
                        <a class="dropdown dropdown-list-toggle"></a><a href="#" data-toggle="dropdown" class="notification-toggle action-dropdown itemDrp mr-1 " style="color:#FFC300; "><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-l  ist-content dropdown-list-icons">
                                    <a href="{{ route('client.detail_invoice',$invoices->id) }}" class="dropdown-item dropdown-item-desc edit-btn"><i class="fas fa-edit mr-2 card-edit-icon"></i>View
                                    </a>
                                </div>
                            </div>
                        
                    
                        
                    </div>
                    
                    <div class="card-body d-flex justify-content-between pt-1 px-3">
                        <div class="d-table w-100">
                            <span class="d-table-row w-100 invoice-project-tooltip-hover">
                                <span class="d-table-cell w-100 invoice-projects ">
                                    <div class="invoice-project-tooltip">
                                     {{ $invoices->projects ? $invoices->projects->name : 'N/A' }}
                                 </div>
                            
                                </span>
                            </span>
                            <span class="d-table-row w-100">
                                <b class="d-table-cell w-50"><span class="font-weight-bold currency-icon-font">
                                             $
                                        </span> {{ $invoices->total_bill }}
                                </b>
                                <span class="badge-success badge text-uppercase">{{ $invoices->status }}</span>
                            </span>
                                                </div>
                    </div>
                </div>
            </div>
          @endforeach
          @endif
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
