<section id="clients" class="clients">
    <div class="container">

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
        @foreach ($markets as $market )
        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo">
            <a href="{{ ($market->link) }}"> <img src="{{ URL::to($market->image) }}" class="img-fluid" alt=""></a>
            @endforeach

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->
