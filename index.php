<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <?php wp_head(); ?>
</head>

<body class="light">

  <!-- <div class="aximo-preloader-wrap">
    <div class="aximo-preloader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div> -->




  <header class="site-header aximo-header-section aximo-header1 dark-bg" id="sticky-menu">
    <div class="container">
      <nav class="navbar site-navbar">
        <!-- Brand Logo-->
        <div class="brand-logo">
          <a href="index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-white.svg" alt="" class="light-version-logo">
          </a>
        </div>
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Demo <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="index.html">
                      <span class="menu-item-text">Design Agency</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-02.html">
                      <span class="menu-item-text">Startup Agency</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-03.html">
                      <span class="menu-item-text">SEO Agency</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-04.html">
                      <span class="menu-item-text">Business Consultation</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-05.html">
                      <span class="menu-item-text">Digital Marketing</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="about-us.html" class="nav-link-item">About Us</a>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="about-us.html">
                      <span class="menu-item-text">About Us</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="pricing.html">
                      <span class="menu-item-text">Pricing</span>
                    </a>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">blog <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu shape-none" id="submenu-3">
                      <li class="sub-menu--item">
                        <a href="blog.html">
                          <span class="menu-item-text">Our Blog</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="blog-grid.html">
                          <span class="menu-item-text">Blog grid</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-blog.html">
                          <span class="menu-item-text">blog details</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Service<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-4">
                      <li class="sub-menu--item">
                        <a href="service.html">
                          <span class="menu-item-text">service</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-service.html">
                          <span class="menu-item-text">service details</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Team<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-5">
                      <li class="sub-menu--item">
                        <a href="team.html">
                          <span class="menu-item-text">team</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-team.html">
                          <span class="menu-item-text">team details</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-6">
                      <li class="sub-menu--item">
                        <a href="portfolio-02.html">
                          <span class="menu-item-text">Portfolio One Column</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-01.html">
                          <span class="menu-item-text">Portfolio Two Column</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-portfolio.html">
                          <span class="menu-item-text">Single Portfolio</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-7">
                      <li class="sub-menu--item">
                        <a href="faq.html">
                          <span class="menu-item-text">faq</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="errors-404.html">
                          <span class="menu-item-text">Error 404</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="testimonial.html">
                          <span class="menu-item-text">testimonial</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="coming-soon.html">
                          <span class="menu-item-text">Coming Soon</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Account<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-8">
                      <li class="sub-menu--item">
                        <a href="sign-up.html">
                          <span class="menu-item-text">sign up</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="sign-in.html">
                          <span class="menu-item-text">sign in</span>
                        </a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="reset-password.html">
                          <span class="menu-item-text">reset password</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Blog <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-9">
                  <li class="sub-menu--item">
                    <a href="blog.html">
                      <span class="menu-item-text">blog</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="blog-grid.html">
                      <span class="menu-item-text">Blog grid</span>
                    </a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="single-blog.html">
                      <span class="menu-item-text">blog Details</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="contact-us.html" class="nav-link-item">Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
          <a class="aximo-default-btn pill aximo-header-btn" href="contact-us.html">
            Contact Us
          </a>
        </div>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger light">
          <span></span>
        </div>
        <!--/.Mobile Menu Hamburger Ends-->
      </nav>
    </div>
  </header>
  <!--End landex-header-section -->



  <div class="aximo-hero-section dark-bg">
    <div class="container position-relative">
      <div class="row">
        <div class="col-lg-8">
          <div class="aximo-hero-content">
            <h1>
              <span class="aximo-title-animation">
                A creative
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star.png" alt="">
              </span>
              design studio
            </h1>
            <p>We're a creative design studio specializing in meeting the needs of the new generation. We offer innovative and cutting-edge design solutions to help our clients stand out in today's fast-paced.</p>
            <div class="aximo-hero-user-wrap">
              <div class="aximo-hero-user-thumb">
                <div class="aximo-hero-user-thumb-item wow fadeInUpX" data-wow-delay="0s">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/user1.png" alt="">
                </div>
                <div class="aximo-hero-user-thumb-item wow fadeInUpX" data-wow-delay="0.25s">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/user3.png" alt="">
                </div>
                <div class="aximo-hero-user-thumb-item wow fadeInUpX" data-wow-delay="0.4s">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/user2.png" alt="">
                </div>
              </div>
              <div class="aximo-hero-user-data">
                <p>Believed by more than a thousand people</p>
              </div>
            </div>
            <a class="aximo-call-btn" href="contact-us.html">Book a free consultation <i class="icon-call"></i></a>
            <div class="aximo-hero-shape">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/shape1.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="aximo-hero-thumb wow fadeInRight" data-wow-delay="0s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/hero-thumb.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section aximo-section-padding4">
    <div class="container">
      <div class="aximo-section-title center">
        <h2>
          We provide effective
          <span class="aximo-title-animation">
            design solutions
            <span class="aximo-title-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
            </span>
          </span>
        </h2>
      </div>
      <div class="aximo-service-wrap">
        <div class="row">
          <div class="col-lg-6">
            <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.1s">
              <div class="aximo-iconbox-icon">
                <i class="icon-design-tools"></i>
              </div>
              <div class="aximo-iconbox-data">
                <h3>UI/UX Design</h3>
                <p>Focusing on user interface (UI) and user experience (UX) design enhance the usability and accessibility of digital products & app.</p>
                <a class="aximo-icon" href="service.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.2s">
              <div class="aximo-iconbox-icon">
                <i class="icon-branding"></i>
              </div>
              <div class="aximo-iconbox-data">
                <h3>Graphic Design</h3>
                <p>Creating visual elements such as logos, branding materials, page layout techniques, brochures, & other marketing collateral.</p>
                <a class="aximo-icon" href="service.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.3s">
              <div class="aximo-iconbox-icon">
                <i class="icon-web"></i>
              </div>
              <div class="aximo-iconbox-data">
                <h3>Web Design</h3>
                <p>Designing and developing websites to ensure they are visually look and appealing, user-friendly, and functional your website.</p>
                <a class="aximo-icon" href="service.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.4s">
              <div class="aximo-iconbox-icon">
                <i class="icon-design-thinking"></i>
              </div>
              <div class="aximo-iconbox-data">
                <h3>Motion Graphics</h3>
                <p>Creating animate graphics, videos for various purposes, including marketing and entertainment. To help sell a product or service.</p>
                <a class="aximo-icon" href="service.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section aximo-section-padding">
    <div id="aximo-counter"></div>
    <div class="container">
      <div class="aximo-section-title">
        <div class="row">
          <div class="col-lg-7">
            <h2>
              <span class="aximo-title-animation">
                We make your
                <span class="aximo-title-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
                </span>
              </span>
              business stand out
            </h2>
          </div>
          <div class="col-lg-4 offset-lg-1 d-flex align-items-center">
            <p>We work closely with our clients to know their objectives, target audience, unique needs, and practical design solutions.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="aximo-video-wrap wow fadeInUpX" data-wow-delay="0s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/video-bg.png" alt="">
            <a class="aximo-video-popup play-btn1 video-init" href="https://www.youtube.com/watch?v=Vx2aLNgGoAE">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/play-btn.svg" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="aximo-counter-wrap">
            <div class="aximo-counter-data">
              <h2 class="aximo-counter-number"><span data-percentage="15" class="aximo-counter"></span>+</h2>
              <p>Years of experience</p>
            </div>
            <div class="aximo-counter-data">
              <h2 class="aximo-counter-number"><span data-percentage="120" class="aximo-counter"></span>k</h2>
              <p>Successful projects</p>
            </div>
            <div class="aximo-counter-data">
              <h2 class="aximo-counter-number"><span data-percentage="100" class="aximo-counter"></span>%</h2>
              <p>Client satisfaction rate</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section dark-bg aximo-section-padding">
    <div class="container">
      <div class="aximo-section-title center light">
        <h2>
          Have a wide range of
          <span class="aximo-title-animation">
            creative projects
            <span class="aximo-title-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
            </span>
          </span>
        </h2>
      </div>
    </div>
    <div class="swiper aximo-project-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project1.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>Product Design</h3>
                </a>
                <p>Developing the look and feel of physical products, aesthetics, and functionality.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project2.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>Logo and Branding</h3>
                </a>
                <p>Creating or refreshing a company's logo and developing a cohesive visual identity.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project3.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>App UI/UX Design</h3>
                </a>
                <p>Designing the UI/UXe for mobile apps and web applications to ensure usability & engagement.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project4.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>Packaging Design</h3>
                </a>
                <p>Creating packaging solutions for products that not only protect attract customers on store.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project1.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>Product Design</h3>
                </a>
                <p>Developing the look and feel of physical products, aesthetics, and functionality.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-project-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/project2.png" alt="">
            <div class="aximo-project-wrap">
              <div class="aximo-project-data">
                <a href="single-portfolio.html">
                  <h3>Logo and Branding</h3>
                </a>
                <p>Creating or refreshing a company's logo and developing a cohesive visual identity.</p>
              </div>
              <a class="aximo-project-icon" href="single-portfolio.html">
                <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26" stroke="#FDFDE1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- End section -->

  <div class="section">
    <div class="container">
      <div class="aximo-faq-wrap">
        <div class="row">
          <div class="col-lg-7 d-flex align-items-center">
            <div class="aximo-default-content">
              <h2>
                <span class="aximo-title-animation">
                  Our high-quality
                  <span class="aximo-title-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
                  </span>
                </span>
                working processes
              </h2>
              <p>We focus at every stage on effective communication and collaboration between the client and ensuring that the final design meets the client's objectives and expectations.</p>
              <p>It is important to note that these are simplified steps, and the actual work process may vary depending on the complexity of the project.</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="aximo-accordion-wrap wow fadeInUpX" data-wow-delay="0s" id="aximo-accordion">
              <div class="aximo-accordion-item open">
                <div class="aximo-accordion-header">
                  <h3>01/ Project idea</h3>
                </div>
                <div class="aximo-accordion-body">
                  <p>The process starts with a detailed discussion with the client to understand their idea & goals.</p>
                </div>
              </div>
              <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                  <h3>02/ Brainstorming</h3>
                </div>
                <div class="aximo-accordion-body">
                  <p>Brainstorming is a group creativity technique in which members attempt to find a conclusion.</p>
                </div>
              </div>
              <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                  <h3>03/ Launch</h3>
                </div>
                <div class="aximo-accordion-body">
                  <p>The completed design assets or final product are delivered with necessary documentation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section aximo-section-padding3">
    <div class="container">
      <div class="aximo-section-title center">
        <h2>
          Clients are always
          <span class="aximo-title-animation">
            satisfied with us
            <span class="aximo-title-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
            </span>
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.1s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Super customer service!</h3>
              <p>Excellent customer service and I was really impressed and happy with my purchase especially as it was a last minute order which got to me in time, and when it arrived I was very happy with the design and size and so was the recipient.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/t_thumb1.png" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>William Jack <span>Founder@XYZ</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.2s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Exceptional creativity and vision</h3>
              <p>Working Mthemeus was a game-changer for our brand. Their exceptional creativity & vision breathed new life into our visual. The logo they perfectly captures our essence & has become instantly recognizable. We couldn't be happier the results!</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/t_thumb2.png" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Smith Align <span>Businessman</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.3s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Innovative and professional</h3>
              <p>I can't say enough good things about them. Their team is not only incredibly talented but also highly professional. They listened to our ideas and brought to life in ways we couldn't have imagined. Their innovative approach and dedication to our project.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/t_thumb3.png" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Milano Joe <span>Creative Director</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.4s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Transformed our brand</h3>
              <p>Our partnership with Mthemeus transformed our brand from ordinary to extraordinary. Their branding expertise and design work elevated our marketing materials to a whole new level. Our customers have taken notice, and boost in brand recognition.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/t_thumb4.png" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Danial Mark <span>Marketing Director</span></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="aximo-auto-slider-section">
    <div class="swiper aximo-auto-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="aximo-auto-slider-item">
            <h3>Let's create new experiences</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star3.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section aximo-section-padding3">
    <div class="container">
      <div class="aximo-section-title center">
        <h2>
          We have a team of
          <span class="aximo-title-animation">
            creative people
            <span class="aximo-title-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
            </span>
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.1s">
            <div class="aximo-team-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team1.png" alt="">
              <div class="aximo-social-icon team-social">
                <ul>
                  <li>
                    <a href="https://twitter.com/" target="_blank">
                      <i class="icon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://facebook.com/" target="_blank">
                      <i class="icon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank">
                      <i class="icon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/" target="_blank">
                      <i class="icon-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aximo-team-data">
              <a href="single-team.html">
                <h3>Andrew Mark</h3>
              </a>
              <p>Creative Director</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.2s">
            <div class="aximo-team-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team2.png" alt="">
              <div class="aximo-social-icon team-social">
                <ul>
                  <li>
                    <a href="">
                      <i class="icon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aximo-team-data">
              <a href="single-team.html">
                <h3>Jack Taylor</h3>
              </a>
              <p>Senior Designer</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.3s">
            <div class="aximo-team-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team3.png" alt="">
              <div class="aximo-social-icon team-social">
                <ul>
                  <li>
                    <a href="">
                      <i class="icon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aximo-team-data">
              <a href="single-team.html">
                <h3>Martine Joy</h3>
              </a>
              <p>Project Manager</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.4s">
            <div class="aximo-team-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team4.png" alt="">
              <div class="aximo-social-icon team-social">
                <ul>
                  <li>
                    <a href="">
                      <i class="icon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="icon-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="aximo-team-data">
              <a href="single-team.html">
                <h3>Adam Straw</h3>
              </a>
              <p>Web Developer</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End section -->




  <!-- Footer  -->

  <footer class="aximo-footer-section dark-bg">
    <div class="container">
      <div class="aximo-footer-top aximo-section-padding">
        <div class="row">
          <div class="col-lg-7">
            <div class="aximo-default-content light position-relative">
              <h2>
                <span class="aximo-title-animation">
                  Let's start a 
                  <span class="aximo-title-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/star2.png" alt="">
                  </span>
                </span>
                project together
              </h2>
              <p>We work closely with our clients to understand their objectives, target audience, and unique needs. We use our creative skills to translate these requirements and practical design solutions.</p>
              <div class="aximo-info-wrap">
                <div class="aximo-info">
                  <ul>
                    <li>Give us a call:</li>
                    <li><a href="">(123) 456-7890</a></li>
                  </ul>
                </div>
                <div class="aximo-info">
                  <ul>
                    <li>Send us an email:</li>
                    <li><a href="">info@mthemeus.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="aximo-social-icon social-large">
                <ul>
                  <li>
                    <a href="https://twitter.com/" target="_blank">
                      <i class="icon-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://facebook.com/" target="_blank">
                      <i class="icon-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank">
                      <i class="icon-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/" target="_blank">
                      <i class="icon-linkedin"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="aximo-hero-shape aximo-footer-shape">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v1/shape1.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="aximo-form-wrap">
              <h4>Send us a message</h4>
              <form action="#">
                <div class="aximo-form-field">
                  <input type="text" placeholder="Your name">
                </div>
                <div class="aximo-form-field">
                  <input type="email" placeholder="Your email address">
                </div>
                <div class="aximo-form-field">
                  <input type="text" placeholder="+088-234-6849">
                </div>
                <div class="aximo-form-field">
                  <textarea name="textarea" placeholder="Write your message here..."></textarea>
                </div>
                <button id="aximo-submit-btn" type="submit">Send message <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right3.svg" alt=""></span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="aximo-footer-bottom">
        <div class="row">
          <div class="col-lg-6">
            <div class="aximo-footer-logo">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-white.svg" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="aximo-copywright one">
              <p> &copy; Copyright 2023, All Rights Reserved by Mthemeus</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </footer>
  
  <?php wp_footer(); ?>
</body>
</html>