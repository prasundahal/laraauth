@extends('cvs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Your Details</h2>
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

<form action="{{ route('cvs.store') }}" enctype="multipart/form-data" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="number" name="phone" class="form-control" placeholder="phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>social:</strong>
                <select name="social">
                    <option disabled="disabled" selected="selected">WHERE ARE U?</option>
                    <option>Fb</option>
                    <option>Ins</option>
                    <option>Other</option>
                </select>
                {{-- <input type="text" name="social" class="form-control" placeholder="social"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>yearexp:</strong>
                <select name="yearexp">
                    <option disabled="disabled" selected="selected">Expwreince year</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>exp:</strong>
                <input type="text" name="exp" class="form-control" placeholder="exp">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input type="text" name="price" class="form-control" placeholder="price">
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
