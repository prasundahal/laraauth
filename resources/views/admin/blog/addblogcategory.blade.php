


@extends('layouts.admin')
@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Category</h5>  <span class="pull-right">
                    <a href="{{url('admin/blogCategory')}}" class="pull-right btn btn-back">
                        <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
                    </span>
                <p class="card-text">
                    <form action="{{ route('storeblogcategory') }}" class="form-image-upload" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <strong>Blog Category</strong>
                            <input type="text" name="category" class="form-control" placeholder="Category">
                        </div>

                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>

                    </form>
                </p>

                <a href="{{ route('home') }}" class="card-link">Dashboard</a>
              </div>
            </div>


          </div>
          <!-- /.col-md-6 -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


@endsection

