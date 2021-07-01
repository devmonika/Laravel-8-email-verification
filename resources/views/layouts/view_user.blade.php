                <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header  infoText">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Info</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            </ul>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->












    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              </div>
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL:</th> 
                      <th>Name</th> 
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th>
                      <th>Pincode</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $user)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->city}}</td>
                      <td>{{$user->state}}</td>
                      <td>{{$user->country}}</td>
                      <td>{{$user->pincode}}</td>
                      <td>{{$user->email}}</td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>