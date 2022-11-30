@extends('layouts.layout')
    @section('title')
      Categories
    @endsection
    @section('content')
      <div  class="hold-transition sidebar-mini">
      <div class="wrapper">
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->

          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">  
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Categories</li>
                    <li class="breadcrumb-item "></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                     <a href="{{url('add_category')}}" class="btn btn-primary">Add Category</a>
                    </div>
    
                          @if(request()->session()->has('status'))
                            <div class="alert alert-success text-center">{{session()->get('status')}}</div>
                          @endif
                    
                  
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover ">
                        <thead>
                        <tr >
                          <th>Name</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $category)
                          <tr>
                            <td>{{$category->name}}</td>
                            <td><img style='width:40px;'src="{{$category->image}}" alt=""></td>
                            <td><a href="{{url('view_category',$category->id)}}"><i class="fa fa-eye text-success" aria-hidden="true" ></i></a> &nbsp;&nbsp;&nbsp;
                              @can('isAdmin', $category)  
                                <a href="{{url('edit_category',$category->id)}}"><i class="fa fa-edit" aria-hidden="true" ></i></a> &nbsp;&nbsp;&nbsp; 
                                <a href="{{url('delete_category',$category->id)}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                              @endcan
                            </td>
                          </tr>
                          @endforeach
                        
                        </tbody>
                    
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
      </div>
    @endsection
  
    @section('script')
      <script>
     $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
      </script>
    @endsection

