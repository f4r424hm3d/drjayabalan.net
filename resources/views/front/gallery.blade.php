@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70" style="background-image: url('assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Gallery</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>About Us</li>
        <li>Gallery</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <div class="page-section-full pt-70 pb-50">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery1.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery1.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery2.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery2.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery3.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery3.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery4.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery4.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery5.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery5.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/gallery/gallery6.png" alt="img">
            <div class="overly-icon">
              <a href="assets/img/gallery/gallery6.png"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
