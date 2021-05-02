@extends('cvs.layout')

@section('content')

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

{{-- <form action="{{ route('cvs.store') }}" enctype="multipart/form-data" method="POST">
    @csrf --}}

     {{-- <div class="row">
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
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- form card login -->
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Add Your Details</h3>
                </div>
                <div class="card-body" style="padding: 1.25rem">
                    <form action="{{ route('cvs.store') }}" enctype="multipart/form-data" method="POST" autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                        @csrf
                            <div class="form-group">
                                <label for="Username">Username</label> 
                                <input type="text" class="form-control" name="Username" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email</label> 
                                <input type="text" class="form-control" name="Email"  placeholder="Email">
                            </div>
                        
                            <div class="form-group">
                                <label for="Phone">Phone</label> 
                                <input type="number" class="form-control" name="Phone"  placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="Social">Social</label><br/>
                                <select name="social" class="form-select form-select-lg mb-3">
                                    <option disabled="disabled" selected="selected">WHERE ARE U?</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                             
                            </div>

                        
                            <div class="form-group">
                                <label for="Experience">Experience</label> 
                                <input type="text" class="form-control" name="Experience" placeholder="Experience">
                            </div>

                        
                            <div class="form-group">
                                <label for="Price">Price</label> 
                                <input type="text" name="Price" class="form-control" placeholder="price">
                            </div>

                        
                            <div class="form-group">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile">                                  
                            </div>
                            
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div><!--/card-block-->
            </div><!-- /form card login -->
        </div>
    </div>

@endsection
