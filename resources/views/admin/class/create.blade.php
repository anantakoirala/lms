@extends('layouts.admin')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Class</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Class</li>
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
      <h3 class="card-title">Add Class</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('class.store')}}" method="post">
      {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label>Class</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Class Code</label>
          <input type="text" name="class_code" class="form-control">
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