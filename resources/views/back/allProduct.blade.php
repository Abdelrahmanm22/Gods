@include('back.includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
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
                <h3 class="card-title">Products Table</h3>
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
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Admin Id</th>
                      <th>UPDATE</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $p)
                      <tr>
                      <td style="width: 10px">{{ $loop->iteration }}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->price}}</td>
                      <td><img src="{{URL::asset('image/Product').'/'.$p->image}}" alt="" width="100" height="150"></td>
                      <td>{{$p->idAdmin}}</td>
                      <td><a href="{{url('admin/updateProduct/'.$p->id)}}" class="btn btn-default">update</a></td>
                      <td><a href="{{url('admin/deleteProduct/'.$p->id)}}" class="btn btn-danger">Delete</a></td>
                      </tr>
                  @endforeach
                    
                  </tbody>
                </table>
                <a href="{{route('addProduct')}}" class="btn btn-dark">Add Product</a>
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