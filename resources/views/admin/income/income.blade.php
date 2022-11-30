@extends('layouts.layout')
    @section('title')
    Incomes
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
                  <h1 class="m-0">Incomes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">  
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Incomes</li>
                    <li class="breadcrumb-item "></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                     <a href="{{url('add_income')}}" class="btn btn-primary">Add Income</a>
                    </div>
    
                          @if(request()->session()->has('status'))
                            <div class="alert alert-success text-center">{{session()->get('status')}}</div>
                          @endif
                    
                  
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover ">
                        <thead>
                        <tr >
                          <th>Title</th>
                          <th>Category</th>
                          <th>Sub Category</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($incomes as $income)
                            <tr>
                              <td>{{$income->title}}</td>
                              <td>{{$income->category->name}}</td>
                              <td>{{$income->subcategory->subcategory}}</td>
                              <td>{{$income->description}}</td>
                              <td>{{$income->price}}</td>
                              <td>{{$income->date}}</td>
                              <td><a href="{{url('edit_income',$income->id)}}"><i class="fa fa-edit" aria-hidden="true" ></i></a> &nbsp;&nbsp;&nbsp; <a href="{{url('delete_income',$income->id)}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
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

