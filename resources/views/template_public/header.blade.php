<div class="body_wrapper">

    <!--================Preloader Area =================-->
    <div class="preloader">
      <div class="loader-counter">
        <h1>0</h1>

        <div class="loader_bg">
          <div class="loader"></div>
        </div>
      </div>
    </div>
    <!--================End Preloader Area =================-->

    <!--================Mobile Canvus Menu Area =================-->
    <div class="mobile_canvus_menu">
      <div class="close_btn">
        <img src="{{asset('/images/icon/close-dark.png')}}" alt="">
      </div>
      <div class="menu_part_lux">
        <ul class="menu_list wd_scroll">
          <li><a href="index.html">Home</a></li>
          <li>
            <a href="index.html">Prevention
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Typical Symptoms</a></li>
              <li><a href="symptom-checker.html">Symptom Checker</a></li>
              <li><a href="prevention.html">Prevention</a></li>
              <li><a href="virus-checker.html">Coronavirus Checker</a></li>
              <li><a href="tracker.html">Tracker</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="faq.html">Faqs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Appointment</a></li>
          <li>
            <a href="#">Pages
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="about.html">About</a></li>
              <li><a href="doctors.html">Doctors</a></li>
              <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
              <li><a href="typography.html">Typhography</a></li>
              <li><a href="search.html">Search</a></li>
              <li><a href="search-nothing.html">Not Found</a></li>
              <li><a href="comingsoon.html">Coming Soon</a></li>
              <li><a href="404.html">Error</a></li>
            </ul>
          </li>

          <li>
            <a href="index.html">Blog
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="single-blog.html">Blog Details</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
      </div>
    </div>
    <!--================End Mobile Canvus Menu Area =================-->
    <!--================Sidebar Form Area =================-->
    <div class="body_capture"></div>
    <section class="sidebar_widget scroll_body">
      <div class="info_sidebar_inner">
        <div class="close_btn">
          <img src="{{asset('/images/icon/close.png')}}" alt="">
        </div>
        <ul class="nav info_social">
          <li>
            <a href="#"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-vimeo-v"></i></a>
          </li>
        </ul>
        <div class="info_title">
          <h2>Get in touch</h2>
          <p>If you have any question before we start, please fill below the contact form.</p>
        </div>
        <form action="#" class="appoinment_form js-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                <label><i class="linearicons-user"></i>Your Name</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                <label><i class="linearicons-envelope-open"></i>Your Email
                  Address</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="number" name="number" placeholder="" required />
                <label><i class="linearicons-telephone"></i>Your Phone
                  Number</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                <label><i class="linearicons-document"></i>Your Message</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group checkbox_field">
                <div class="checkbox">
                  <input type="checkbox" value="None" id="squared2" name="check" />
                  <label class="l_text" for="squared2">I accept the <span>Privacy Policy</span></label>
                </div>
                <button type="submit" class="green_btn" name="appoinment" id="appoinment" value="appoinment"
                  data-value="appoinment">
                  Submit
                </button>
              </div>
            </div>
          </div>
          <div class="success-message">
            <i class="fa fa-check text-primary"></i> Thank you!. Your message
            is successfully sent...
          </div>
          <div class="error-message">We're sorry, but something went wrong</div>
        </form>
        <div class="info_footer">
          <p>© Copyright
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.
          </p>
          <h6>
            Designed with <i class="linearicons-heart"></i>
            by <span>creakits</span>
          </h6>
        </div>
      </div>
    </section>
    <!--================End Sidebar Form Area =================-->

    <!--================Header Area =================-->
    <header class="header_area">
      <ul class="nav menu_social flex-column">
        <li>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="{{asset('/images/logo.png')}}"
                srcset="{{asset('/images/logo-2x.png 2x')}}" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html" role="button"
                    aria-haspopup="true" aria-expanded="false">Prevention </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Symptoms
                        <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="symptom.html">Typical Symptoms</a></li>
                        <li><a href="symptom-checker.html">Symptom Checker</a></li>
                        <li><a href="prevention.html">Prevention</a></li>
                        <li><a href="virus-checker.html">Coronavirus Checker</a></li>
                        <li><a href="tracker.html">Tracker</a></li>
                      </ul>
                    </li>
                    <li><a href="maintenance.html">Maintenance</a></li>
                    <li><a href="faq.html">FAQS</a></li>
                  </ul>
                </li>
                <li><a href="appointment.html">Appointment</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Pages</a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About</a></li>
                    <li><a href="doctors.html">Doctors</a></li>
                    <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
                    <li><a href="typography.html">Typhography</a></li>
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="search.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Search
                        <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="search.html">Search</a></li>
                        <li><a href="search-nothing.html">Not Found</a></li>
                      </ul>
                    </li>
                    <li><a href="comingsoon.html">Coming Soon</a></li>
                    <li><a href="404.html">Error</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Blog
                  </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="checker_btn">
                  <a href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="right_burger">
          <ul class="nav">
            <li>
              <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                <img src="{{asset('/images/icon/search.png')}}" alt="" />
              </div>
            </li>
            <li>
              <div class="menu_btn">
                <img src="{{asset('/images/icon/burger.png')}}" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>