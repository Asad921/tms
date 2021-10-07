<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Task Edit</title>
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
                    <h6 class="m-0 font-weight-bold text-primary">Task Edit</h6>

                </div>
                <div class="card-body">
                                
                    <form action="{{ route('client.update_task',$tasks->id) }}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                        <div class="modal-body">

                            <div class="form-group">
                            @csrf
                                <label> Task_Name </label>
                                <input type="text" name="title" id="name" value="{{$tasks->title}}"class="form-control" placeholder="Enter Client_name" required>
                            </div>
                            
                                
                            <div class="form-group">
                                <label>Projects</label>
                                <select name="projects"  class="form-control"  required>
                                    <option>Select Project</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}" {{$tasks->projects == $project->id ? 'selected' : ""}}>{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                                
                        
                            <div class="form-group">
                                <label>Priority</label>
                                <select name="priority" id="department" class="form-control"  required>
                                  <option>Select Priority</option>
                                  <option value="4" {{$tasks->priority == "4" ? 'selected' : ""}}>Highest</option>
                                  <option value="3" {{$tasks->priority == "3" ? 'selected' : "" }}>High</option>
                                  <option value="2" {{$tasks->priority == "2" ? 'selected' : "" }}>Medium</option>
                                  <option value="1" {{$tasks->priority == "1" ? 'selected' : "" }}>Low</option>

                                </select>
                            </div>
                            <div class="form-group">
                                @csrf
                                    <label> Due_Date </label>
                                    <input type="datetime-local" name="due_date" id="name" value="{{$tasks->due_date}}"class="form-control" placeholder="Enter Client_name" required>
                                </div>
                            <div class="form-group">
                                <label>Asignee</label>
                                <select name="assignee"  class="form-control"  required>
                                    <option>Select Asignee</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" {{$tasks->assignee == $user->id ? 'selected' : ""}}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select name="tags" class="form-control"  required>
                                    <option>Select Tags</option>
                                    <option value="Good" {{$tasks->tags == "Good" ? 'selected' : ""}}>Good</option>
                                    <option value="Bad" {{$tasks->tags == "Bad" ? 'selected' : "" }}>Bad</option>
                                    <option value="Important" {{$tasks->tags == "Important" ? 'selected' : "" }}>Imprtant</option>
                                    <option value="Normal" {{$tasks->tags == "Normal" ? 'selected' : "" }}>Normal</option>
  
                                  </select>
                            </div>
                            
                            <div class="form-group">
                    
                            <label> Description </label>
                            <textarea class="form-control"   name="Description" >
                                {{ $tasks->Description }}
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label>Task_image</label>
                                <input type="file"  name="image[]" id="image" value="{{$tasks->image}}"  class="form-control" placeholder="Enter Image" multiple="multiple">
                                @if ($tasks->image != "")
                                 @foreach(json_decode($tasks->image) as $info) 
                                    <p >
                                    <img src="{{asset('upload/resources/views/'.$info)}}" width="70px" height="70px" padding-top="20px" alt="img">
                          
                                    </p>
                     
                                    @endforeach
                                    @endif
                                {{-- <img src="{{asset('upload/resources/views/'.json_decode($tasks->image)[0])}}" width="70px" height="70px" padding-top="20px" alt="img"> --}}
                            </div>
                            

                            

                        

                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('client.task') }}" class="btn btn-danger"  data-dismiss="modal">Cancel</a>
                            <button type="submit" name="" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                        


                    
                

                </div>
            </div>
        </div>


</body>
</html>

