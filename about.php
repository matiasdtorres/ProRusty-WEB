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
    <title>ProRusty - About Us</title>
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
    <div class="cursor" id="client_cursor">Cursor</div>
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
                  <li><a href="shop.php">Shop</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Ayuda</a>
                    <ul>
                      <li><a href="reglas.php">Reglas</a></li>
                      <li><a href="id.php">Mi ID</a></li>
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
        <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</p>
        <div class="cs_height_20 cs_height_lg_10"></div>
        <h2 class="cs_section_title cs_fs_68 mb-0">Adding value to your business, <br>making it worthy</h2>
      </div>
      <div class="cs_shape_1"></div>
    </div>
    <div class="cs_height_75 cs_height_lg_60"></div>
    <!-- End Page Heading -->
    <!-- Start Company Info -->
    <div class="cs_about cs_style_1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="cs_about_thumb cs_bg_filed" data-src="assets/img/digital-agency/about_1.jpg"></div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Company Info</p>
              <div class="cs_height_10 cs_height_lg_5"></div>
              <h2 class="cs_section_title cs_fs_50 mb-0">Marketing agency for your business</h2>
              <div class="cs_height_24 cs_height_lg_24"></div>
              <p>Our team, specializing in strategic digital marketing, partners with aiming the world's leading brands. Breaking from the norm, we push boundaries and do merge imaginative thinking posible. dolores eos qui ratione voluptatem lipe sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam ever the world lorem ipsum.</p>
              <div class="cs_height_20 cs_height_lg_20"></div>
              <a href="service.php" class="cs_btn cs_style_1">
                See Our Services 
                <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Company Info -->
    <!-- Start Counter -->
    <div class="cs_height_125 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_counter_1_wrap">
        <div class="cs_counter cs_style_1 position-relative d-flex align-items-center">
          <div class="cs_counter_nmber mb-0 cs_fs_68 d-flex align-items-center cs_bold cs_primary_color"><span data-count-to="22" class="odometer"></span>k</div>
          <p class="cs_counter_title mb-0">Happy Customers</p>
        </div>
        <div class="cs_counter cs_style_1 position-relative d-flex align-items-center">
          <div class="cs_counter_nmber mb-0 cs_fs_68 d-flex align-items-center cs_bold cs_primary_color"><span data-count-to="15" class="odometer"></span>k</div>
          <p class="cs_counter_title mb-0">Work’s Completed</p>
        </div>
        <div class="cs_counter cs_style_1 position-relative d-flex align-items-center">
          <div class="cs_counter_nmber mb-0 cs_fs_68 d-flex align-items-center cs_bold cs_primary_color"><span data-count-to="121" class="odometer"></span></div>
          <p class="cs_counter_title mb-0">Skilled Team Members</p>
        </div>
        <div class="cs_counter cs_style_1 position-relative d-flex align-items-center">
          <div class="cs_counter_nmber mb-0 cs_fs_68 d-flex align-items-center cs_bold cs_primary_color"><span data-count-to="15" class="odometer"></span></div>
          <p class="cs_counter_title mb-0">Most Valuable Awards</p>
        </div>
      </div>
    </div>
    <div class="cs_height_125 cs_height_lg_70"></div>
    <!-- End Counter -->
    <!-- Start What We Do -->
    <div class="cs_about cs_style_2 cs_type_1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">What We Do</p>
              <div class="cs_height_10 cs_height_lg_5"></div>
              <h2 class="cs_section_title cs_fs_50 mb-0">Best value service provider agency</h2>
              <div class="cs_height_24 cs_height_lg_24"></div>
              <p>We make specializing in strategic digital marketing, partners with aiming the world's leading brands. Breaking from the norm, we push boundaries and do merge imaginative thinking posible dolores.</p>
              <div class="cs_height_30 cs_height_lg_30"></div>
              <div class="cs_progressbar cs_style_1">
                <div class="cs_progressbar_heading d-flex justify-content-between align-items-center">
                  <h3 class="cs_medium m-0 cs_fs_16">Digital Marketing</h3>
                  <h3 class="cs_medium m-0 cs_fs_16">75%</h3>
                </div>
                <div class="cs_progress cs_gray_bg_2" data-progress="75">
                  <div class="cs_progress_in cs_accent_bg cs_rounded_8 h-100"></div>
                </div>
              </div>
              <div class="cs_progressbar cs_style_1">
                <div class="cs_progressbar_heading d-flex justify-content-between align-items-center">
                  <h3 class="cs_medium m-0 cs_fs_16">Brand Strategy</h3>
                  <h3 class="cs_medium m-0 cs_fs_16">85%</h3>
                </div>
                <div class="cs_progress cs_gray_bg_2" data-progress="90">
                  <div class="cs_progress_in cs_accent_bg cs_rounded_8 h-100"></div>
                </div>
              </div>
              <div class="cs_progressbar cs_style_1">
                <div class="cs_progressbar_heading d-flex justify-content-between align-items-center">
                  <h3 class="cs_medium m-0 cs_fs_16">Competitor Analysis</h3>
                  <h3 class="cs_medium m-0 cs_fs_16">80%</h3>
                </div>
                <div class="cs_progress cs_gray_bg_2" data-progress="80">
                  <div class="cs_progress_in cs_accent_bg cs_rounded_8 h-100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="cs_about_thumb">
              <div class="cs_sales_card text-center">
                <h3 class="cs_fs_21 cs_semibold">Sales Increase</h3>
                <h2 class="cs_fs_50 cs_accent_color"><span data-count-to="25" class="odometer"></span>%</h2>
                <svg width="151" height="45" viewBox="0 0 151 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 44C5.42105 35.1111 19.2 18.321 38.9474 22.2716C63.6316 27.2099 59.9474 41.0371 72.8421 36.0988C85.7368 31.1605 86.1053 9.92598 96.4211 6.96302C104.674 4.59266 115.825 8.60911 120.368 10.9136L131.789 16.3457C137.193 18.8148 148 19.8025 148 4" stroke="#121212" stroke-width="2" stroke-linecap="round"/>
                  <circle cx="148" cy="3" r="2.5" fill="#121212" stroke="#121212"/>
                </svg>                  
              </div>
              <div class="cs_about_thumb_in cs_bg_filed" data-src="assets/img/digital-agency/about_2.jpg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <!-- Start What We Do -->
    <!-- Start How we work -->
    <section class="cs_primary_bg">
      <div class="cs_height_150 cs_height_lg_70"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_4 text-center">
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 cs_white_color">
            <span class="d-inline-flex position-relative wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              How we work
              <svg width="84" height="77" viewBox="0 0 84 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M65.3624 15.1377C61.5058 17.236 58.2272 20.3009 54.5066 22.6275C50.8588 24.9056 47.4588 27.6547 44.151 30.3651C37.4432 35.8488 31.3183 42.2895 27.1848 49.9347C26.6359 50.9499 27.9765 52.0525 28.812 51.1879C34.7183 45.0338 40.785 39.0449 46.9536 33.1677C49.9554 30.2987 52.9992 27.4669 56.0852 24.6724C59.3492 21.7241 63.0941 19.3295 66.3144 16.3714C66.9847 15.7497 66.125 14.72 65.3624 15.1377Z" fill="#4F4747"/>
                <path d="M82.9079 43.9094C78.5174 43.8868 74.167 44.9898 69.7856 45.2327C65.4914 45.4683 61.1869 46.2361 56.9819 47.0144C48.4608 48.5818 39.9886 51.2685 32.6796 55.9711C31.7091 56.5955 32.3514 58.208 33.5003 57.8537C41.6428 55.3126 49.8461 52.9935 58.0848 50.8214C62.0982 49.7565 66.1305 48.7445 70.1818 47.7855C74.4632 46.7776 78.8987 46.4868 83.1466 45.4494C84.0337 45.2281 83.7774 43.9114 82.9079 43.9094Z" fill="#4F4747"/>
                <path d="M32.8229 0.855889C30.7094 4.70418 29.6042 9.05405 27.7283 13.0211C25.8876 16.9079 24.5097 21.0576 23.1886 25.1247C20.5027 33.362 18.824 42.09 19.4719 50.7569C19.558 51.9078 21.2816 52.1121 21.5181 50.9334C23.1675 42.5645 25.041 34.2482 27.0607 25.9708C28.0386 21.9353 29.0721 17.9084 30.1611 13.8902C31.3169 9.64629 33.1765 5.6089 34.2903 1.38044C34.5189 0.495243 33.2393 0.0925867 32.8229 0.855889Z" fill="#4F4747"/>
              </svg>
            </span>              
          </h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="cs_working_process_wrap cs_center">
          <div class="cs_working_process">
            <div class="cs_working_process_col">
              <div class="cs_iconbox cs_style_6 text-center cs_center">
                <div class="cs_iconbox_bg cs_bg_filed" data-src="assets/img/others/process_1.png"></div>
                <div class="cs_iconbox_in">
                  <div class="cs_iconbox_icon"><img src="assets/img/icons/search.svg" alt="Icon"></div>
                  <h2 class="cs_iconbox_title cs_white_color cs_fs_29">Research</h2>
                  <p class="cs_iconbox_subtitle cs_gray_color_2 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem own disilope accusantium doloremque laudantium, totam remen.</p>
                </div>
              </div>
            </div>
            <div class="cs_working_process_col">
              <div class="cs_iconbox cs_style_6 text-center cs_center">
                <div class="cs_iconbox_bg cs_bg_filed" data-src="assets/img/others/process_2.png"></div>
                <div class="cs_iconbox_in">
                  <div class="cs_iconbox_icon"><img src="assets/img/icons/idea.svg" alt="Icon"></div>
                  <h2 class="cs_iconbox_title cs_white_color cs_fs_29">Idea Generate</h2>
                  <p class="cs_iconbox_subtitle cs_gray_color_2 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem own disilope accusantium doloremque laudantium, totam remen.</p>
                </div>
              </div>
            </div>
            <div class="cs_working_process_col">
              <div class="cs_iconbox cs_style_6 text-center cs_center">
                <div class="cs_iconbox_bg cs_bg_filed" data-src="assets/img/others/process_3.png"></div>
                <div class="cs_iconbox_in">
                  <div class="cs_iconbox_icon"><img src="assets/img/icons/gear.svg" alt="Icon"></div>
                  <h2 class="cs_iconbox_title cs_white_color cs_fs_29">Implement</h2>
                  <p class="cs_iconbox_subtitle cs_gray_color_2 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem own disilope accusantium doloremque laudantium, totam remen.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End How we work -->
    <!-- Start Team Section -->
    <section class="cs_p76_full_width">
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Team</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0">Meet our experts team behind <br>the ProRusty</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
      </div>
      <div class="cs_slider cs_slider_1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_1.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">James Berline</a></h2>
                <p class="mb-0">React Developer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_2.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Bella Zubena</a></h2>
                <p class="mb-0">Graphic Designer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_3.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Kemnei Alekzend</a></h2>
                <p class="mb-0">Digital Marketer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a href="team-details.php" class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_4.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a href="team-details.php">Juliya Jesmine</a></h2>
                <p class="mb-0">UX Researcher</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_pagination cs_style_1"></div>
      </div>
    </section>
    <!-- End Team Section -->
    <!-- Start Moving Text -->
    <div class="cs_height_135 cs_height_lg_70"></div>
    <div class="cs_moving_text_wrap cs_style_1 cs_fs_68 text-uppercase cs_bold cs_primary_font">
      <div class="cs_moving_text_in">
        <div class="cs_moving_text">We Create Design - Build App - Website - Branding - SEO</div>
        <div class="cs_moving_text">We Create Design - Build App - Website - Branding - SEO</div>
      </div>
    </div>
    <!-- Start Moving Text -->
    <!-- Start Brands  -->
    <div class="cs_height_84 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_brands cs_style_1 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
        <div class="cs_brand"><img src="assets/img/marketing-agency/brand_1_dark.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/marketing-agency/brand_2_dark.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/marketing-agency/brand_3_dark.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/marketing-agency/brand_4_dark.svg" alt="Brand"></div>
      </div>
    </div>
    <div class="cs_height_135 cs_height_lg_80"></div>
    <!-- End Brands  -->
    <!-- Start Footer -->
    <footer class="cs_fooer cs_bg_filed">
      <div class="container">
        <div class="cs_bottom_footer">
          <div class="cs_bottom_footer_left">
            <div class="cs_social_btns cs_style_1">
              <a href="https://discord.gg/Zm7THPXVcd" target="_black" class="cs_center">
                <i class="fa-brands fa-discord"></i>
              </a>
              <a href="https://whatsapp.com/channel/0029VaZSlya9RZAeW9Nqgj46" target="_black" class="cs_center">
                <i class="fa-brands fa-whatsapp"></i>
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
