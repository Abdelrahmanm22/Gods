@include('back.includes.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Product</h1>
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
    <div class="card card-primary">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                </div>
            @endif
              <div class="card-header">
                <h3 class="card-title">Update Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.update.product',$products->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Product Name</label>
                    <input type="text" class="form-control" value="{{$products->name}}" name="name"  id="exampleInputName" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPrice">Price</label>
                    <input type="text" class="form-control" value="{{$products->price}}"  name="price"  id="exampleInputName" placeholder="Enter Product Price">
                  </div>
                  
                  <div class="form-group">
                    <img src="{{URL::asset('image/Product').'/'.$products->image}}" width="100px" height="100px">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" placeholder="Update Image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">{{$products->image}}</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> 
                  
                  
                  <!-- <input type="hidden" class="form-control" name="id" id="exampleInputID" value="" > -->
                    
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('back.includes.footer')