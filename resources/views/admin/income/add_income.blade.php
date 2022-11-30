@extends('layouts.layout')
    @section('title')
      Add Income
    @endsection
    @section('content')
       
       <div class="content-wrapper">
       <section class="content">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Income</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">  
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="{{url('view_income')}}">Incomes</a></li>
                <li class="breadcrumb-item ">Add Income</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
         <div class="row">  
           <div class="col-md-8 offset-2 mt-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title" >Add Income</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('add_income')}}" >
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Category</label>
                      <select name="category" id="category" class="form-control">
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                      @error('category')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Sub Category</label>
                      <select name="subcategory" id="sub_category" class="form-control">
                       
                      </select>
                      @error('subcategory')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Income Title">
                      @error('title')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Description</label>
                      {{-- <input type="text" class="form-control" name="description" placeholder="Expense Name"> --}}
                      <textarea name="description" class="form-control" id="description" cols="5" rows="2" placeholder="Income Description"></textarea>
                      @error('description')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="Price">
                      @error('price')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Date</label>
                      <input type="date" class="form-control" name="date" >
                      @error('date')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
           </div>
       </div>
     </div>
    </section>
   </div>
    @endsection
  
    @section('script')
      <script>
       $(document).ready(function(){
        
        get_subcategories();
          //  function for fetching subcategories
        function get_subcategories(){
          category_id =  $('select').find(":selected").val();
            $.ajax({
              url:"/get_subcategories/"+category_id,
              method:'GET',
              data:category_id,
              success:function(res){
                 console.log(res.data);
                 $('#sub_category').html('');
                 $.each(res.data,function(k,val){
                    $('#sub_category').append('<option value='+parseInt(val.id)+'>'+val.subcategory+'</option>');
                  });
              }

            });
        }
        
        // on change 
          $('#category').on('change',function(){
            
            category_id =  $(this).find(":selected").val();
            $.ajax({
              url:"/get_subcategories/"+category_id,
              method:'GET',
              data:category_id,
              success:function(res){
                 console.log(res.data);
                 $('#sub_category').html('');
                 $.each(res.data,function(k,val){
                    $('#sub_category').append('<option value='+parseInt(val.id)+'>'+val.subcategory+'</option>');
                  });
              }

            });
          });
       });
      </script>
    @endsection

