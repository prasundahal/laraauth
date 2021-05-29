<section id="hero" style="background: url({{ URL::to('/') }}/public/images/{{ $banners->image }}) class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>{{ $banners->heading }}</h1>
          <h2>{{ $banners->subheading }}</h2>
          {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}

          <a href="{{ route('addcv') }}" class="get-started-btn scrollto">Apply NOW  </a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
