@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
                <div class="pull-left">
                    <h2>Request Cv</h2>
                </div>
                {{-- <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('cvs.create') }}"> Create New </a>
                </div> --}}
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>email</th>
                <th>name</th>
                <th>phone</th>
                <th>social</th>
                <th>yearexp</th>
                <th>exp</th>
                <th>price</th>

                <th width="280px">Action</th>
            </tr>
            @foreach ($cvs as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->social }}</td>
                <td>{{ $product->yearexp }}</td>
                <td>{{ $product->exp }}</td>
                <td>{{ $product->price }}</td>
                {{-- <td>{{ $product->image }}</td> --}}
                {{-- <td><img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="img-thumbnail" width="75" /></td> --}}
                <td>
                    <form action="{{ route('cvs.destroy',$product->id) }}" method="POST">

                        {{-- <a class="btn btn-info" href="{{ route('cvs.show',$product->id) }}">Show</a> --}}

                        <a class="btn btn-primary" href="{{ URL::to('/') }}/images/{{ $product->image }}">Show cv</a>
                        {{-- <a class="btn btn-primary" href="{{ route('cvs.edit',$product->id) }}">Show cv</a> --}}
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>





        <!-- /.row -->
      </div>
      {{-- {!! $cvs->links() !!}<!-- /.container-fluid --> --}}
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



















@endsection
