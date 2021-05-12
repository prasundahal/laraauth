

@php
$settings = DB::table('settings')->first();
$banners = DB::table('banners')->first();

@endphp
@extends('layouts.front')

@section('content')

  <!-- ======= Header ======= -->

  @include('nav')
  <!-- ======= Hero Section ======= -->


  <main id="main">

    <section id="contact" class="contact">
        <div class="container">
    
          <div class="section-title">
            <h2>Add Your Details</h2>
            <p>{{$settings->about}}</p>
          </div>
        </div>
    
        <div class="container">
    
          <div class="row mt-5">
    
            <div class="col-lg-8 mt-5 mt-lg-0">
    
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                        <select class="form-control" id="select" >
                            <option value="" disabled selected hidden>Where did you find us?</option>
                            <option>Fb</option>
                            <option>Ins</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 form-group">
                      <input type="text" name="experience" class="form-control" id="experience" placeholder="Your work experience" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="price" class="form-control" id="price" placeholder="Your project Pay" required>
                    </div> 
                </div>
                <div class="form-group mt-3">
                    <input type="file" class="form-control" name="image" id="file" placeholder="Your Resume" required>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
    
        </div>
      </section><!-- End Contact Section -->
    


</main><!-- End #main -->


@endsection


{{-- 
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
                <input type="number" name=" " class="form-control" placeholder="phone">
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
                <input type="text" name="social" class="form-control" placeholder="social">
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

</form> --}}
