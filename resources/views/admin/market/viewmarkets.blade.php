@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting Page</li>
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
          <div class="col-lg-12 margin-tb">
              {{-- <div class="pull-left">
                  <h2>Setting Page</h2>
              </div> --}}
              <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('home') }}"> Dashboard </a>
              </div>
          </div>
      </div>

      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Blog Posts</h3>
                        <span class="pull-right">
							<a href="{{ route('addmarket') }}" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($markets))
                                @foreach($markets as $key=>$market)
                                    <tr>
                                        <td scope="row">{{ $key+1 }}</td>
                                        <td>{{ $market->name }}</td>
                                        <td>{{ ($market->link)}}</td>
                                        <td><img alt="" class="rounded" height="50px" src="{{ URL::to($market->image) }}"></td>
                                        <td><a href="{{ route('editmarket',$market->id )}}"><i class="fa fa-edit"></i></a>
                                            &nbsp;
                                            <form method="post" id="delete-form-{{ $market->id  }}" action="{{ route('deletemarket',$market->id ) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <a onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $market->id  }}').submit();}
                                                else{event.preventDefault();}">
                                                <i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

