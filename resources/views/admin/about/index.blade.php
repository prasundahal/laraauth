@extends('admin.layouts.adminmain')
@section('admincontent')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Company Detail</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Company Image
                                </th>
                                <th>
                                    About
                                </th>
                                <th>
                                    Our Vision
                                </th>
                                <th>
                                    Our Mission
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{URL::to($settings->company_image)}}" class="img-thumbnail">
                                    </td>
                                    <td>
                                        {!! $settings->about !!}
                                    </td>
                                    <td>
                                        {!! $settings->company_vision !!}
                                    </td>
                                    <td>
                                        {!! $settings->company_mission !!}
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/editAbout') }}" class="fa-btn">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
