@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>News & Blog Detail</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>News & Blog</li>
        <li>News & Blog Detail</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Blog Details Section -->
  <section class="blog-details-section pt-120 pb-90">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 mb-30">
          <div class="blog-details-full">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/blog/blog1.png" alt="Blog Details Image"></div>
            <div class="b-auth-section mt-30 mb-20">
              <div class="row">
                <div class="col-md-6 order-md-first order-last">
                  <div class="left-a">
                    <span class="img"><img src="{{ url('web/') }}/assets/img/auth-img.png" alt="auth"></span>
                    <span>by <a href="{{ url('/about-us') }}">Dr Jay Balan</a></span>
                    <span>22 Aug 2023</span>
                  </div>
                </div>
                <div class="col-md-6 align-self-center text-right">
                  <div class="blog-share">
                    <span><a href="#"><i class="fa-solid fa-link"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-linkedin"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Content -->
            <div class="content">
              <h2>Migration Pellentesque consequat in augue sedus sodales Top Standard size of business.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis
                justo sagittis et. Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper leo
                nec justo aliquam venenatis. Aliquam vitae lorem sed orci vulputate porta. Vestibulum ut elit eget arcu
                tincidunt sollicitudin quis sed augue. Aenean nibh nunc, elementum a dolor vel, vestibulum commodo dui.
                Donec id felis a ipsum molestie tincidunt. Nunc ullamcorper quam nunc, eget laoreet dui pharetra eget.
                Aenean viverra interdum condimentum. Cras mollis, arcu vel fermentum auctor.</p>
              <p>Phasellus ac consequat turpis, sit amet fermentum nulla. Donec dignissim augue nunc. Praesent bibendum
                erat ac lectus molestie lobortis. Curabitur ultrices justo ac leo facilisis incidunt.Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis justo sagittis et.
                Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper.</p>
              <p class="quote">
                <img src="{{ url('web/') }}/assets/img/quote2.png" alt="quote">
                Phasellus ac consequat turpis, sit amet fermentum nulla. Donec dignissim augue nunc. Praesent bibendum
                erat ac lectus molestie lobortis. Curabitur ultrices justo ac leo facilisis tincidunt.Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Ut venenatis sagittis tortor, in convallis justo sagittis et.
                Nunc placerat risus sem, vitae dictum libero laoreet sit amet. Suspendisse semper.
              </p>
              <p>Sed nec sapien eu nibh porta fringilla. Aenean in lectus id tellus tempus rutrum vitae a
                elit. Nulla sit amet interdum ligula. Duis bibendum porttitor tempus. Morbi nisi nisl, sagittis in enim
                at, tempus convallis magna. Nam malesuada risus non congue viverra. Nullam ultrices massa orci, in
                eleifend diam fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis sagittis
                tortor, in convallis justo sagittis et. Nunc placerat risus sem, vitae dictum libero laoreet sit amet.
                Suspendisse semper leo nec justo aliquam venenatis.</p>

              <div class="blog-tags mt-20 pt-30 mb-40">
                <span>Tag Here</span>
                <a href="#">Tag 1</a>
                <a href="#">Tag 2</a>
                <a href="#">Tag 3</a>
              </div>
            </div>
            <!-- Author Content -->
            <div class="blog-author-section mt-20 mb-60">
              <div class="thumb"><img src="{{ url('web/') }}/assets/img/b-auth.png" alt="img"></div>
              <div class="content-auth">
                <div class="auth-header">
                  <h4><a href="#">Dr Jay Balan</a></h4>
                  <div class="a-social-icon">
                    <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-instagram"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-dribbble"></i></a></span>
                    <span><a href="#"><i class="fa-brands fa-behance"></i></a></span>
                  </div>
                </div>
                <p>Fusce condimentum enim vestibulum libero gravida, ut accumsan quam bibendum. Curabitur gravida
                  faucibus est sit amet cursus. Duis accumsan vel arcu pretium viverra.</p>
              </div>
            </div>

            <!-- Next Prev -->
            <div class="singlepage-navigation border-0">
              <div class="row">
                <div class="col-sm-6">
                  <a href="#">
                    <div class="singlepage-navi-icon"><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div class="singlepage-navi-text"><span>Prev Blog</span>
                      <h5>Blog Name Here</h5>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6">
                  <a class="float-right" href="#">
                    <div class="singlepage-navi-text"><span>Next Blog</span>
                      <h5>Blog Name Here</h5>
                    </div>
                    <div class="singlepage-navi-icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                  </a>
                </div>
              </div>
            </div>

            <!-- Related Post Section -->
            <div class="related-blog-section mt-120 mb-0">
              <div class="row">
                <div class="col-lg-12 mb-20">
                  <div class="section-title">
                    <h2>Related Blogs</h2>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Single -->
                <div class="col-lg-6 col-md-6 mb-30">
                  <div class="blog-single-item">
                    <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/blog/blog2.png" alt="blog"></div>
                    <div class="content">
                      <div class="auth">
                        <span>by <a href="{{ url('/about-us') }}">Dr Jay Balan</a></span>
                        <span>22 Aug 2023</span>
                      </div>
                      <h3>Fusce tincidunt commodo sapien, quis porttitoripsum fringilla et.</h3>
                      <a class="button-1" href="blog-detail.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-30">
                  <div class="blog-single-item">
                    <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/blog/blog3.png" alt="blog"></div>
                    <div class="content">
                      <div class="auth">
                        <span>by <a href="{{ url('/about-us') }}">Dr Jay Balan</a></span>
                        <span>22 Aug 2023</span>
                      </div>
                      <h3>Fusce tincidunt commodo sapien, quis porttitoripsum fringilla et.</h3>
                      <a class="button-1" href="blog-detail.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- End Cooment Section -->
          </div>
        </div>

        <!-- Sidebar Widgets -->
        <div class="col-lg-4 mb-30">
          <!-- Sidebar Widgets -->
          <div class="sidebar-widgets">

            <div class="sidebar-single-widget socialicon-widget mb-30">
              <h5 class="pb-20">Trending Blogs</h5>
              <div class="sidebar-blog-widgets">

                <div class="single-item">
                  <div class="thumb"><a href="blog-detail.html"><img
                        src="{{ url('web/') }}/assets/img/blog/w-1.png" alt="blog"></a></div>
                  <div class="content">
                    <span>by <a href="{{ url('/about-us') }}">Dr Jaya Balan</a></span>
                    <h4><a href="blog-detail.html">Fusce tincidunt commodo sapien, quis portitor.</a>
                    </h4>
                  </div>
                </div>

                <div class="single-item">
                  <div class="thumb"><a href="blog-detail.html"><img
                        src="{{ url('web/') }}/assets/img/blog/w-2.png" alt="blog"></a></div>
                  <div class="content">
                    <span>by <a href="{{ url('/about-us') }}">Dr Jaya Balan</a></span>
                    <h4><a href="blog-detail.html">Fusce tincidunt commodo sapien, quis portitor.</a>
                    </h4>
                  </div>
                </div>

                <div class="single-item">
                  <div class="thumb"><a href="blog-detail.html"><img
                        src="{{ url('web/') }}/assets/img/blog/w-3.png" alt="blog"></a></div>
                  <div class="content">
                    <span>by <a href="{{ url('/about-us') }}">Dr Jaya Balan</a></span>
                    <h4><a href="blog-detail.html">Fusce tincidunt commodo sapien, quis portitor.</a>
                    </h4>
                  </div>
                </div>

                <div class="single-item">
                  <div class="thumb"><a href="blog-detail.html"><img
                        src="{{ url('web/') }}/assets/img/blog/w-4.png" alt="blog"></a></div>
                  <div class="content">
                    <span>by <a href="{{ url('/about-us') }}">Dr Jaya Balan</a></span>
                    <h4><a href="blog-detail.html">Fusce tincidunt commodo sapien, quis portitor.</a>
                    </h4>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar-single-widget widget-appointment mb-30">
              <h5 class="pb-20">Make an appointment</h5>
              <div class="get-appointment-form">
                <form action="#">

                  <div class="single-field">
                    <select name="depname" id="depname">
                      <option>Select Treatment</option>
                      <option value="">Male Infertility Management</option>
                      <option value="">Female Infertility Management</option>
                      <option value="">Intrauterine Insemination</option>
                      <option value="">In Vitro Fertilization</option>
                      <option value="">Obstetrics And Gynaecology</option>
                      <option value="">Gynae Surgeries</option>
                      <option value="">Sexualy Dysfunction Therapy</option>
                      <option value="">Birth Control</option>
                    </select>
                  </div>

                  <div class="single-field">
                    <select name="docname" id="docname">
                      <option>Select Doctor</option>
                      <option value="">Dr. Jaya Balan</option>
                    </select>
                  </div>

                  <div class="single-field">
                    <input type="text" placeholder="Your Name" name="yourname" id="yourname">
                  </div>

                  <div class="single-field">
                    <input type="text" placeholder="Phone No." name="yourphone" id="yourphone">
                  </div>

                  <div class="single-field">
                    <input type="email" placeholder="Email" name="yourphone" id="yourphone">
                  </div>

                  <div class="single-field">
                    <input type="date" placeholder="Date" name="yourphone" id="yourphone">
                  </div>

                  <div class="single-field">
                    <textarea name="yourmessage" placeholder="Your Message" id="yourmessage"></textarea>
                  </div>

                  <div class="align-self-end">
                    <div class="single-field pb-0">
                      <button class="button-1">Get Appointment <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="sidebar-single-widget category-widget mb-30">
              <h5 class="pb-10">Treatments</h5>
              <ul>
                <li><a href="male-infertility-management.html"><i class="fa-solid fa-caret-right"></i> Male
                    Infertility Management</a></li>
                <li><a href="female-infertility-management.html"><i class="fa-solid fa-caret-right"></i> Female
                    Infertility Management</a></li>
                <li><a href="intrauterine-insemination.html"><i class="fa-solid fa-caret-right"></i> Intrauterine
                    Insemination</a></li>
                <li><a href="in-vitro-fertilization.html"><i class="fa-solid fa-caret-right"></i> In Vitro
                    Fertilization</a></li>
                <li><a href="obstetrics-and-gynaecology.html"><i class="fa-solid fa-caret-right"></i> Obstetrics And
                    Gynaecology</a></li>
                <li><a href="gynae-surgeries.html"><i class="fa-solid fa-caret-right"></i> Gynae Surgeries</a></li>
                <li><a href="sexualy-dysfunction-therapy.html"><i class="fa-solid fa-caret-right"></i> Sexualy
                    Dysfunction Therapy</a></li>
                <li><a href="birth-control.html"><i class="fa-solid fa-caret-right"></i> Birth Control</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Details Section -->
@endsection
