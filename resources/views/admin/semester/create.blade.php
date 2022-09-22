@extends('layouts.admin')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Semester</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Semester</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    @if (count($errors) > 0)
    <div class="alert alert-danger message">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
   <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Add Semester</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('semester.store')}}" method="post">
      {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label>Semester</label>
          <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label>Semester Code</label>
          <input type="text" name="semester_code" class="form-control" value="{{old('semester_code')}}">
        </div>
        <div class="form-group">
          <label>Semester Duration</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Semester Desctiption</label>
          <input type="text" name="description" class="form-control" value="{{old('description')}}">
        </div>
        <div class="form-group">
          
          <input type="submit" name="submit" class="btn btn-success">
        </div>
      </div>
      
      <!-- /.card-footer -->
    </form>
  </div>

</section>
@endsection