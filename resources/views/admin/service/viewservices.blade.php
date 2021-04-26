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
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All Services</h5>
                <span class="pull-right">
                    <a href="{{ route('addservice') }}" class="btn btn-sm btn-primary"> <i
                            class="fa fa-plus"></i> Add New</a>
                    </span>

                <p class="card-text">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Link</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($services))
                            @foreach($services as $key=>$service)
                                <tr>
                                    <td scope="row">{{ $key+1 }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ ($service->link)}}</td>

                                    {{-- <td><img alt="" class="rounded" height="50px" src="{{ URL::to($market->image) }}"></td> --}}
                                    <td><a href="{{ route('editservice',$service->id )}}"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <form method="post" id="delete-form-{{ $service->id  }}" action="{{ route('deleteservice',$service->id ) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                        <a onclick="if(confirm('Are you sure to delete this data?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $service->id  }}').submit();}
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

