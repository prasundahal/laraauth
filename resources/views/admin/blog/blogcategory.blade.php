
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
                <h5 class="card-title">Category</h5>
                <span class="pull-right">
                    <a href="{{ route('addblogcategory') }}" class="btn btn-sm btn-primary"> <i
                            class="fa fa-plus"></i> Add New</a>
                    </span>
                <p class="card-text">
                    <table id="example1" class="table table-hover">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Category</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogcategories as $blogcategory)
                            <tr>
                                <td scope="row">{{ $blogcategory->id }}</td>
                                <td>{{ $blogcategory->category }}</td>
                                <td><a href="{{ route('editcategory',$blogcategory->id )}}"><i class="fa fa-edit"></i></a>
                                    &nbsp

                                    <form method="post" id="delete-form-{{ $blogcategory->id }}"
                                          action="{{ route('deleteblogcategory',$blogcategory->id) }}"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>
                                    <a onclick="if(confirm('Are you sure to delete this data?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $blogcategory->id }}').submit();}
                                        else{event.preventDefault();}">
                                        <i class="fa fa-trash-o"></i></a>
                                </td>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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




