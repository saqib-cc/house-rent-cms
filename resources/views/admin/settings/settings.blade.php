@extends('layouts.layout')
    @section('title')
      Settings
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
                  <h1 class="m-0">Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">  
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Settings</li>
                    <li class="breadcrumb-item "></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                          @if(request()->session()->has('status'))
                            <div class="alert alert-success text-center">{{session()->get('status')}}</div>
                          @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover text-center ">
                        <thead>
                        <tr >
                          <th>Title</th>
                          <th>Logo</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Footer Logo</th>
                          <th>Footer Text</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($settings as $setting)
                          <tr>
                            <td>{{$setting->title}}</td>
                            <td><img style='width:40px;'src="{{$setting->logo}}" alt=""></td>
                            <td>{{$setting->phone}}</td>
                            <td>{{$setting->email}}</td>
                            <td>{{$setting->address}}</td>
                            <td><img style='width:40px;'src="{{$setting->footer_logo}}" alt=""></td>
                            <td>{{$setting->footer_text}}</td> 
                            <td><a href="{{route('edit_setting', ['id' =>$setting->id ])}}"><i class="fa fa-edit" aria-hidden="true" ></i></a> &nbsp;&nbsp;&nbsp; 
     
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

