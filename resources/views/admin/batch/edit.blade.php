@extends('layouts.admin')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Batch</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Batch</li>
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
      <h3 class="card-title">Add Batch</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('batch.update',$detail->id)}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
      <div class="card-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" value="{{$detail->name}}">
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