
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <base href="/public">
    <style type="text/css">
    label{
      display: inline-block;
      width: 200px;
    }
    </style>
@include('admin.css')
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
    @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding: 100px;">
          @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              {{ session()->get('message') }}
          </div>
          @endif
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Doctor Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" style="color: black;">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" style="color: black;">
                        </div>
                        <div class="form-group">
                            <label for="specialty">Speciality</label>
                            <input type="text" class="form-control" id="specialty" name="specialty" value="{{ $data->specialty }}" style="color: black;">
                        </div>
                        <div class="form-group">
                            <label for="room">Room</label>
                            <input type="number" class="form-control" id="room" name="room" value="{{ $data->room }}" style="color: black;">
                        </div>
                        <div class="form-group">
                            <label for="old_image">Old Image</label>
                            <br>
                            <img  width="25%" src="doctorimage/{{ $data->image }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="new_image">Change Image</label>
                            <input type="file" class="form-control-file" id="new_image" name="file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    @include('admin.script')
     </body>
</html>