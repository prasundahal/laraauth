@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit About</h3>
                        <span class="pull-right">
							<a href="{{url('admin/about')}}" class="pull-right btn btn-back">
                                <i class="fa fa-reply">&nbsp;&nbsp;Go Back</i></a>
							</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <x-alert></x-alert>
                        <form action="{{ route('updateAbout') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <strong>Image</strong>
                                <input type="file" name="company_image" value="{{ $settings->company_image }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>About</strong>
                                <textarea class="form-control" name="about" rows="5">{{ $settings->about }}</textarea>
                            </div>
                            <div class="form-group">
                                <strong>Company Vision</strong>
                                <textarea class="form-control" name="company_vision" rows="5">{{ $settings->company_vision }}</textarea>
                            </div>
                            <div class="form-group">
                                <strong>Company Mission</strong>
                                <textarea class="form-control" name="company_mission" rows="5">{{ $settings->company_mission }}</textarea>
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
