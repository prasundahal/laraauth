<footer id="footer">
    <div class="container">
      <h3>{{$settings->company_name}}</h3>
      <p>{{$settings->about}},{{$settings->company_location}},{{$settings->phone_number}},{{$settings->email}}</p>
      <div class="social-links">
        <a href="{{$settings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$settings->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$settings->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>

        <a href="{{$settings->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>{{$settings->company_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        Designed by <a href="#">{{$settings->company_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->
