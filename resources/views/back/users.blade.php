@include('back.includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('logout')}}">logout</a></li>
            <li class="breadcrumb-item active"><a href="{{route('adminHome')}}">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

    <!-- table for clients ------------------------------------------------>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Clients Table</h3>
              </div>
              <!-- /.card-header -->
              @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
              @if(Session::has('successAd'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('successAd')}}
                </div>
              @endif
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>User Name</th>
                      <th>email</th>
                      <th>Image</th>
                      <th>Convert To Admin</th>
                      <th>Update Password</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Clients as $c)
                      <tr>
                      <td style="width: 10px">{{ $loop->iteration }}</td>
                      <td>{{$c->user_name}}</td>
                      <td>{{$c->email}}</td>
                      <td><img src="{{URL::asset('image/Client').'/'.$c->image}}" alt="" width="100" height="150"></td>
                      
                      <td><a href="{{url('admin/convertToAdmin/'.$c->id)}}" class="btn btn-default">convert</a></td>
                      <td><a href="{{url('admin/updatePass/'.$c->id)}}" class="btn btn-default">update</a></td>
                  @endforeach
                    
                  </tbody>
                </table>
                <!-- <a href="{{route('addProduct')}}" class="btn btn-dark">Add Product</a> -->
              </div>
              
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
    </div><!-- /.container-fluid -->




  <!-- table for clients ------------------------------------------------>
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admins Table</h3>
              </div>
              <!-- /.card-header -->
              @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
              @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                </div>
              @endif
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>User Name</th>
                      <th>email</th>
                      <!-- <th>Image</th> -->
                      <th>Convert To Client</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Admins as $a)
                      <tr>
                      <td style="width: 10px">{{ $loop->iteration }}</td>
                      <td>{{$a->user_name}}</td>
                      <td>{{$a->email}}</td>
                      <!-- <td><img src="{{URL::asset('image/Client').'/'.$c->image}}" alt="" width="100" height="150"></td> -->
                      <td><a href="{{url('admin/convertToClient/'.$a->id)}}" class="btn btn-default">convert</a></td>
                  @endforeach
                    
                  </tbody>
                </table>
                <!-- <a href="{{route('addProduct')}}" class="btn btn-dark">Add Product</a> -->
              </div>
              
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('back.includes.footer')