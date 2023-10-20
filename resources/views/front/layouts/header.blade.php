<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  @stack('seo_meta_tag')
  @stack('head_schemas')
</head>

<body>

  <!-- Preloader -->
  {{-- <div id="preloader">
    <div class="preloader"> <span></span> <span></span> </div>
  </div> --}}

  <!-- Start Header Area -->
  <header class="header">
    <!-- Header Top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- Header Top Left -->
          <div class="col-lg-5">
            <div class="header-left">
              Helpline No <a href="tel:+60055405665"><strong>(+60)-055405665</strong></a>
              <span>/</span>
              <a href="mailto:jayabalanlab@gmail.com">jayabalanlab@gmail.com</a>
            </div>
          </div>

          <!-- Header Top Right -->
          <div class="col-lg-7">
            <div class="header-right text-right">
              <div class="social-icon"> <span>Suite 302-303, Hospital Pantai Ipoh, 126, Jalan Tambun Malaysia</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Header Bottom -->
    <div class="header-bottom sticky-header">
      <div class="container">
        <div class="row">
          <!-- Logo -->
          <div class="col-lg-3 col-sm-4 col-5 align-self-center">
            <div class="logo"> <a href="{{ url('/') }}"><img
                  src="{{ url('web/') }}/assets/img/dr-jaya-balan-logo.png" alt="Logo"></a>
            </div>
          </div>

          <div class="col-lg-9 col-sm-8 col-7 align-self-center">

            <!-- Header Bottom Right -->
            <div class="header-bottom-right">
              <div class="make-appointment-button mt-25"><a href="{{ url('/appointment') }}" class="button-2">Make
                  Appointment <i class="fa-solid fa-arrow-right-long"></i></a></div>
            </div>

            <!-- Menu -->
            <div class="menu">
              <nav>
                <ul>
                  <li> <a href="{{ url('/') }}">Home</a></li>
                  <li class="menu-item-has-children"><a href="#">About Us</a>
                    <ul>
                      <li><a href="{{ url('/about-us') }}">About Doctor</a></li>
                      <li class="menu-item-has-children"><a href="{{ url('/faq') }}">FAQ</a>
                        <ul>
                          <li><a href="{{ url('/faq') }}#Antenatal">Q &amp; A (Antenatal)</a></li>
                          <li><a href="{{ url('/faq') }}#Fertility">Q &amp; A (Fertility)</a></li>
                          <li><a href="{{ url('/faq') }}#Common">Commonly Ask Q &amp; A</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children"><a href="{{ url('/treatments') }}">Treatments</a>
                    <ul>
                      <li class="menu-item-has-children"><a href="#">Investigations &amp; Treatment</a>
                        <ul>
                          <li><a href="male-infertility-management.html">Male Infertility Management</a></li>
                          <li><a href="female-infertility-management.html">Female Infertility Management</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children"><a href="#">Artificial Reproductive Technique</a>
                        <ul>
                          <li><a href="intrauterine-insemination.html">Intrauterine Insemination</a></li>
                          <li><a href="in-vitro-fertilization.html">In Vitro Fertilization</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children"><a href="#">More Treatments</a>
                        <ul>
                          <li><a href="obstetrics-and-gynaecology.html">Obstetrics And Gynaecology</a></li>
                          <li><a href="gynae-surgeries.html">Gynae Surgeries</a></li>
                          <li><a href="sexualy-dysfunction-therapy.html">Sexualy Dysfunction Therapy</a></li>
                          <li><a href="birth-control.html">Birth Control</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
                  <li><a href="{{ url('/blog') }}">Blog</a></li>
                </ul>
              </nav>
            </div>

            <!-- Menu OPen -->
            <div class="canvas_open_full">
              <div class="canvas_open"> <a href="javascript:void(0)"><i class="bi bi-list"></i></a></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->

  <!-- Start Mobile Menu Area -->
  <div class="mobile-menu-area">
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay"> </div>
    <div class="offcanvas_menu">
      <div class="offcanvas_menu_wrapper">
        <div class="canvas_close"><a href="javascript:void(0)"><i class="bi bi-x-lg"></i></a> </div>
        <div class="mobile-logo"><a href="{{ url('/') }}"> <img
              src="{{ url('web/') }}/assets/img/dr-jaya-balan-logo.png" alt="logo">
          </a> </div>
        <div id="menu" class="text-left ">
          <ul class="offcanvas_main_menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="menu-item-has-children"><a href="#">About us</a>
              <ul class="sub-menu">
                <li><a href="{{ url('/about-us') }}">About Doctor</a></li>
                <li class="menu-item-has-children"><a href="{{ url('/faq') }}">FAQ</a>
                  <ul class="sub-menu">
                    <li><a href="{{ url('/faq') }}#Antenatal">Q &amp; A (Antenatal)</a></li>
                    <li><a href="{{ url('/faq') }}#Fertility">Q &amp; A (Fertility)</a></li>
                    <li><a href="{{ url('/faq') }}#Common">Commonly Ask Q &amp; A</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="{{ url('/treatments') }}">Treatments</a>
              <ul class="sub-menu">
                <li class="menu-item-has-children"><a href="#">Investigations &amp; Treatment</a>
                  <ul class="sub-menu">
                    <li><a href="male-infertility-management.html">Male Infertility Management</a></li>
                    <li><a href="female-infertility-management.html">Female Infertility Management</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Artificial Reproductive Technique</a>
                  <ul class="sub-menu">
                    <li><a href="intrauterine-insemination.html">Intrauterine Insemination</a></li>
                    <li><a href="in-vitro-fertilization.html">In Vitro Fertilization</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">More Treatments</a>
                  <ul class="sub-menu">
                    <li><a href="obstetrics-and-gynaecology.html">Obstetrics And Gynaecology</a></li>
                    <li><a href="gynae-surgeries.html">Gynae Surgeries</a></li>
                    <li><a href="sexualy-dysfunction-therapy.html">Sexualy Dysfunction Therapy</a></li>
                    <li><a href="birth-control.html">Birth Control</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/appointment') }}">Make Appointment</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile Menu Area -->
