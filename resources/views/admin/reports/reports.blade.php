@extends('layouts.layout')
    @section('title')
    Reports
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
                  <h1 class="m-0">Reports</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">  
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Reports</li>
                    <li class="breadcrumb-item "></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-md-8">
                  <form action="{{route('reports')}}" method="post"> 
                    @csrf
                   <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="name">Year</label>
                          <select name="year" id="year" class="form-control">
                            @include('inc.year')
                          </select>
                          @error('year')  
                              <span class="text-danger">{{$message}}</span>    
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="name">Month</label>
                          <select name="month" id="month" class="form-control">
                            @include('inc.month')
                          </select>
                          @error('month')
                              <span class="text-danger">{{$message}}</span>    
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4 mt-2">
                        <button type="submit" class="btn btn-primary mt-4">Filter By Date</button>
                      </div>
                  </form>
                   </div>
                </div>
                <div class="col-md-4"></div>
              </div>
              <div class="row bg-white">
                <div class="col-4">
                  <div class="card-body ">
                    <table id="" class="table table-striped table-hover ">
                      <tbody>
                          <tr>
                            <th>Income</th>
                            <td>{{$income->sum('price')}}</td>
                          </tr>
                          <tr>
                            <th>Expense</th>
                            <td>{{$expense->sum('price')}}</td>
                          </tr>
                          <tr>
                            <th>Profit</th>
                            @if ($income->sum('price')-$expense->sum('price')>0)
                               <td class="text-success">{{$income->sum('price')-$expense->sum('price')}} <i class="fa fa-arrow-up" aria-hidden="true"></i></td>
                            @else
                               <td class="text-danger">{{$income->sum('price')-$expense->sum('price')}} <i class="fa fa-arrow-down" aria-hidden="true"></i></td>
                            @endif
                          </tr>
  
                      </tbody>
                  
                    </table>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card-body">
                    <table id="" class="table table-bordered table-hover ">
                      <thead>
                   
                      </thead>
                      <tbody>
                          <tr>
                            <th>Income By Category</th>
                            <td></td>
                          </tr>
                          @if(isset($categories))
                            @foreach ($categories as $category)
                                @if (request()->isMethod('get'))
                                  <?php 
                                    
                                      $income = App\Income::where('category_id',$category->id)->whereMonth('date',now()->month)->get()->sum('price'); 
                                  ?>
                                @else
                                  <?php 
                                    
                                    $income = App\Income::where('category_id',$category->id)->whereMonth('date',$month)->get()->sum('price'); 
                                  ?>
                                @endif
                                @if ($income!=0)
                                    <tr>
                                      <th>{{$category->name}}</th>
                                      <td>{{$income}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                      </tbody>
                  
                    </table>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card-body">
                    <table id="" class="table table-bordered table-hover ">
                      <thead>
                   
                      </thead>
                      <tbody>
                          <tr>
                            <th>Expense By Category</th>
                            <td></td>
                          </tr>
                          @if(isset($categories))
                             @foreach ($categories as $category)
                             @if (request()->isMethod('get'))
                                <?php 
                                    $date = now()->month;
                                    $expense = App\Expense::where('category_id',$category->id)->whereMonth('date',$date)->get()->sum('price'); 
                                ?>
                             @else
                                <?php 
                                  $date = $month;
                                  $expense = App\Expense::where('category_id',$category->id)->whereMonth('date',$date)->get()->sum('price'); 
                                ?>
                             @endif
                                @if ($expense!=0)
                                    <tr>
                                      <th>{{$category->name}}</th>
                                      <td>{{$expense}}</td>
                                    </tr>
                                @endif
                             @endforeach
                          @endif
                      </tbody>
                  
                    </table>
                  </div>
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

