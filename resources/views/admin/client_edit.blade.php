<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Clients</title>
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
                    <h6 class="m-0 font-weight-bold text-primary">Client Edit Details</h6>

                </div>
                <div class="card-body">
                                
                    <form action="/update_client/{{$data->id}}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                        <div class="modal-body">

                            <div class="form-group">
                            @csrf
                                <label> Client_Name </label>
                                <input type="text" name="name" id="name" value="{{$data->name}}"class="form-control" placeholder="Enter Client_name" required>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select name="department" id="department" class="form-control"  required>
                                  <option>Select Department</option>
                                  <option value="Developer" {{$data->department == "Developer" ? 'selected' : ""}}>Developer</option>
                                  <option value="IOS Developer" {{$data->department == "IOS Developer" ? 'selected' : "" }}>IOS Devolper</option>
                                  <option value="Admin" {{$data->department == "Admin" ? 'selected' : "" }}>Admin</option>
                                  <option value="SQA" {{$data->department == "SQA" ? 'selected' : "" }}>SQA</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" value="{{$data->email}}" class="form-control" placeholder="Enter Email" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter Password" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" name="website" id="website" value="{{$data->website}}" class="form-control" placeholder="Enter Website" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Client_Profile</label>
                                <input type="file"  name="image" id="image" value="{{$data->image}}"  class="form-control" placeholder="Enter Image">
                                <img src="{{asset('upload/resources/views/'.$data->image)}}" width="70px" height="70px" padding-top="20px" alt="img">
                            </div>
                            

                        

                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('admin.client') }}" class="btn btn-danger"  data-dismiss="modal">Cancel</a>
                            <button type="submit" name="" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                        


                    
                

                </div>
            </div>
        </div>


</body>
</html>

