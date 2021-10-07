<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit Users</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        

        <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Edit Details</h6>

                </div>
                <div class="card-body">
                                
                    <form action="{{ route('admin.user_update',$user->id) }}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                        <div class="modal-body">

                            <div class="form-group">
                            @csrf
                                <label> Client_Name </label>
                                <input type="text" name="name" id="name" value="{{$user->name}}"class="form-control" placeholder="Enter Client_name" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="Enter Contact Number" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="Enter Email" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password"  value="" class="form-control" placeholder="Enter Password" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Projects</label>
                                
                                <select name="projects" id="department" class="form-control"  required>
                                    <option>Select Projects</option>
                                    @foreach ($projects as $project)
                                    <option value="{{ $project->id }}" {{$user->projects == $project->id ? 'selected' : ""}}>{{ $project->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Roles</label>
                                <select name="roles" id="department" class="form-control"  required>
                                  <option>Select Roles</option>
                                  @foreach ($roles as $role)
                                  <option value="{{ $role->id }}" {{$user->roles == $role->id ? 'selected' : ""}}>{{ $role->name }}</option>
                                  @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>User_type</label>
                                <select name="utype"  class="form-control"  required>
                                  <option>Select Tags</option>
                                  <option value="ADM" {{$user->utype == "ADM" ? 'selected' : ""}}>ADM</option>
                                  <option value="USR" {{$user->utype == "USR" ? 'selected' : "" }}>USR</option>
                                  <option value="CLI" {{$user->utype == "CLI" ? 'selected' : "" }}>CLI</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Client_Profile</label>
                                <input type="file"  name="image" id="image" value="{{$user->image}}"  class="form-control" placeholder="Enter Image">
                                <img src="{{asset('upload/resources/views/'.$user->image)}}" width="70px" height="70px" padding-top="20px" alt="img">
                            </div>
                            

                        

                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('admin.user') }}" class="btn btn-danger"  data-dismiss="modal">Cancel</a>
                            <button type="submit" name="" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                        


                    
                

                </div>
            </div>
        </div>


</body>
</html>

