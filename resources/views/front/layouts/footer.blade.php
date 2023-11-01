  @php
    use App\Models\Treatment;
    $footerTreat = Treatment::limit(8)->get();
  @endphp
  <!-- Start Footer Area -->
  <footer class="footer">
    <div class="footer-top pt-70 pb-50" style="background-image: url('{{ url('/web/') }}/assets/img/footer-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="footer-widegts-single">
              <h3 class="title">Dr. Jaya Balan Gynaecology & Fertility Clinic</h3>
              <p class="mb-1">Message to all Pregnant Woman By</p>
              <p class="text-white mb-2"><em>“Motherhood is a delightful journey for women. It shouldn’t be a cause for
                  sacrifice”</em></p>
              <ul class="contact-info">
                <li><i class="fa-solid fa-phone"></i><a href="tel:+60055405665">+60-05-5405 665</a></li>
                <li><i class="fa-solid fa-envelope"></i><a
                    href="mailto:jayabalanlab@gmail.com">jayabalanlab@gmail.com</a></li>
              </ul>
              <div class="footer-social mt-30">
                <span><a href="https://www.facebook.com/drvjbalan06/"><i class="fa-brands fa-facebook"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-widegts-single">
              <h3 class="title">Treatments</h3>
              <ul>
                @foreach ($footerTreat as $row)
                  <li><a href="{{ url($row->treatment_slug) }}">{{ $row->treatment_name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-widegts-single">
              <h3 class="title">quick links</h3>
              <ul>
                <li><a href="{{ url('/about-us') }}">About Doctor</a></li>
                <li><a href="{{ url('/treatments') }}">Treatments</a></li>
                <li><a href="{{ url('/news') }}">News & Blogs</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/faq') }}">Frequently Asked Questions</a></li>
                <li><a href="{{ url('/appointment') }}">Make Appointment</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-widegts-single">
              <h3 class="title">contact info</h3>
              <img src="{{ url('web/') }}/assets/img/panti-hospital-logo.jpg" alt="blog" class="mb-10">
              <ul class="contact-info">
                <li><i class="fa-solid fa-location-dot"></i> <span>Suite 302-303, Hospital Pantai Ipoh, 126, Jalan
                    Tambun, Taman Ipoh, 31400, Ipoh, Perak Darul Ridzuan, Malaysia.</span> </li>
                <li>
                  <i class="fa fa-clock"></i>
                  <span>
                    Mon-: 9:00Am – 5:00Pm<br>
                    Tue-: 9:00Am – 5:00Pm<br>
                    Wed-: 5:00Pm – 9:00Pm<br>
                    Thu-: 9:00Am – 5:00Pm<br>
                    Fri-: 9:00Am – 5:00Pm<br>
                    Sat-: 9:00Am – 1:00Pm<br>
                    Sunday-: Holiday
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom pt-25 pb-25">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="copyright-text">
              <p>Copyright by Dr Jaya Balan. All rights reserved in 2023.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Area -->
  <div class="scroll-area"> <i class="bi bi-arrow-up"></i> </div>
  <!-- Js File -->
  <script src="{{ url('web/') }}/assets/js/modernizr.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery-3.6.3.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/popper.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/wow.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/owl.carousel.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery.nice-select.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/mixitup.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('web/') }}/assets/js/ajax-form.js"></script>
  <script src="{{ url('web/') }}/assets/js/mobile-menu.js"></script>
  <script src="{{ url('web/') }}/assets/js/script.js"></script>
  </body>

  </html>
