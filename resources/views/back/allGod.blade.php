@include('back.includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('logout')}}">logout</a></li>
            <li class="breadcrumb-item active">Home</li>
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
                <h3 class="card-title">Setting Table</h3>
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
                      <th style="width: 10px">ID</th>
                      <th>God Name</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Admin Id</th>
                      <th>UPDATE</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($gods as $g)
                      <tr>
                      <td style="width: 10px">{{$g->id}}</td>
                      <td>{{$g->God_Name}}</td>
                      <td>{{$g->Description}}</td>
                      <td><img src="{{URL::asset('image/God').'/'.$g->image}}" alt="" width="200" height="400"></td>
                      <td>{{$g->idAdmin}}</td>
                      <td><a href="{{url('admin/updateGod/'.$g->id)}}" class="btn btn-default">update</a></td>
                      <td><a href="{{url('admin/delete/'.$g->id)}}" class="btn btn-danger">Delete</a></td>
                      </tr>
                  @endforeach
                    
                  </tbody>
                </table>
                <a href="{{route('addGod')}}" class="btn btn-dark">Add God</a>
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