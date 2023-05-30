@include('back.includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Messages</h1>
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
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Table</h3>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($messages as $m)
                      <tr>
                      <td style="width: 10px">{{ $loop->iteration }}</td>
                      <td>{{$m->name}}</td>
                      <td>{{$m->email}}</td>
                      
                      <td>{{$m->phone}}</td>
                      <td>{{$m->message}}</td>
                      
                      </tr>
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