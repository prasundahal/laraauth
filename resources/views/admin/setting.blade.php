
@extends('layouts.admin')
@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
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
                <h5 class="card-title">Setting</h5>

                <p class="card-text">
                    <form action="{{ route('updateSettings') }}" class="form-image-upload" method="POST"
                    enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <strong>Company Name</strong>
                      <input type="text" name="company_name" class="form-control"
                             value="{{$settings->company_name}}" placeholder="Name">
                  </div>
                  <div class="form-group">
                      <strong>Location</strong>
                      <input type="text" name="company_location" value="{{$settings->company_location}}"
                             class="form-control"
                             placeholder="Company Address">
                  </div>
                  <div class="form-group">
                      <strong>Email</strong>
                      <input type="text" name="email" value="{{$settings->email}}" class="form-control"
                             placeholder="Company Email">
                  </div>
                  <div class="form-group">
                      <strong>Phone Number</strong>
                      <input type="text" name="phone_number" value="{{$settings->phone_number}}"
                             class="form-control"
                             placeholder="Company Phone Number">
                  </div>
                  <div class="form-group">
                      <strong>Client</strong>
                      <input type="text" name="client" value="{{$settings->client}}"
                             class="form-control"
                             placeholder="Client">
                  </div>
                  <div class="form-group">
                      <strong>Years Completed</strong>
                      <input type="text" name="years" value="{{$settings->years}}"
                             class="form-control"
                             placeholder="Years">
                  </div>
                  <div class="form-group">
                      <strong>Type of Service</strong>
                      <input type="text" name="types" value="{{$settings->types}}"
                             class="form-control"
                             placeholder="Service Type">
                  </div>

                  <div class="form-group">
                      <strong>Facebook</strong>
                      <input type="text" name="facebook" value="{{$settings->facebook}}" class="form-control"
                             placeholder="FacebookURL">
                  </div>
                  <div class="form-group">
                      <strong>Twitter</strong>
                      <input type="text" name="twitter" value="{{$settings->twitter}}" class="form-control"
                             placeholder="TwitterURL">
                  </div>
                  <div class="form-group">
                      <strong>LinkedIn</strong>
                      <input type="text" name="linkedin" value="{{$settings->linkedin}}" class="form-control"
                             placeholder="LinkedInURL">
                  </div>
                  <div class="form-group">
                      <strong>Youtube</strong>
                      <input type="text" name="youtube" value="{{$settings->youtube}}" class="form-control"
                             placeholder="YoutubeURL">
                  </div>
                  <div class="form-group">
                      <strong>Instagram</strong>
                      <input type="text" name="instagram" value="{{$settings->instagram}}"
                             class="form-control"
                             placeholder="InstagramURL">
                  </div>
                  <div class="form-group">
                      <strong>Android</strong>
                      <input type="text" name="android" value="{{$settings->android}}"
                             class="form-control"
                             placeholder="androidApp url">
                  </div>
                  <div class="form-group">
                      <strong>ios</strong>
                      <input type="text" name="ios" value="{{$settings->ios}}"
                             class="form-control"
                             placeholder="ios">
                  </div>
                  <div class="form-group">
                      <strong>driver</strong>
                      <input type="text" name="driver" value="{{$settings->driver}}"
                             class="form-control"
                             placeholder="driver">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-success">Save</button>
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


