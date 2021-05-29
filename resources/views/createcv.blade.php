


@php
$settings = DB::table('settings')->first();
$banners = DB::table('banners')->first();

@endphp

@extends('layouts.in')
@section('content')

    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Add Your Details</h2>
            <p>{{$settings->about}}</p>
          </div>
        </div>

        <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

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
          <div class="row mt-5">

            <div class="col-lg-8 mt-5 mt-lg-0">
                <form action="{{ route('frontcv.store') }}" enctype="multipart/form-data" method="POST" autocomplete="on" class="form" id="formLogin" name="formLogin" role="form">
                    @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 form-group">
                      <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="form-control" id="select" name="social" >
                            <option value="" disabled selected hidden>Where did you find us?</option>
                            <option>Fb</option>
                            <option>Ins</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 form-group">
                      <input type="text" name="yearexp" class="form-control" id="experience" placeholder="Your work experience" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="price" class="form-control" id="price" placeholder="Your project Pay" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="exp" class="form-control" id="exp" data-default="add aasd tag" placeholder="Your asd" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="file" class="form-control" name="image" id="file" placeholder="Your Resume" required>
                </div>
                {{-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> --}}
                <div class="text-left" style="margin-top:15px "><button type="submit" class="btn btn-success">Submit</button></div>
              </form>
            </div>
          </div>

        </div>
      </section><!-- End Contact Section -->


      <script type="text/javascript">
        $('#exp').tagsInput({
          defaultText: 'Technologies you Know',
          width: ' 100% '
        });
      </script>



@endsection



