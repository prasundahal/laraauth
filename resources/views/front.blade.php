
@php
$settings = DB::table('settings')->first();
$banners = DB::table('banners')->first();

@endphp
@extends('layouts.front')

@section('content')

  <!-- ======= Header ======= -->

  @include('nav')
  <!-- ======= Hero Section ======= -->
  @include('hero')

  <main id="main">

    <!-- ======= About Us Section ======= -->
    @include('about')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>We protect your data and provide safe service for yoyr business at every point.We can deal with any kind of problem related to software Hardware and other technology issue that you are faing right now</p>
        </div>


        @foreach($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="{{$service->icon}}"></i></div>
              <h4><a href="">{{$service->name}}</a></h4>
              <p>{{$service->about}}</p>
            </div>
          </div>

          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Contact Us for more details</h3>
            <p> We respect you for visiting our page .Please kindly fill this form to get an appoitment with us</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ route('addcv') }}">Add now</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Digital Markting</h4>
              <p>We deal with Digital marketing</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Software Production</h4>
              <p>Any Kind of software can be produced in our lab with our skilled devloper</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Modification/Maintainance</h4>
              <p>W can modify your existing software at the best way possible as well as we can maintain your application</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Hardware solution</h4>
              <p>We have an expert on hardware solution.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");'></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Clients Section ======= -->

    @include('client')
    <!-- ======= Counts Section ======= -->
    @include('counter')

    <!-- ======= Faq Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Having Problem?
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">How can i add my Cv? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Just Visit   <a class="cta-btn align-middle" href="{{ route('addcv') }}">Add now</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">What Product Do we sell ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      We deal With all kind of softwares  . so far we have crated ,Ecommerce,Job Portal,Singe page pplication,News portal,construction websites,School Management System,Hospital Management System,office management system, different type  portals and many other Application
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">What are the fetures We are getting from your company <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Full Security of your data and the confindencial information
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End Faq Section -->

    <!-- ======= Contact Section ======= -->
    @include('contact')
  </main><!-- End #main -->


  @endsection
