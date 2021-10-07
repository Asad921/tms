<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Projects</title>
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
                    <h6 class="m-0 font-weight-bold text-primary"> Admin Project Edit Details</h6>

                </div>
                <div class="card-body">
                                
                    <form action="{{ route('admin.project_update',$projects->id) }}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                        <div class="modal-body">

                            <div class="form-group">
                            @csrf
                                <label> Project_Name </label>
                                <input type="text" name="name" id="name" value="{{$projects->name}}"class="form-control" placeholder="Enter Client_name" required>
                            </div>

                            <div class="form-group">
                                <label>Client</label>
                                <select name="clients_name"  class="form-control"  required>
                                    <option>Select Clients</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}" {{$projects->clients_name == $client->id ? 'selected' : ""}}>{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Users</label>
                                    <select name="users_name[]"  class="form-control"  required multiple>
                                      <option>Select user</option>
                                      @foreach ($users as $user)
                                      <option value="{{ $user->id }}"{{ in_array($user->id, $projects->userProjects()->pluck('users_id')->toArray()) ? 'selected' : ''}}>{{ $user->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            
                            

                        

                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('admin.project') }}" class="btn btn-danger"  data-dismiss="modal">Cancel</a>
                            <button type="submit" name="" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                        


                    
                

                </div>
            </div>
        </div>


</body>
</html>

