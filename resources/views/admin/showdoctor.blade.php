 
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
      <style>
        .custom-table {
            background-color: #f2f2f2;
        }

        .custom-table tbody tr:hover {
            background-color: rgba(179, 174, 174, 0.738);
        }
    </style>
<div class="container-fluid page-body-wrapper">
    <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover custom-table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Specialty</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->specialty}}</td>
                                <td>{{$data->room}}</td>
                                <td><img height="100" width="100" src="doctorimage/{{ $data->image }}" alt=""></td>
                                <td><a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this...')" href="{{ url('deletedoctor', $data->id) }}">Delete</a></td>
                                <td><a class="btn btn-success" href="{{ url('updatedoctor',$data->id)}}">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

      
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
     </body>
</html>