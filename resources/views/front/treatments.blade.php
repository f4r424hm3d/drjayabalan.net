@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Treatments</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Treatments</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Treatments Area -->
  <section class="blog-area homep2 pt-110 pb-80">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Male Infertility Management</h3>
              <a class="blog-btn" href="male-infertility-management.html">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Female Infertility Management</h3>
              <a class="blog-btn" href="female-infertility-management.html">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Intrauterine Insemination</h3>
              <a class="blog-btn" href="intrauterine-insemination.html">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">In Vitro Fertilization</h3>
              <a class="blog-btn" href="in-vitro-fertilization.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Obstetrics And Gynaecology</h3>
              <a class="blog-btn" href="obstetrics-and-gynaecology.html">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Gynae Surgeries</h3>
              <a class="blog-btn" href="gynae-surgeries.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Sexualy Dysfunction Therapy</h3>
              <a class="blog-btn" href="sexualy-dysfunction-therapy.html">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/best1.png" alt="treatment"></div>
            <div class="content">
              <h3 class="mb-2">Birth Control</h3>
              <a class="blog-btn" href="birth-control.html">Read more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Treatments Area -->
@endsection
