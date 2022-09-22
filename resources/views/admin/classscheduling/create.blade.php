@extends('layouts.admin')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Class Scheduling</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Class Scheduling</li>
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
      <h3 class="card-title">Add Class Scheduling</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('class-scheduling.store')}}" method="post">
      {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label>Course</label>
          <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label>Class</label>
          <input type="text" name="semester_code" class="form-control" value="{{old('semester_code')}}">
        </div>
        <div class="form-group">
          <label>Level</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Shift</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Classroom</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Batch</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Day</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Time</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Semester</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>Start date</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
        </div>
        <div class="form-group">
          <label>End Date</label>
          <input type="text" name="semester_duration" class="form-control" value="{{old('semester_duration')}}">
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