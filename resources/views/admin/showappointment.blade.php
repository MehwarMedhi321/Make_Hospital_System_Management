 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
    @include('admin.navbar')
      <!-- partial -->
    
      

        <!-- partial:partials/_navbar.html -->
  
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="padding-top: 70px;">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover custom-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Approved</th>
                                        <th scope="col">Cancel</th>
                                        <th scope="col">Send Mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $appoint)
                                    <tr>
                                        <td>{{$appoint->name}}</td>
                                        <td>{{$appoint->email}}</td>
                                        <td>{{$appoint->phone}}</td>
                                        <td>{{$appoint->doctor}}</td>
                                        <td>{{$appoint->date}}</td>
                                        <td>{{$appoint->message}}</td>
                                        <td>{{$appoint->status}}</td>
                                        <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                                        <td><a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this...')" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                                        <td><a class="btn btn-primary" onclick="return confirm('Are You Sure To Send mail this User...')" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>

                                             </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .custom-table {
                background-color:  #f2f2f2;
            }
        
            .custom-table tbody tr:hover {
                background-color: rgba(179, 174, 174, 0.738);
            }
        </style>
         <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
     </body>
</html>