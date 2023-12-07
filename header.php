<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <?php wp_head(); ?>
</head>

<body <?php body_class("light"); ?>>

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
