@extends('layouts.layout')
    @section('title')
      Update Category
    @endsection
    @section('content')
       
       <div class="content-wrapper">
       <section class="content">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
              <h1 class="m-0">Update Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">  
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="{{url('categories')}}">Categories</a></li>
                <li class="breadcrumb-item ">Update Category</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
         <div class="row">  
           <div class="col-md-8 offset-2 mt-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{url('update_category',$category->id)}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{$category->name}}">
                      @error('name')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" >
                          <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
           </div>
       </div>
     </div>
    </section>
   </div>
    @endsection
  


