@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70"
    style="background-image: url('{{ url('web/') }}/assets/img/breadcrumb.png')">
    <div class="container">
      <h2>About Doctor</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>About Us</li>
        <li>About Doctor</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Singlepage Area -->
  <section class="singlepage-area pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="teamdetails-left">
            <div class="te-thumb"><img src="{{ url('web/') }}/assets/img/dr-jaya-balan.jpg" alt="Doctor"></div>
            <div class="te-content">
              <h2 class="pt-25">Dr. Jaya Balan</h2>
              <span>Obstetrics And Gynaecology Specialist Malaysia</span>
              <ul class="icons">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
              </ul>
              <h5 class="pt-1">Specialist </h5>
              <p>Consultant, Women Health Obstetrics And Gynaecology Specialist Malaysia</p>
              <h5 class="pt-1">Time</h5>
              <p>Mon-: 9:00Am – 5:00Pm<br>
                Tue-: 9:00Am – 5:00Pm<br>
                Wed-: 5:00Pm – 9:00Pm<br>
                Thu-: 9:00Am – 5:00Pm<br>
                Fri-: 9:00Am – 5:00Pm<br>
                Sat-: 9:00Am – 1:00Pm<br>
                Sunday-: Holiday</p>
              <div class="helpline-number">
                <div class="number-icon"><img src="{{ url('web/') }}/assets/img/icon/phone.png" alt="Phone"></div>
                <div class="number-text">
                  <span>Phone Number</span>
                  <h3><a href="tel:+60055405665">(+60)-055405665</a></h3>
                </div>
              </div>
              <div class="helpline-number">
                <div class="number-icon">
                  <img src="{{ url('web/') }}/assets/img/icon/email.png" alt="Email">
                </div>
                <div class="number-text">
                  <span>Quick You Email!</span>
                  <h3><a href="mailto:jayabalanlab@gmail.com">jayabalanlab@gmail.com</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <!-- Singlepage Content -->
          <div class="singlepage-content teamdetails-right">
            <h3 class="mb-10">Dr. Jaya Balan Obstetrics And Gynaecology Specialist Malaysia</h3>
            <p>Dr. Jaya Balan is a renowned gynaecologist and fertility specialist with more than 20 years of experience
              in this field. He practices at Pantai Hospital Ipoh and he is also a Visiting Consultant at LPPKN
              (government clinic for fertility and family health) and Seri Manjung Specialist Clinic. Besides regular
              clinical practice, he is also into the academic field as an Adjunct Professor at Quest International
              University, Ipoh, Perak.</p>
            <p>Dr Jaya Balan pursued his undergraduate at Manipal Medical College, Manipal, Karnataka India and
              completed his postgraduate studies of Obstetrics and Gynaecology at University Malaya, Malaysia. Besides,
              he is sub-specialized in Reproductive Medicine. He completed his Fellowship Program in Basic and Advanced
              Assisted Reproductive Techniques at Rotunda Fertility Centre, at Mumbai, India, trained by Dr Gautham
              Allahdadia who is a renowned Fertility Specialist in India and Hospital University Kebangsaan Malaysia
              (HUKM), Malaysia. He did his fellowship training in Minimal Access Surgery (FMAS) at Laparoscopy Hospital,
              New Delhi, India, and completed Assisted Reproductive Technology Course at Reproductive Medicine Division,
              Faculty of Medicine, Chiang Mai, Thailand.</p>
            <p>Dr Jaya Balan has been with Pantai Hospital Ipoh since 2008 and has served in government hospitals around
              Malaysia prior to this. He has vast international and local publications in the field of gynaecology and
              fertility as well. Moreover, he has also presented papers and still actively participates in academic
              presentations. Furthermore, he regularly conducts national level fertility workshops.</p>
            <p>Throughout his practising period, Dr.Jaya Balan has organized various International, National and State
              level workshops, symposiums, courses and courses. He has been the Organizing Chairman for various events
              like First Basic Infertility Workshop, IUI Workshop, Semen Analysis and Semen preparation Workshop,
              Cervical Cancer Screening Course and such. Besides that, he also taken up the roles of Organizing
              Secretary and Committee Member for few other gynaecology related events as well.</p>
            <p>Throughout his practising period, Dr.Jaya Balan has organized various International, National and State
              level workshops, symposiums, courses and courses. He has been the Organizing Chairman for various events
              like First Basic Infertility Workshop, IUI Workshop, Semen Analysis and Semen preparation Workshop,
              Cervical Cancer Screening Course and such. Besides that, he also taken up the roles of Organizing
              Secretary and Committee Member for few other gynaecology related events as well.</p>

            <div class="blog-details-full">
              <div class="content">
                <p class="quote">
                  <img src="{{ url('web/') }}/assets/img/quote2.png" alt="quote">
                  Although Dr.Jaya Balan works around the clock to meet his patients’ needs, he also plays vital roles
                  in a few renowned Non-Government Organizations and Societies (NGOs). He is the Present Perak State
                  Chairman of Malaysian Research Development Committee, Present Chairman of Perak Family Health
                  Association, Life Member of the World Association of Laparoscopic Surgeons (WALS) since 2006,
                  Executive Committee Member and State Chairman of Malaysian Research Development Organization (MRDO)
                  and State Representative of Obstetrical and Gynecological Society of Malaysia (OGSM).
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Singlepage Area -->

  <!-- Start Why Choose us Area -->
  <section class="why-choose-area pt-110 pb-110 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mb-30">
          <div class="section-title">
            <h2 class="mb-0">Professionals We Care About You</h2>
            <p>Regular care of your health and visiting the gynecologist regularly helps keep your reproductive system
              in the best of health.</p>
            <p>The happiness of the parents to a newborn child is as important as it is for a doctor to educate and plan
              the whole procedures along with the correct treatments for the couple.</p>
            <img src="{{ url('web/') }}/assets/img/care.jpg" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon">
                  <img src="{{ url('web/') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('web/') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Birth Control</h4>
                  <p>Birth control is the use of any practices, methods, or devices</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon">
                  <img src="{{ url('web/') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('web/') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Sexual Dysfunction</h4>
                  <p>Sexual dysfunction is normally treated by correcting</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon">
                  <img src="{{ url('web/') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('web/') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Gynae Surgeries</h4>
                  <p>Gynecologic surgery is surgery on any part of a woman’s</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mb-30">
              <div class="info-box-2">
                <div class="icon">
                  <img src="{{ url('web/') }}/assets/img/icon/icon1.png" alt="img">
                  <img class="hover-img" src="{{ url('web/') }}/assets/img/icon/icon1w.png" alt="img">
                </div>
                <div class="content">
                  <h4>Obstetrics, Gynaecology</h4>
                  <p>Obstetrics and Gynaecology specialty deals with the female</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Why Choose us Area -->

  <section class="checkup-area pt-10" style="background-image: url('{{ url('web/') }}/assets/img/checkup-bg.png')">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 pb-2"><img src="{{ url('web/') }}/assets/img/happy-doctor.png" alt="doctor"
            class="w-100"></div>
        <div class="col-md-8">
          <div class="section-title">
            <h2 class="text-capitalize">Your Own Medical Care Starts Here</h2>
            <h3>We listen, We Understand and We care - A stepping stone to Parenthood.
              Proven Successful outcomes. We Develop a tailored fertility treatment plan for you and your partner.</h3>
            <a class="button-1 mt-20" href="{{ url('/appointment') }}">get Appointment <i
                class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section-area pt-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>Awards and Certificates of Dr. Jaya Balan Malaysia</h2>
            <p>He was also awarded Paduka Mahkota Perak (PMP) and High Ranking Award by His Royal Highness Sultan Nazrin
              Shah, the Ruler of State of Perak, Malaysia for his social services to the public.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="page-section-full pt-20 pb-50">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/awards/1.jpeg" alt="img">
            <div class="overly-icon">
              <a href="assets/img/awards/1.jpeg"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/awards/2.jpeg" alt="img">
            <div class="overly-icon">
              <a href="assets/img/awards/2.jpeg"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="gallery-item-single"><img src="{{ url('web/') }}/assets/img/awards/3.jpeg" alt="img">
            <div class="overly-icon">
              <a href="assets/img/awards/3.jpeg"><img src="{{ url('web/') }}/assets/img/icon/image.svg"
                  alt="img"></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
