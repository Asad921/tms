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
                    <h6 class="m-0 font-weight-bold text-primary">Invoice Edit Details</h6>

                </div>
                <div class="card-body">
                                
                    <form action="{{ route('admin.invoice_update',$invoices->id) }}" method="POST" id="editForm" enctype="multipart/form-data">
                                
          
                        <div class="modal-body">

                            <div class="form-group">
                            @csrf
                                <label> Invoice_Name </label>
                                <input type="text" name="name" id="name" value="{{$invoices->name}}"class="form-control" placeholder="Enter Client_name" required>
                            </div>
                            <div class="form-group">
                                <label>Client_name</label>
                                <select name="clients"  class="form-control"  required>
                                    <option>Select Clients</option>
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->id }}" {{$invoices->clients == $client->id ? 'selected' : ""}}>{{ $client->name }}</option>
                                @endforeach
                                    </select>
                               
                            </div>
                            <div class="form-group">
                                <label>Project_name</label>
                                <select name="project"  class="form-control"  required>
                                    <option>Select Project</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}" {{$invoices->project == $project->id ? 'selected' : ""}}>{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                 
                            </div>
                            <div class="form-group">
                                <label>Issue_Date</label>
                                <input type="datetime-local" name="issue_date"  value="{{ $invoices->issue_date }}" class="form-control" placeholder="" >

                                
                            </div>
                            <div class="form-group">
                                <label>Due_date</label>
                                <input type="date" name="due_date" id="website" value="{{$invoices->due_date}}" class="form-control" placeholder="Enter Website" required>

                                
                            </div>
                            <div class="form-group">
                                <label>Total_bill</label>
                                <input type="text"  name="total_bill"  value="{{$invoices->total_bill}}"  class="form-control" placeholder="Enter Total bill">
                                
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text"  name="status"  value="{{$invoices->status}}"  class="form-control" placeholder="Enter Image">
                                
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control"   name="notes" >
                                    {{ $invoices->notes }}
                                </textarea>
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

