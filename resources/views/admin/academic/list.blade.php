@extends('layouts.admin')
@push('styles')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <style type="text/css">
    .buttons{
      display: flex;
    }
    .btn-delete{
        display: inline;
        background: red;
        width: 60px;
        height: 38px;
        border-radius: 6px;
        margin-left: 2px;
        border: none;
      }
  </style>
@endpush
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Academic</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Academic</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
      <div class="card-header">
        
        <a href="{{route('academic.create')}}" class="btn btn-success m-r">Add Academic</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Action</th>
            
          </tr>
          </thead>
          <tbody>
          @php($i=1)
          @foreach($details as $detail)
          <tr>
            <td>{{$i}}</td>
            <td>{{$detail->academic_year}}</td>
            
            <td class="buttons">
              <a class="btn btn-info edit " href="{{route('academic.edit',$detail->id)}}" title="Edit">Edit</a>
              <form method= "post" action="{{route('academic.destroy',$detail->id)}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn-delete" style="display:inline">Delete</button>
              </form>
            </td>
          </tr>
          @php($i++)
          @endforeach
          </tbody>
          
        </table>
      </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection
@push('scripts')
  <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#example1').DataTable();
    });
  </script>
@endpush