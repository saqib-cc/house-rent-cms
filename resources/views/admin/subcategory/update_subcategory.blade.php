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
                <li class="breadcrumb-item ">Update Subcategory</li>
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
                <form method="post" action="{{url('update_subcategory',$subcategory->id)}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Category</label>
                      <select name="category_id" id="" class="form-control">
                        @foreach ($category as $item)
                            <option @if($subcategory->category_id==$item->id) {{ 'selected'}} @endif value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                      @error('category_id')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{$subcategory->subcategory}}">
                      @error('name')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
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
  


