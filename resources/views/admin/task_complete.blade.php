<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Task Complete</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<style>
    .empty {
    border-top: 1px solid #ced4da;
    margin-top: 1rem;
  }
</style>
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
      <span class="brand-text font-weight-light">SJ Admin Dashboard</span>
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
                            <a href="route('admin.projectEdit')" class="nav-link">
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
              <li class="breadcrumb-item"><a href="{{ route('admin.task') }}">Task</a></li>
              
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
            
          </div>
        </div>
      </div>      
             <!-- Next-->
      
      <table-section class="m-2">
        @if(!empty($projects))
@foreach ($projects as $project)
@if ($project->task->where('status', 1)->count() > 0)    
<div class="bg-secondary text-center py-2" style="border-radius: 5px">
<b class=""> Project Name: </b>&nbsp;&nbsp;
<span class="badge badge-success text-uppercase">{{ $project->name ?? '' }}</span>
</div>
<table class="table table-striped table-hover" style="border-radius: 5px; box-shadow: 0.3px 0.3px 12px rgba(34, 32, 32, 0.726);">
<thead>
</thead>
    <tbody>
      @foreach ($project->task->where('status', 1)->sortByDesc('priority') as $task)
      <tr class="w-100">
        
        <td class="align-middle" style="width: 5%"><b>{{ $loop->iteration }}.</b></td>
        <td class="align-middle" style="width: 55%">
          <div class="avatar d-flex">
            <div>
                <img alt="image" width="40" src="https://ui-avatars.com/api/?name={{ $task->title }}&amp;size=30&amp;rounded=true&amp;color=fff&amp;background=fc6369">
              </div>
              <div class="detail ml-2 ">
                <a href="{{ route('admin.task_details',$task->id) }}" class="text-dark font-weight-bold ">{{ $task->title ?? '' }}</a>     
                <div>
                  <span> {{ $task->users->name }}<span data-toggle="tooltip" title="Email is verified"><i
                    class="fas fa-check-circle email-verified"></i>||</span>
                  <span>{{ $task->tags }}</span>
                </div>
              </div>
            </div>
          </td>
          <td class="align-middle" style="width: 10%">
            <div class="options d-flex justify-content-around align-items-center">
                          
                            <?php
                      if ($task->status == '0') { ?>
                        
                        <p  class="badge badge-danger text-uppercase mr-3">Incomplete</p> 
                        
                      <?php }else { ?>
                        <p class="badge badge-success text-uppercase mr-3">Completed</p> 
                        
                     <?php } ?>
                            
            </div>

          </td>
          <td class="align-middle" style="width: 10%">
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
            </button>
              <div class="dropdown-menu">
                  <p class="dropdown-item" >
                    Priority
                    <span class="badge badge-secondary text-uppercase">
                      @if ($task->priority == 4)
                                  {{ 'Highest' }}
                                @elseif ($task->priority == 3)
                                  {{ 'High' }}
                                @elseif ($task->priority == 2)
                                  {{ 'Meduim' }}
                                @elseif ($task->priority == 1)
                                  {{ 'Low' }}
                                @endif
                              </span>
                            </p>
                            <a class="dropdown-item" href="#">
                              Due Date
                              <span class="badge badge-warning text-uppercase">{{ $task->due_date }}</span> 
                  </a>
                  <div class="dropdown-divider"></div>
                  <a type="button" class="text-dark py-3 ml-3" onclick="taskComment({{ $task->id }})" data-toggle="modal" data-target="#commentModal" >
                    <i class="fas fa-comments">&nbsp;&nbsp;Add Comments</i>
                   
                  </a>
                </div>
            </div>
          </td>
          <td>
                    
            <div class="btn-group align-middle mt-2" style="width: 10%">

                <a type="button" onclick="collapseComments({{ $task->id }})">
                  <i class="fas fa-comments"></i>
                  <span class="badge badge-danger navbar-badge status_update" id="status_update{{ $task->id }}">{{ $task->comments->where('is_read', 0)->count() ?? 0 }}</span>
                </a>
              </a>
            </div>
          </td>

          <td class="align-middle" style="width: 10%">
            <a class="dropdown dropdown-list-toggle text-dark">
              <a href="#" data-toggle="dropdown"
                 class="notification-toggle action-dropdown  position-xs-bottom text-dark">
                  <i class="fas fa-ellipsis-v action-toggle-mr"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-list-content dropdown-list-icons">
                      <p  class="dropdown-item dropdown-item-desc edit-btn"
                         data-id="1"><i
                                  class="fas fa-edit mr-2 card-edit-icon"></i> Task Status
                      </p>
                      <div class="empty"></div>
                      <p href="#" class="dropdown-item dropdown-item-desc delete-btn ml-4" >
                                  <?php
                                  if ($task->status == '0') { ?>
                                    
                                    <a href="{{ route('admin.tc_status_update',$task->id) }}" class="badge badge-danger text-uppercase mr-3">InCcomplete</a> 
                                    
                                  <?php }else { ?>
                                    <a href="{{route('admin.tc_status_update',$task->id)  }}" class="badge badge-success text-uppercase mr-3">Completed</a> 
                                    
                                 <?php } ?>
                                        
                                  </p>
                  </div>
              </div>
          </a>

          </td>
        </tr>
        <tr class="w-100" id="collapseComments{{ $task->id }}" style="display: none">
          <td class="w-100" colspan="12">
            @if ($task->comments->count() > 0)
              @foreach ($task->comments as $comment) 
                <div class="row">
                  <div class="col-md-4">
                    <span class="w-100 " >
                      <b class="text-capitalize">{{  $comment->user->name  ?? 'no user' }}:</b>
                      <span>{{ $comment->message}}</span>
                    </span>
                    
                  </div>
                  
                  <div class=" w-50 d-flex justify-content-between lol">
                      <div class="col-md-2 set">
                    <a type="button" class="text-dark" onclick="taskComment({{ $task->id }})" data-toggle="modal" data-target="#commentModal" >
                      <i class="far fa-comment-dots">
                        
                      </i>
                      <br>
                      <p style="align-self: center; margin-left:-12px;"> Replay</p>
                      </a>

                  </div>
                  <div class="col-md-3 set-1">
                    <p class="text-gray" style="text-color:gray;">{{ $comment->created_at->diffForHumans() }}</p>
                  </div>
                  <div class="col-md-2 set">
                    <a  type="button" class="text-dark"  href="{{ route('admin.comment_delete',$comment->id) }}">
                      <i class="fas fa-trash"></i> 
                    </a>
                  </div>
                      </div>
                </div>
                <hr> 
              @endforeach
            @else
                <p class="text-gray text-center py-2">{{ 'No Comments To Read...' }}</p>
            @endif
          </td>
        </tr>
       
        
      @endforeach
    </tbody>
    
  </table>
@endif
@endforeach
@endif
</table-section>
<div class="dropdown-item">
  <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Comment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  action="{{ route('admin.task_comment') }} " method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
              @csrf
              <input type="hidden" name="tasks_id" value="" id="task_id">
              <label for="message-text" class="col-form-label">Comment:</label>
              <textarea class="form-control"  name="message" placeholder="Add Comment"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>

<script>
  function taskComment(task_id){
        $('#task_id').val(task_id);
      }
      function collapseComments(taskId){
        CommentStatus(taskId);
        $(`#status_update${taskId}`).text("0");
        var commentStyle = $(`#collapseComments${taskId}`).css('display');
        if(commentStyle == 'none'){
          $(`#collapseComments${taskId}`).css('display', '');
        }else{
          $(`#collapseComments${taskId}`).css('display', 'none');
        }
      };
      
      function CommentStatus(id){
          
          var route = "{{ route('admin.comment_update', ':id') }}";
          route = route.replace(":id", id);
          $.ajax({
            type:'GET',
            url:route,
            success:function(response){
              if(response.status == true){
                /* alert(response.message) */
                
              }
              else
                alert(response.message)
            }
          })
        }
</script>
    
    
    
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
