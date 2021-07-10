<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>{{$settings->about}}</p>
      </div>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1733.7367214669514!2d85.3306309067967!3d27.698281271799573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a364bb5935%3A0xf40b4cf2c78cf48a!2sAnamnagar%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1622790448839!5m2!1sen!2snp%22%20width=%22800%22%20height=%22600%22%20" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="ri-map-pin-line"></i>
              <h4>Location:</h4>
              <p>{{$settings->company_location}}</p>
            </div>

            <div class="email">
              <i class="ri-mail-line"></i>
              <h4>Email:</h4>
              <p>{{$settings->email}}</p>
            </div>

            <div class="phone">
              <i class="ri-phone-line"></i>
              <h4>Call:</h4>
              <p>{{$settings->phone_number}}</p>
            </div>

          </div>

        </div>

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
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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
