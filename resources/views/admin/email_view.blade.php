
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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
      <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px;">
          @if (session()->has('meassage'))
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">X</button>
  {{session()->get('meassage')}}
  </div>
@endif
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="{{url('sendemail',$data->id)}}" method="POST"  >
                @csrf 
                <div class="form-group">
                  <label for="name" style="color: #ffffff;"> Greeting</label>
                  <input required="" type="text" class="form-control" id="name" name="name" placeholder="Write the name" style="border-radius: 5px; border: 1px solid #ffffff; padding: 10px; background-color: #333333; color: #ffffff;">
                </div>
                <div class="form-group">
                  <label for="number" style="color: #ffffff;">Body</label>
                  <input required="" type="number" class="form-control" id="number" name="phone"  style="border-radius: 5px; border: 1px solid #ffffff; padding: 10px; background-color: #333333; color: #ffffff;">
                </div>
                <div class="form-group">
                    <label for="number" style="color: #ffffff;"> Action Text</label>
                    <input required="" type="text" class="form-control" id="number" name="actiontext" placeholder="Write the room no" style="border-radius: 5px; border: 1px solid #ffffff; padding: 10px; background-color: #333333; color: #ffffff;">
                  </div>
                <div class="form-group">
                  <label for="number" style="color: #ffffff;"> Action Url</label>
                  <input required="" type="text" class="form-control" id="number" name="actionurl" placeholder="Write the room no" style="border-radius: 5px; border: 1px solid #ffffff; padding: 10px; background-color: #333333; color: #ffffff;">
                </div>
                <div class="form-group">
                    <label for="number" style="color: #ffffff;">  End Part</label>
                    <input required="" type="text" class="form-control" id="number" name="endpart" placeholder="Write the room no" style="border-radius: 5px; border: 1px solid #ffffff; padding: 10px; background-color: #333333; color: #ffffff;">
                  </div>
                <div class="form-group">
                  <input required="" type="submit" class="btn btn-success" value="Submit" style="border-radius: 5px; padding: 10px 20px; background-color: #28a745; color: #ffffff; border: none; cursor: pointer;">
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
     </body>
</html>