@extends('cvs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Your Banner</h2>
        </div>
        <div class="pull-right">
            {{-- <a class="btn btn-primary" href="{{ route('cvs.index') }}"> Back</a> --}}
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('banners.store') }}" enctype="multipart/form-data" method="POST">
    @csrf

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heading 1:</strong>
                <input type="text" name="heading" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heading 2</strong>
                <input type="text" name="subheading" class="form-control" placeholder="h2">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
