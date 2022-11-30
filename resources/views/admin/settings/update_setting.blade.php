@extends('layouts.layout')
    @section('title')
      Update Settings
    @endsection
    @section('content')
       
       <div class="content-wrapper">
       <section class="content">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
              <h3 class="m-0">Update Settings</h3>
            </div><!-- /.col -->
            <div class="col-sm-6">  
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="{{url('settings')}}">Settings</a></li>
                <li class="breadcrumb-item ">Update Settings</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
         <div class="row">  
         
           <div class="col-md-8 offset-2">
            @if(request()->session()->has('status'))
            <div class="alert alert-success text-center">{{session()->get('status')}}</div>
          @endif
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Settings</h3>
                </div>
              
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{url('update_setting',$setting->id)}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="title"  value="{{$setting->title}}">
                        @error('title')
                          <span class="text-danger">{{$message}}</span>    
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="logo" >
                                @error('logo')
                                  <span class="text-danger">{{$message}}</span>    
                                @enderror
                              <label class="custom-file-label" for="image">Choose Logo</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="name">Phone</label>
                      <input type="text" class="form-control" name="phone"  value="{{$setting->phone}}">
                      @error('phone')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input type="text" class="form-control" name="email"  value="{{$setting->email}}">
                      @error('email')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Address</label>
                      <input type="text" class="form-control" name="address"  value="{{$setting->address}}">
                      @error('address')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Footer Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="footer_logo" >
                                @error('footer_logo')
                                  <span class="text-danger">{{$message}}</span>    
                                @enderror
                              <label class="custom-file-label" for="image">Choose Logo</label>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                      <label for="name">Footer Text</label>
                      <textarea name="footer_text" id="footer_text" class="form-control" cols="30" rows="3">{{$setting->footer_text}}</textarea>
                      @error('footer_text')
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
  


