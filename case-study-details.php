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
    <title>ProRusty - Case Study Details</title>
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
    <div class="cs_section_heading cs_style_1 cs_type_3 text-center">
      <div class="container">
        <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Marketing</p>
        <div class="cs_height_20 cs_height_lg_10"></div>
        <h2 class="cs_section_title cs_fs_68 mb-0">Digital marketing <br>management</h2>
      </div>
    </div>
    <div class="cs_height_75 cs_height_lg_60"></div>
    <!-- End Page Heading -->
    <div class="container">
      <img class="cs_casestudy_details_thumb cs_radius_5" src="assets/img/others/case_1.jpg" alt="Thumb">
      <div class="cs_height_100 cs_height_lg_60"></div>
      <ul class="cs_case_study_info cs_mp0">
        <li>
          <p class="mb-0">Client</p>
          <h3 class="cs_fs_21 mb-0 cs_semibold">Andreo Bowla</h3>
        </li>
        <li>
          <p class="mb-0">Location </p>
          <h3 class="cs_fs_21 mb-0 cs_semibold">United Kindom</h3>
        </li>
        <li>
          <p class="mb-0">Budgets</p>
          <h3 class="cs_fs_21 mb-0 cs_semibold">$1330 USD</h3>
        </li>
        <li>
          <p class="mb-0">Completed</p>
          <h3 class="cs_fs_21 mb-0 cs_semibold">12 April 2023</h3>
        </li>
      </ul>
      <div class="cs_height_100 cs_height_lg_60"></div>
      <div class="row align-items-center cs_gap_y_35">
        <div class="col-lg-5">
          <img src="assets/img/others/case_2.jpg" alt="Thumb" class="cs_radius_5 w-100">
        </div>
        <div class="col-lg-6 offset-lg-1">
          <h2 class="cs_fs_50">Project Brief :</h2>
          <div class="cs_height_15 cs_height_lg_15"></div>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium loposepas doloremque own laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi holas architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia environmet consequuntur magni dolores eos qui ratione mone voluptatem sequi nesciunt. Neque porro quisquam est world wide.</p>
          <p>Our team, specializing in strategic digital marketing, partners with the world's leading brands. Breaking from the norm, we push boundaries and merge imaginative thinking, consumer behavior, and data-driven design with advanced technology.</p>
          <div class="cs_height_20 cs_height_lg_10"></div>
          <p class="mb-0">Website: <a href="#" class="cs_accent_color">www.arino.com</a></p>
        </div>
      </div>
    </div>
    <!-- Start About us -->
    <!-- Start What We Do -->
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="cs_about cs_style_2 cs_type_3">
      <div class="container">
        <div class="row align-items-center cs_gap_y_35">
          <div class="col-lg-6">
            <div class="cs_section_heading cs_style_1">
              <h2 class="cs_section_title cs_fs_50 mb-0">Challenging part:</h2>
              <div class="cs_height_24 cs_height_lg_24"></div>
              <p>Our team, specializing in strategic digital marketing, partners with the world's leading brands. Breaking from the norm, we push boundaries and merge imaginative thinking, consumer behavior, and data-driven design advanced.</p>
              <div class="cs_height_30 cs_height_lg_20"></div>
              <ul class="cs_list cs_style_2 cs_fs_21 cs_semibold cs_primary_color cs_mp0">
                <li><span class="cs_list_number cs_accent_bg cs_center">01</span>User Experience (UX) Enhancement</li>
                <li><span class="cs_list_number cs_accent_bg cs_center">02</span>Modernization</li>
                <li><span class="cs_list_number cs_accent_bg cs_center">03</span>Mobile Responsiveness</li>
                <li><span class="cs_list_number cs_accent_bg cs_center">04</span>Performance Optimization</li>
                <li><span class="cs_list_number cs_accent_bg cs_center">05</span>Branding Consistency</li>
                <li><span class="cs_list_number cs_accent_bg cs_center">06</span>Content Strategy</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_about_thumb">
              <div class="cs_about_thumb_in cs_bg_filed w-100" data-src="assets/img/others/case_3.jpg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start What We Do -->
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="cs_about cs_style_1 cs_type_1">
      <div class="container">
        <div class="row align-items-center cs_gap_y_35">
          <div class="col-lg-6">
            <div class="cs_about_thumb">
              <div class="cs_about_thumb_in cs_bg_filed" data-src="assets/img/others/case_4.jpg"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_section_heading cs_style_1">
              <h2 class="cs_section_title cs_fs_50 mb-0">Result overview:</h2>
              <div class="cs_height_24 cs_height_lg_24"></div>
              <p>Performance testing, specializing in strategic digital marketing, partners with the world's leading brands. Breaking from the norm, we push boundaries and merge imaginative thinking, consumer behavior, and data-driven design with advanced technology.</p>
              <div class="cs_height_50 cs_height_lg_25"></div>
              <ul class="cs_round_progress_list text-center cs_mp0">
                <li>
                  <div class="cs_round_progress_wrap cs_accent_color">
                    <div class="cs_round_progress_in">
                      <div class="cs_round_progress_number mb-0 cs_semibold cs_fs_21 cs_primary_color">
                        <span data-count-to="75" class="odometer"></span>%
                      </div>
                    </div>
                    <div class="cs_round_progress">
                      <svg class="cs_round_progress_percentage" viewbox="0 0 100 100" width="163" height="163" data-percent="75"><circle cx="50" cy="50" r="40" /></svg>
                    </div>
                  </div>
                  <h2 class="cs_round_progress_title cs_fs_16 cs_semibold mb-0">Performance Increase</h2>
                </li>
                <li>
                  <div class="cs_round_progress_wrap cs_accent_color">
                    <div class="cs_round_progress_in">
                      <div class="cs_round_progress_number mb-0 cs_semibold cs_fs_21 cs_primary_color">
                        <span data-count-to="85" class="odometer"></span>%
                      </div>
                    </div>
                    <div class="cs_round_progress">
                      <svg class="cs_round_progress_percentage" viewbox="0 0 100 100" width="163" height="163" data-percent="85"><circle cx="50" cy="50" r="40" /></svg>
                    </div>
                  </div>
                  <h2 class="cs_round_progress_title cs_fs_16 cs_semibold mb-0">Loading Speed faster</h2>
                </li>
                <li>
                  <div class="cs_round_progress_wrap cs_accent_color">
                    <div class="cs_round_progress_in">
                      <div class="cs_round_progress_number mb-0 cs_semibold cs_fs_21 cs_primary_color">
                        <span data-count-to="90" class="odometer"></span>%
                      </div>
                    </div>
                    <div class="cs_round_progress">
                      <svg class="cs_round_progress_percentage" viewbox="0 0 100 100" width="163" height="163" data-percent="90"><circle cx="50" cy="50" r="40" /></svg>
                    </div>
                  </div>
                  <h2 class="cs_round_progress_title cs_fs_16 cs_semibold mb-0">Mobile optimize</h2>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About us -->
    <!-- Start CTA Section -->
    <div class="container">
      <div class="cs_cta cs_style_3 text-center">
        <div class="cs_height_140 cs_height_lg_70"></div>
        <h2 class="cs_cta_title cs_fs_50 mb-0">
          <span>
            Is there a specific project or goal <br>that you have in mind?
            <svg width="84" height="77" viewBox="0 0 84 77" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.5">
              <path d="M64.8361 15.0076C60.9794 17.1059 57.7008 20.1708 53.9802 22.4974C50.3325 24.7754 46.9324 27.5246 43.6247 30.2349C36.9169 35.7187 30.7919 42.1594 26.6584 49.8046C26.1096 50.8198 27.4502 51.9223 28.2856 51.0578C34.192 44.9037 40.2586 38.9147 46.4273 33.0375C49.429 30.1685 52.4729 27.3368 55.5588 24.5423C58.8228 21.594 62.5677 19.1994 65.7881 16.2413C66.4584 15.6196 65.5986 14.5899 64.8361 15.0076Z" fill="#4F4747"/>
              <path d="M82.3815 43.7793C77.9911 43.7567 73.6406 44.8596 69.2592 45.1026C64.965 45.3382 60.6605 46.106 56.4556 46.8843C47.9344 48.4516 39.4622 51.1384 32.1532 55.8409C31.1827 56.4653 31.8251 58.0779 32.974 57.7236C41.1165 55.1825 49.3197 52.8633 57.5584 50.6913C61.5718 49.6264 65.6042 48.6144 69.6554 47.6554C73.9369 46.6475 78.3724 46.3567 82.6202 45.3192C83.5073 45.098 83.251 43.7813 82.3815 43.7793Z" fill="#4F4747"/>
              <path d="M32.2965 0.725762C30.183 4.57405 29.0778 8.92393 27.202 12.891C25.3612 16.7778 23.9834 20.9274 22.6622 24.9946C19.9763 33.2318 18.2976 41.9599 18.9456 50.6268C19.0316 51.7776 20.7553 51.982 20.9918 50.8032C22.6412 42.4344 24.5147 34.1181 26.5343 25.8407C27.5122 21.8052 28.5457 17.7783 29.6347 13.76C30.7905 9.51616 32.6501 5.47878 33.7639 1.25032C33.9925 0.365116 32.7129 -0.0375403 32.2965 0.725762Z" fill="#4F4747"/>
              </g>
            </svg>              
          </span>
        </h2>
        <div class="cs_height_44 cs_height_lg_30"></div>
        <a href="contact.php" class="cs_btn cs_style_1">Send Message <span><i class="fa-solid fa-arrow-right"></i></span></a>
        <div class="cs_height_150 cs_height_lg_80"></div>
      </div>
    </div>
    <!-- End CTA Section -->
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
