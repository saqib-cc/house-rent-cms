@extends('layouts.layout')
    @section('title')
      Update Expense
    @endsection
    @section('content')
       
       <div class="content-wrapper">
       <section class="content">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
              <h1 class="m-0">Update Expense</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">  
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="{{url('view_expense')}}">Expenses</a></li>
                <li class="breadcrumb-item ">Update Expense</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
         <div class="row">  
           <div class="col-md-8 offset-2 mt-5">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Expense</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{url('update_expense',$expense->id)}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Category</label>
                      <select name="category" id="category" class="form-control">
                        @if(isset($categories))
                          @foreach ($categories as $item)
                              <option @if($expense->category_id==$item->id) {{ 'selected'}} @endif value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                        @endif  
                      </select>
                      @error('category')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Subcategory</label>
                      <select name="subcategory" id="sub_category" class="form-control" sub_category='{{$expense->subcategory->id}}'>
                     
                      </select>
                      @error('category_id')
                          <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Title</label>
                      <input type="text" class="form-control" name="title"  value="{{$expense->title}}">
                      @error('title')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Description</label>
                      <input type="text" class="form-control" name="description"  value="{{$expense->description}}">
                      @error('description')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Price</label>
                      <input type="text" class="form-control" name="price"  value="{{$expense->price}}">
                      @error('price')
                        <span class="text-danger">{{$message}}</span>    
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">Date</label>
                      <input type="date" class="form-control" name="date"  value="{{$expense->date}}">
                      @error('date')
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
    @section('script')
    <script>
     $(document).ready(function(){
      // alert('hi');
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
               counter = 0;
               $.each(res.data,function(k,val){
                  $('#sub_category').append('<option  id="counter'+counter+'" value='+parseInt(val.id)+'>'+val.subcategory+'</option>');
                  if($('#sub_category').attr('sub_category')==val.id){
                  $("#counter"+counter).attr("selected","selected");
                }
                counter++;
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
               
                  $('#sub_category').append('<option class="opt_subcategory" value='+parseInt(val.id)+'>'+val.subcategory+'</option>');
                  if($('#sub_category').attr('sub_category')==val.id){
                  $('.opt_subcategory').html('selected');
                }
                });
            }

          });
        });
     });
    </script>
  @endsection
  


