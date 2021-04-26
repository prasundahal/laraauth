


@extends('layouts.admin')
@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h5 class="card-title">All Blog</h5>
                <span class="pull-right">
                    <a href="{{url('admin/addBlog')}}" class="btn btn-sm btn-primary"> <i
                            class="fa fa-plus"></i> Add New</a>
                    </span>
                <p class="card-text">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($blogs))
                                @foreach($blogs as $key=>$blog)
                                    <tr>
                                        <td scope="row">{{ $key+1 }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ substr($blog->post, 0,  500)}}...</td>
                                        <td><img alt="" class="rounded" height="50px" src="{{ URL::to($blog->image) }}"></td>
                                        <td><a href="{{ route('editblog',$blog->id )}}"><i class="fa fa-edit"></i></a>
                                            &nbsp;
                                            <form method="post" id="delete-form-{{ $blog->id  }}" action="{{ route('deleteblog',$blog->id ) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <a onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $blog->id  }}').submit();}
                                                else{event.preventDefault();}">
                                                <i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
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





