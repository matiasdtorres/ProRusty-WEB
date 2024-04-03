<!DOCTYPE html>
<html class="no-js" lang="es-AR">
  
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sukor">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <link rel="shortcut icon" sizes="32x32" href="assets/img/favicon/favicon-32x32.png" />
    <link rel="apple-touch-icon" href="assets/img/favicon/apple-touch-icon.png" />
    <link rel="android-chrome" sizes="192x192" href="assets/img/favicon/android-chrome-192x192.png" />
    <link rel="android-chrome" sizes="512x512" href="assets/img/favicon/android-chrome-512x512.png" />
    <!-- Site Title -->
    <title>ProRusty - Team Member Details</title>
    <?php
      $bootstrap_css_file = 'assets/css/bootstrap.min.css';
      $fontawesome_css_file = 'assets/css/fontawesome.min.css';
      $animate_css_file = 'assets/css/animate.css';
      $swiper_css_file = 'assets/css/swiper.min.css';
      $odometer_css_file = 'assets/css/odometer.css';
      $css_file = 'assets/css/style.css';
      
      $bootstrap_css_version = filemtime($bootstrap_css_file);
      $fontawesome_css_version = filemtime($fontawesome_css_file);
      $animate_css_version = filemtime($animate_css_file);
      $swiper_css_version = filemtime($swiper_css_file);
      $odometer_css_version = filemtime($odometer_css_file);
      $css_version = filemtime($css_file);
    ?>
    <link rel="stylesheet" href="<?php echo $bootstrap_css_file; ?>?v=<?php echo $bootstrap_css_version; ?>">
    <link rel="stylesheet" href="<?php echo $fontawesome_css_file; ?>?v=<?php echo $fontawesome_css_version; ?>">
    <link rel="stylesheet" href="<?php echo $animate_css_file; ?>?v=<?php echo $animate_css_version; ?>">
    <link rel="stylesheet" href="<?php echo $swiper_css_file; ?>?v=<?php echo $swiper_css_version; ?>">
    <link rel="stylesheet" href="<?php echo $odometer_css_file; ?>?v=<?php echo $odometer_css_version; ?>">
    <link rel="stylesheet" href="<?php echo $css_file; ?>?v=<?php echo $css_version; ?>">

  </head>
  <body class="cs_dark">
    <div class="cursor" id="client_cursor">View</div>
    <!-- Start Preloader -->
    <div class="cs_perloader">
      <div class="cs_perloader_in">
        <div class="cs_perloader_dots_wrap">
          <div class="cs_perloader_dots"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <span class="cs_perloader_text">Cargando...</span>
    </div>
    <!-- End Preloader -->
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_sticky_header cs_primary_color">
      <div class="cs_main_header">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <a class="cs_site_branding" href="index.php">
                <img src="assets/img/logo.svg" alt="Logo">
              </a>
            </div>
            <div class="cs_main_header_center">
              <div class="cs_nav cs_medium cs_primary_font">
                <ul class="cs_nav_list">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li class="menu-item-has-children">
                    <a href="service.php">Service</a>
                    <ul>
                      <li><a href="service.php">Service</a></li>
                      <li><a href="service-details.php">Service Details</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="blog.php">Blog</a>
                    <ul>
                      <li><a href="blog.php">Blog Standard</a></li>
                      <li><a href="blog-list.php">Blog List</a></li>
                      <li><a href="blog-details.php">Blog Details</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="shop.php">Shop</a>
                    <ul>
                      <li>
                        <a href="shop.php">Our Shop</a>
                      </li>
                      <li>
                        <a href="shop-product-details.php">Shop Details</a>
                      </li>
                      <li>
                        <a href="shop-cart.php">Cart</a>
                      </li>
                      <li>
                        <a href="shop-checkout.php">Checkout</a>
                      </li>
                      <li>
                        <a href="shop-order-recived.php">Success Order</a>
                      </li>
                      <li>
                        <a href="shop-wishlist.php">Wishlist</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="portfolio.php">Portfolio</a></li>
                      <li><a href="portfolio-details.php">Portfolio Details</a></li>
                      <li><a href="case-study-details.php">Case Study Details</a></li>
                      <li><a href="team.php">Team</a></li>
                      <li><a href="team-details.php">Team Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <a href="contact.php" class="cs_btn cs_style_discord cs_btn_white">Server Discord</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Section -->
    <!-- Start Page Heading -->
    <div class="cs_height_70 cs_height_lg_70"></div>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="cs_section_heading cs_style_1 cs_type_3 ">
      <div class="container">
        <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Team Members</p>
        <div class="cs_height_20 cs_height_lg_10"></div>
        <h2 class="cs_section_title cs_fs_68 mb-0">Talented individuals <br>dedicated to your success</h2>
      </div>
      <div class="cs_shape_4">
        <img src="assets/img/icons/team_shape.svg" alt="Shape">
      </div>
    </div>
    <div class="cs_height_75 cs_height_lg_60"></div>
    <!-- End Page Heading -->
    <!-- Start Team Section -->
    <section>
      <div class="container">
        <div class="row cs_gap_y_35">
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_1.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">James Berline</a></h2>
                <p class="mb-0">React Developer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_2.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Bella Zubena</a></h2>
                <p class="mb-0">Graphic Designer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_3.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Kemnei Alekzend</a></h2>
                <p class="mb-0">Digital Marketer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_4.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Juliya Jesmine</a></h2>
                <p class="mb-0">UX Researcher</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_5.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Bob Mulian</a></h2>
                <p class="mb-0">Video Editor</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img class="w-100" src="assets/img/studio-agency/team_6.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Sindrela Anam</a></h2>
                <p class="mb-0">Script Writer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
    <!-- Start Hiring Section -->
    <section>
      <div class="cs_height_130 cs_height_lg_60"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <h2 class="cs_section_title cs_fs_50 mb-0">Want to join our team?</h2>
          <div class="cs_height_23 cs_height_lg_20"></div>
          <p class="cs_section_subtitle cs_fs_18 mb-0">Bellow check our open position right now</p>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="row">
          <div class="col-lg-4">
            <div class="cs_hiring_img position-relative">
              <svg width="84" height="77" viewBox="0 0 84 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                <path d="M18.6372 15.0077C22.4937 17.106 25.7722 20.1709 29.4926 22.4975C33.1402 24.7755 36.5401 27.5247 39.8478 30.235C46.5553 35.7188 52.6799 42.1595 56.8132 49.8047C57.3621 50.8199 56.0216 51.9225 55.1861 51.0579C49.28 44.9038 43.2137 38.9149 37.0453 33.0377C34.0436 30.1687 30.9999 27.3369 27.9141 24.5424C24.6502 21.5941 20.9055 19.1995 17.6853 16.2414C17.015 15.6197 17.8747 14.59 18.6372 15.0077Z" fill="#4F4747"/>
                <path d="M1.09257 43.7793C5.48281 43.7567 9.83308 44.8596 14.2143 45.1026C18.5083 45.3382 22.8127 46.106 27.0174 46.8843C35.5382 48.4516 44.01 51.1383 51.3187 55.8409C52.2892 56.4653 51.6469 58.0779 50.498 57.7236C42.3559 55.1825 34.153 52.8633 25.9146 50.6913C21.9014 49.6264 17.8692 48.6144 13.8181 47.6554C9.53687 46.6475 5.10154 46.3567 0.853874 45.3192C-0.0331613 45.098 0.223112 43.7813 1.09257 43.7793Z" fill="#4F4747"/>
                <path d="M51.1755 0.725762C53.289 4.57405 54.3942 8.92393 56.2699 12.891C58.1106 16.7778 59.4884 20.9274 60.8094 24.9946C63.4952 33.2318 65.1738 41.9599 64.5259 50.6268C64.4399 51.7776 62.7163 51.982 62.4798 50.8032C60.8305 42.4344 58.9571 34.1181 56.9375 25.8407C55.9596 21.8052 54.9262 17.7783 53.8373 13.76C52.6815 9.51616 50.822 5.47878 49.7082 1.25032C49.4796 0.365115 50.7591 -0.0375394 51.1755 0.725762Z" fill="#4F4747"/>
                </g>
              </svg>                
              <img src="assets/img/others/hiring_img.jpg" alt="Thumb" class="w-100">
            </div>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="cs_height_40 cs_height_lg_40"></div>
            <ul class="cs_hiring_list cs_mp0">
              <li class="cs_primary_bg">
                <h2 class="mb-0 cs_fs_29 cs_semibold cs_white_color">
                  <span>01</span>
                  <a href="#">Front - End Developer</a>
                </h2>
                <a href="#" class="cs_btn cs_style_1 cs_btn_white cs_fs_29 cs_semibold">Apply <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </li>
              <li class="cs_primary_bg">
                <h2 class="mb-0 cs_fs_29 cs_semibold cs_white_color">
                  <span>02</span>
                  <a href="#">UI/UX Designer</a>
                </h2>
                <a href="#" class="cs_btn cs_style_1 cs_btn_white cs_fs_29 cs_semibold">Apply <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </li>
              <li class="cs_primary_bg">
                <h2 class="mb-0 cs_fs_29 cs_semibold cs_white_color">
                  <span>03</span>
                  <a href="#">Digital Marketer</a>
                </h2>
                <a href="#" class="cs_btn cs_style_1 cs_btn_white cs_fs_29 cs_semibold">Apply <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </li>
              <li class="cs_primary_bg">
                <h2 class="mb-0 cs_fs_29 cs_semibold cs_white_color">
                  <span>04</span>
                  <a href="#">SEO Expert</a>
                </h2>
                <a href="#" class="cs_btn cs_style_1 cs_btn_white cs_fs_29 cs_semibold">Apply <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Hiring Section -->
    <!-- Start Footer -->
    <footer class="cs_fooer cs_bg_filed" data-src="assets/img/footer_bg.jpg">
      <div class="cs_fooer_main">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="cs_footer_item">
                <div class="cs_text_widget">
                  <img src="assets/img/logo.svg" alt="Logo">
                </div>
                <ul class="cs_menu_widget cs_mp0">
                  <li>5553 Jay Path Apt. 908</li>
                  <li>+44 454 7800 112</li>
                  <li><a href="">email@email.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs_footer_item">
                <h2 class="cs_widget_title">Services</h2>
                <ul class="cs_menu_widget cs_mp0">
                  <li>
                    <a href="service-details.php">WP Development</a>
                  </li>
                  <li>
                    <a href="service-details.php">UX Research</a>
                  </li>
                  <li>
                    <a href="service-details.php">Branding Design</a>
                  </li>
                  <li>
                    <a href="service-details.php">Front-End Development</a>
                  </li>
                  <li>
                    <a href="service-details.php">Graphics Design</a>
                  </li>
                  <li>
                    <a href="service-details.php">Ad Promotion</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs_footer_item">
                <h2 class="cs_widget_title">Links</h2>
                <ul class="cs_menu_widget cs_mp0">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="service.php">Services</a></li>
                  <li><a href="portfolio.php">Portfolio</a></li>
                  <li><a href="blog.php"></a>Blog</li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="cs_footer_item">
                <h2 class="cs_widget_title">Subscribe Newsletter </h2>
                <div class="cs_newsletter cs_style_1">
                  <div class="cs_newsletter_text"> We make sure to only send emails that are noteworthy and pertinent to the recipient.</div>
                  <form action="#" class="cs_newsletter_form">
                    <input type="email" class="cs_newsletter_input" placeholder="Email address">
                    <button class="cs_btn cs_style_1">
                      Submit
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="cs_bottom_footer">
          <div class="cs_bottom_footer_left">
            <div class="cs_social_btns cs_style_1">
              <a href="#" class="cs_center">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-twitter"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-slack"></i>
              </a>
            </div>
          </div>
          <div class="cs_copyright">Copyright © 2024 ProRusty.</div>
          <div class="cs_bottom_footer_right">
            <ul class="cs_footer_links cs_mp0">
              <li>
                <a href="#">Terms of Use</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Scroll Up -->
    <span class="cs_scrollup">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
      </svg>
    </span>
    <!-- End Scroll Up -->

    <!-- Scripts -->
    <?php
      $jquery_js_file = 'assets/js/jquery-3.6.0.min.js';
      $wow_js_file = 'assets/js/wow.min.js';
      $swiper_js_file = 'assets/js/swiper.min.js';
      $odometer_js_file = 'assets/js/odometer.js';
      $ripples_js_file = 'assets/js/ripples.min.js';
      $isotope_js_file = 'assets/js/isotope.pkg.min.js';
      $gsap_js_file = 'assets/js/gsap.min.js';
      $main_js_file = 'assets/js/main.js';

      $jquery_js_version = filemtime($jquery_js_file);
      $wow_js_version = filemtime($wow_js_file);
      $swiper_js_version = filemtime($swiper_js_file);
      $odometer_js_version = filemtime($odometer_js_file);
      $ripples_js_version = filemtime($ripples_js_file);
      $isotope_js_version = filemtime($isotope_js_file);
      $gsap_js_version = filemtime($gsap_js_file);
      $main_js_version = filemtime($main_js_file);
    ?>
    <script src="<?php echo $jquery_js_file; ?>?v=<?php echo $jquery_js_version; ?>"></script>
    <script src="<?php echo $wow_js_file; ?>?v=<?php echo $wow_js_version; ?>"></script>
    <script src="<?php echo $swiper_js_file; ?>?v=<?php echo $swiper_js_version; ?>"></script>
    <script src="<?php echo $odometer_js_file; ?>?v=<?php echo $odometer_js_version; ?>"></script>
    <script src="<?php echo $ripples_js_file; ?>?v=<?php echo $ripples_js_version; ?>"></script>
    <script src="<?php echo $isotope_js_file; ?>?v=<?php echo $isotope_js_version; ?>"></script>
    <script src="<?php echo $gsap_js_file; ?>?v=<?php echo $gsap_js_version; ?>"></script>
    <script src="<?php echo $main_js_file; ?>?v=<?php echo $main_js_version; ?>"></script>
    <!-- End Scripts -->
  </body>

</html>
