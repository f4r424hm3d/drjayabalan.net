@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Hero Slider -->
  <section class="hero-slider-area mt--2">
    <div class="hero-slider-full owl-carousel">

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('web/') }}/assets/img/slider/1.jpg');">
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap3 rotateme" src="{{ url('web/') }}/assets/img/shap/light.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="hero-caption">
                <h5>Dr. Jayabalan Official Website</h5>
                <h2>We care - A Journey from<br>Womanhood to Motherhood</h2>
                <p>We give you a reason to celebrate Motherhood lifelong!</p>
                <a class="button-1" href="{{ url('/appointment') }}">Make Appointment <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-slider-item h-slider d-flex align-items-center"
        style="background-image: url('{{ url('web/') }}/assets/img/slider/2.jpg');">
        <div class="shap-img">
          <img class="shap1 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap5.png" alt="shap">
          <img class="shap4 heartbeat" src="{{ url('web/') }}/assets/img/shap/shap2.png" alt="shap">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="hero-caption">
                <h5>Dr. Jayabalan Official Website</h5>
                <h2>We care - A Journey from<br>Womanhood to Motherhood</h2>
                <p>We give you a reason to celebrate Motherhood lifelong!</p>
                <a class="button-1" href="{{ url('/appointment') }}">Make Appointment <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero Slider -->

  <!-- Start About Area -->
  <section class="about-area pt-110 pb-110">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6">
          <div class="helpline-image"><img class="homeabout-main" src="{{ url('web/') }}/assets/img/about2.png"
              alt="About Image">
            <div class="homeabout-shape1">
              <h2>1.5K+</h2>
              <p>Visitors</p>
            </div>
            <div class="homeabout-shape2"><img class="heartbeat" src="{{ url('web/') }}/assets/img/shap/shap5.png"
                alt="Shape">
            </div>
            <div class="homeabout-shape3"><img src="{{ url('web/') }}/assets/img/shap/shap3.png" alt="Shape"> </div>
            <div class="homeabout-shape4"><img src="{{ url('web/') }}/assets/img/shap/helpline-shape2.png"
                alt="Shape"> </div>
            <div class="homeabout-shape5"><img class="shap-bounce"
                src="{{ url('web/') }}/assets/img/shap/helpline-shap.png" alt="Shape">
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="about-content">
            <div class="section-title">
              <h3>20 years experience</h3>
              <h2>Dream Of Possibilities | Dr. Jaya Balan</h2>
              <p>Having a baby has been a dream of every married women who wishes to have a complete family. Dr.Jaya
                Balan Valliappan, an experienced Senior Obstetrician and Gynaecologist, who is also a Fertility
                Specialist well known among the locals has been passionate and persistent in making this dreams of
                theirs come true.</p>
              <p>Being internationally trained in the field of Reproductive Medicine, Dr,Jaya Balan Valliappan has been
                always working around the clock to provide the best mode of treatment for his patients that results in
                high success rates.</p>
              <div class="button-area-about-footer mt-15">
                <a class="button-1 mr-10" href="{{ url('/about-us') }}">About More <i
                    class="fa-solid fa-arrow-right"></i></a>
                <a href="#"><i class="fa-solid fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Area -->

  <section class="team-section-area pt-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title mb-50">
            <h3>Our Services</h3>
            <h2>Our Fertility Treatment and Services</h2>
            <p>Our practical approach towards your condition and commitment to providing the best service and care with
              utmost sincerity and untiring efforts from our side makes Dr. Jaya Balan the best IVF clinic in Malaysia.
              Our labs are well equipped using the latest techniques. We believe in evidence-based treatment and
              transparency in all interactions with patients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Section -->
  <section class="what-we-best-area section-bg">
    <div class="what-we-best-img"><img src="{{ url('web/') }}/assets/img/best1.png" alt="best-img"> </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="what-we-best-content">
            <div class="section-title">
              <h2 class="pb-10">Artificial Reproductive Technique (ART)</h2>
              <p>Intrauterine Insemination (IUI) is a fertility treatment that involves placing sperm inside a woman’s
                uterus to facilitate fertilization.</p>
              <p>IVF stands for in vitro fertilization. It’s one of the more widely known types of assisted reproductive
                technology (ART). IVF works by using a combination of medicines and surgical procedures to help sperm
                fertilize an egg, and help the fertilized egg implant in your uterus.</p>
            </div>
            <div class="button-area-about-footer mt-15">
              <a class="button-1 mr-10" href="https://www.drjayabalan.net/male-infertility-management">Read More <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-area homep2 pt-40 pb-30">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5 mb-10">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/InVitroFertilization.jpg" alt="img">
            </div>
            <div class="content">
              <h3 class="mb-0">In Vitro Fertilization</h3>
              <p class="mb-15">IVF works by removing eggs from a woman's body. The eggs are then mixed with sperm to
                make embryos. The embryos are then put back in the woman's body.</p>
              <a class="button-1" href="https://www.drjayabalan.net/in-vitro-fertilization">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-5 mb-30">
          <div class="blog-single-item">
            <div class="thumbnail"><img src="{{ url('web/') }}/assets/img/FemaleInfertility.jpg" alt="img">
            </div>
            <div class="content">
              <h3 class="mb-0">Female Infertility</h3>
              <p class="mb-15">Female infertility means not being able to get pregnant after at least one year of
                trying (or 6 months if the woman is over age 35). If a woman keeps having</p>
              <a class="button-1" href="https://www.drjayabalan.net/female-infertility-management">Read more <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Section -->
  <section class="what-we-best-area section-bg">
    <div class="what-we-best-img"><img src="{{ url('web/') }}/assets/img/ObstetricsGynaecologyServices.jpg"
        alt="best-img"> </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="what-we-best-content">
            <div class="section-title">
              <h2 class="pb-10">Obstetrics & Gynaecology Services</h2>
              <p>Obstetrics and Gynaecology specialty deals with the female health involving clinical prevention and
                management of diseases, and to provide optimum care to pregnant women to the menopausal age. Obstetrics
                provides an opportunity for a holistic approach in managing the women’s partner and the unborn fetus,
                antenatal diagnosis, and intervention.</p>
            </div>
            <div class="button-area-about-footer mt-15">
              <a class="button-1 mr-10" href="https://www.drjayabalan.net/obstetrics-and-gynaecology">Read More <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Our Journey Area -->
  <section class="journey-area pt-110 pb-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6">
          <div class="helpline-image"><img src="{{ url('web/') }}/assets/img/dr-jaya-balan.png"
              alt="Helpline Image1">
            <div class="helpline-shape"><img class="shap-bounce"
                src="{{ url('web/') }}/assets/img/shap/helpline-shap.png" alt="Shape"></div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6">
          <div class="about-content">
            <div class="section-title">
              <h2>About Dr. Jaya Balan</h2>
              <p>As a medical practioner, overcoming patient’s concerns gives me a great sense of job satisfaction which
                at times can be challenging. Here, my team at Pantai Hospital Ipoh anticipate these challenges, and we
                are here to assist you in your journey towards completing your family. Our patients will experience a
                world that converts their imagination to reality. The most fulfilling part of our service is to see the
                joy and seeing our patients satisfied with the service we provided. Once again, we assure that seeking
                professional help to have a complete family is something common. We are here to help you dream the
                possibilities.</p>
              <div class="button-area-about-footer mt-15">
                <a class="button-1 mr-10" href="{{ url('/about-us') }}">View Profile <i
                    class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Journey Area -->
  @if ($testimonials->count() > 0)
    <!-- Start Testimonial Area -->
    <section class="testimonial-area pt-110 pb-120">
      <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center mb-20">
          <h3>Our Testimonials</h3>
          <h2>What clients Say?</h2>
        </div>
        <div class="all-testimonial owl-carousel owl-theme">

          @foreach ($testimonials as $row)
            <div class="single-testimonial">
              <div class="testimonial-top">
                <div class="testimonial-img"><img src="{{ testimonialIcon($row->image_path) }}" alt="Client">
                </div>
                <div class="testimonial-text">
                  <h5>{{ $row->name }}</h5>
                  <span>{{ $row->designation }}</span>
                </div>
              </div>
              <p>{{ $row->review }}</p>
            </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- End Testimonial Area -->
  @endif
  @if ($blogs->count() > 0)
    <!-- Start Blog Area -->
    <section class="blog-area homep2 pt-110 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mb-50">
            <div class="section-title">
              <h3>Our Blogs</h3>
              <h2 class="mb-0">Latest News & Blogs</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($blogs as $row)
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
              <div class="blog-single-item">
                <div class="thumbnail"><img src="{{ asset($row->thumbnail_path) }}" alt="blog"></div>
                <div class="content">
                  <div class="auth"><span>{{ $row->getCategory->category_name }}</span>
                    <span>{{ getFormattedDate($row->created_at, 'd M, Y') }}</span>
                  </div>
                  <h3>{{ $row->title }}</h3>
                  <a class="blog-btn" href="{{ url($row->slug) }}">Read more <i
                      class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          @endforeach

        </div>

        <div class="button-area-about-footer mt-15">
          <a class="button-1 mr-10" href="{{ url('/news') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>

      </div>
    </section>
    <!-- End Blog Area -->
  @endif
@endsection
