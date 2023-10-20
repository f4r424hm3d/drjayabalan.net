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
        <li>Obstetrics And Gynaecology</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Blog Details Section -->
  <section class="singlepage-area pt-120 pb-90">
    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <!-- Singlepage Content -->
          <div class="singlepage-content">
            <img class="details-singleimg" src="{{ url('web/') }}/assets/img/slider/1.jpg" alt="project">

            <h2 class="mt-30">OBSTETRICS:</h2>
            <p>Welcome to Dr. Jaya Balan Clinic Obstetrics and Gynecology Malaysia. We are so pleased you have chosen us
              for care during your pregnancy, delivery, and the postpartum period. Below are links to information and
              topics that you may find useful during the course of your pregnancy. You will receive copies of these and
              more at your first visit as well.</h3>

            <div class="singlepage-box">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/ObstetricsGynaecologyServices.jpg"
                    alt="singleimg">
                </div>
                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">GYNECOLOGY:</h2>
                  <p>At Dr. Jaya Balan Clinic Obstetrics and Gynecology Malaysia, we are pleased to offer a wide range
                    of complete gynecologic services for women of all ages. Below is a list of common issues and
                    problems that we address. If you need gynecologic preventive care, are experiencing any of the
                    following problems, or would just like more information, please contact our office and we would be
                    happy to arrange an appointment with a provider to meet your needs.</p>
                </div>
              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row">

                <div class="col-md-12">
                  <h3>We Offer The Following Services:</h3>
                </div>

                <div class="col-md-6">
                  <ul>
                    <li>Routine well-woman annual examinations including pap tests</li>
                    <li>Complete management of abnormal pap tests including viral screening, colposcopy, and surgical
                      therapies for cervical dysplasia</li>
                    <li>Preconceptional counseling and testing</li>
                    <li>Contraception counseling, initiation, and continuation and emergency contraception</li>
                    <li>Female sterilization (tubal ligation)</li>
                    <li>Screening and treatment for sexually transmitted infections</li>
                    <li>Menopause management including counseling, initiation, and continuation of hormone therapy</li>
                    <li>Breast cancer screening and initial management of breast abnormalities</li>
                    <li>Osteoporosis prevention, screening, and treatment</li>
                    <li>Initial infertility evaluation and treatment including Hysterosalpingograms</li>
                    <li>Complete evaluation and management of a number of gynecologic symptoms including:</li>
                    <li>Abnormal vaginal bleeding</li>
                    <li>Complete evaluation and management of a number of gynecologic symptoms including:</li>
                    <li>Abnormal vaginal bleeding</li>
                    <li>Uterine fibroids</li>
                    <li>Uterine/Endometrial and Cervical Polyps</li>
                  </ul>
                </div>

                <div class="col-md-6">
                  <ul>
                    <li>Painful menstrual periods</li>
                    <li>Pain with intercourse</li>
                    <li>Pelvic Pain</li>
                    <li>Ovarian Cysts</li>
                    <li>Endometriosis</li>
                    <li>Vaginal discharge/irritation</li>
                    <li>Vulvar irritation</li>
                    <li>Menopausal symptoms including hot flashes, mood disturbance and vaginal changes</li>
                    <li>Polycystic Ovary Syndrome</li>
                    <li>Irregular menstrual cycles</li>
                    <li>Infrequent Menstrual Cycles</li>
                    <li>Excessive hair growth</li>
                    <li>Urinary incontinence including complex urodynamic testing</li>
                    <li>Urinary urgency, frequency</li>
                    <li>Bladder Pain</li>
                    <li>Recurrent urinary tract infections</li>
                    <li>Hematuria</li>
                    <li>Vaginal Prolapse</li>
                    <li>Uterine Prolapse</li>
                    <li>Bladder Prolapse</li>
                    <li>Rectal Prolapse</li>
                    <li>Sexual dysfunction, including decreased sex drive and inability to orgasm</li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">Pap Smear Test:</h2>
                  <p>A Pap smear, also called a Pap test, is a procedure to test for cervical cancer in women. A Pap
                    smear involves collecting cells from cervix, the lower, narrow end of uterus that's at the top of
                    vagina. Detecting cervical cancer early with a Pap smear gives you greater chance at a cure. A Pap
                    smear can also detect changes in cervical cells that suggest cancer may develop in the future.
                    Detecting these abnormal cells early with a Pap smear is the first step in halting the possible
                    development of cervical cancer.</p>
                </div>
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/PapSmearTest.jpg" alt="singleimg">
                </div>
              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/UltrasoundScanning.jpg"
                    alt="singleimg"></div>

                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">Ultrasound Scanning Test:</h2>
                  <p>Ultrasound (also called sonogram) is a prenatal test offered to most pregnant women. It uses sound
                    waves to show a picture of baby in the uterus (womb). Ultrasound helps the health care provider
                    check on baby's health and development.</p>
                </div>
              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">Doppler Scanning:</h2>
                  <p>Doppler ultrasound uses sound waves to detect the movement of blood in vessels. It is used in
                    pregnancy to study blood circulation in the baby, uterus and placenta. Using it in high-risk
                    pregnancies, where there is concern about the baby's condition, shows benefits.</p>
                </div>
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/DopplerScanning.jpg"
                    alt="singleimg"></div>
              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/4DScanning.jpg" alt="singleimg">
                </div>

                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">4D Scanning:</h2>
                  <p>4D ultrasound allows visualization of embryonic movements two weeks earlier than 2D ultrasound. In
                    comparison with 2D ultrasound, 4D ultrasound offers real benefits for fetus's assessment prenatal
                    condition. In a relatively short period of time 4D ultrasound stimulated multicentric studies on
                    fetal and even embryonic behavior with more convincing imaging than conventional 2D ultrasound.</p>
                </div>
              </div>
            </div>

            <div class="singlepage-box mb-25">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                  <h2 class="mt-10">Hormone Replacement Therapy (HRT):</h2>
                  <p>Hormone replacement therapy (HRT) is a treatment to relieve symptoms of the menopause. The main
                    benefit of HRT is that it can help relieve most of the menopausal symptoms, such as:</p>
                  <ul>
                    <li>Hot flushes</li>
                    <li>Night sweats</li>
                    <li>Mood swings</li>
                    <li>Vaginal dryness</li>
                    <li>Reduced sex drive</li>
                  </ul>
                </div>
                <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/HRT.jpg" alt="singleimg"></div>
                <div class="col-md-12">
                  <p>Many of these symptoms pass after a few years, but they can be unpleasant, and taking HRT can offer
                    relief for many women. It can also help prevent the weakening of the bones (osteoporosis), which is
                    more common after menopause.</p>
                </div>
              </div>

              <div class="singlepage-box mb-25">
                <div class="row align-items-center">
                  <div class="col-md-6 col-sm-6"><img src="{{ url('web/') }}/assets/img/Cyst.jpg" alt="singleimg"></div>

                  <div class="col-md-6 col-sm-6">
                    <h2 class="mt-10">Treatment for Cysts/ Fibroids/ Ectopic Pregnancy:</h2>
                    <p>In general terms, fibroids consist of dense tissue and occur only in the uterus, while cysts form
                      on the ovaries and are fluid-filled. It is not clear why fibroids develop, but some factors are
                      thought to influence their formation. Fibroids appear to grow under the influence of estrogen and
                      progesterone. Ectopic pregnancy also called extrauterine pregnancy, is when a fertilized egg grows
                      outside a woman's uterus, somewhere else in their belly.</p>
                    <p>It can cause life-threatening bleeding and needs medical care right away. In more than 90% of
                      cases, the egg implants in a fallopian tube. This is called a tubal pregnancy. Treatment or
                      surgery would be suggested based on the severity of the complication.</p>
                  </div>
                </div>
              </div>

              <div class="singlepage-navigation pt-35">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="#">
                      <div class="singlepage-navi-icon">
                        <i class="fa-solid fa-arrow-left-long"></i>
                      </div>
                      <div class="singlepage-navi-text">
                        <span>Prev Treatment</span>
                        <h5>Treatment Name Here</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a class="float-right" href="#">
                      <div class="singlepage-navi-text">
                        <span>Next Treatment</span>
                        <h5>Treatment Name Here</h5>
                      </div>
                      <div class="singlepage-navi-icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Sidebar Widgets -->
        <div class="col-lg-4 mb-30">
          <!-- Sidebar Widgets -->
          <div class="sidebar-widgets">

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

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Details Section -->
@endsection
