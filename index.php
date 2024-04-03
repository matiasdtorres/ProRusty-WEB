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
    <title>ProRusty</title>
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

    <!-- Start Hero -->
    <section class="cs_hero cs_style_5 position-relative text-center cs_center cs_ripple_activate cs_bg_filed" data-src="assets/img/tech-startup/hero-bg.jpg">
      <div class="container">
        <div class="cs_hero_text position-relative">
          <p class="cs_hero_top_title wow zoomIn" data-wow-duration="1.1s" data-wow-delay="0.2s">
            <img src="assets/img/icons/flower.svg" alt="Icon">
            Award Wining Startup on 2023
          </p>
          <h1 class="cs_hero_title cs_fs_68 cs_white_color">Empowering Businesses with <br> Our Startup Agency</h1>
          <p class="cs_hero_subtitle">Harness the boundless potential of Artificial Intelligence to transcend the realms of imagination and create <br>mesmerizing masterpieces that time and space, captivating hearts and minds with beauty.</p>
          <div class="cs_hero_btns">
            <a href="portfolio.php" class="cs_btn cs_style_1 cs_btn_accent">See All Project 
              <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="https://www.youtube.com/embed/VcaAVWtP48A" class="cs_play_btn cs_style_1 cs_video_open">
              <img src="assets/img/icons/play.svg" alt="Icon">
              Play Video
            </a>
          </div>
        </div>
      </div>
      <div id="background-wrap">
        <div class="bubble cs_hero_shape_1">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_2">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_3">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_4">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_5">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_6">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_7">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_8">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_9">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_10">
          <img src="assets/img/tech-startup/hero_circle_shape_1.png" alt="">
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <!-- Start Brands  -->
    <div class="cs_primary_bg">
      <div class="cs_height_95 cs_height_lg_60"></div>
      <div class="container">
        <div class="cs_slider cs_slider_3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_1.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_2.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_3.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_4.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_5.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_6.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/brand_1.svg" alt="Brand"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_95 cs_height_lg_60"></div>
    </div>
    <!-- End Brands  -->
    <!-- Start Features Section -->
    <section>
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Features</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our aim is to improve tech based <br> solution on business</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="row g-3">
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_1.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Data analysis and insights</h2>
                <p class="cs_iconbox_subtitle">AI can analyze large volumes of data quickly and accurate, valuable logtiguiative insights for decision making.</p>
                <a href="#" class="cs_btn cs_style_1">Learn More
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_2.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Data analysis and insights</h2>
                <p class="cs_iconbox_subtitle">AI can analyze large volumes of data quickly and accurate, valuable logtiguiative insights for decision making.</p>
                <a href="#" class="cs_btn cs_style_1">Learn More
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_3.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Data analysis and insights</h2>
                <p class="cs_iconbox_subtitle">AI can analyze large volumes of data quickly and accurate, valuable logtiguiative insights for decision making.</p>
                <a href="#" class="cs_btn cs_style_1">Learn More
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_4.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Data analysis and insights</h2>
                <p class="cs_iconbox_subtitle">AI can analyze large volumes of data quickly and accurate, valuable logtiguiative insights for decision making.</p>
                <a href="#" class="cs_btn cs_style_1">Learn More
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Features Section -->
    <!-- Start About Us -->
    <section class="cs_primary_bg">
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_2">
          <div class="cs_section_heading_left">
            <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">About Us</p>
            <div class="cs_height_10 cs_height_lg_5"></div>
            <h2 class="cs_section_title cs_fs_50 mb-0 cs_white_color wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">Imaginative solutions that drive <br>creativity & innovation.</h2>
          </div>
          <div class="cs_section_heading_right">
            <a href="about.php" class="cs_btn cs_style_1 cs_btn_white">Learn More
              <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
          </div>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="row g-3">
          <div class="col-lg-12">
            <div class="cs_goal cs_radius_5 cs_bg_filed" data-src="assets/img/tech-startup/goal.jpg">
              <div class="cs_goal_text">
                <p class="cs_goal_subtitle cs_white_color">Our Goal</p>
                <h2 class="cs_goal_title mb-0 cs_fs_29 cs_semibold cs_white_color">Revolutionize industries with cutting-edge solutions.</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_mission cs_radius_5">
              <span class="cs_primary_color cs_radius_15">Our Mission</span>
              <h2 class="cs_fs_29 cs_semibold">Empowering businesses through tech innovation.</h2>
              <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_vision cs_radius_5">
              <span class="cs_primary_color cs_radius_15">Our Vision</span>
              <h2 class="cs_fs_29 cs_semibold">Transforming businesses, shaping a smarter world.</h2>
              <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End About Us -->
    <!-- Start Service Section -->
    <section>
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Services</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our aim is to improve tech based <br> solution on business</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="row g-3">
          <div class="col-lg-6 col-xl-3">
            <div class="cs_iconbox cs_style_5 cs_primary_bg text-center cs_radius_5">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/tech-startup/service_icon_1.svg" alt="Icon"></div>
              <h2 class="cs_iconbox_title cs_white_color cs_fs_21"><a href="tech-startup.php">Chat Bot</a></h2>
              <p class="cs_iconbox_subtitle cs_gray_color_2">AI can analyze large volumes of data quickly and accurately, extracting valuable insights for decision making.</p>
              <a href="service-details.php" class="cs_iconbox_btn">
                <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45.0607 13.0616C45.6464 12.4759 45.6464 11.5261 45.0607 10.9403L35.5147 1.39437C34.9289 0.808588 33.9792 0.808588 33.3934 1.39437C32.8076 1.98016 32.8076 2.92991 33.3934 3.5157L41.8787 12.001L33.3934 20.4863C32.8076 21.072 32.8076 22.0218 33.3934 22.6076C33.9792 23.1934 34.9289 23.1934 35.5147 22.6076L45.0607 13.0616ZM0 13.501H44V10.501H0V13.501Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3">
            <div class="cs_iconbox cs_style_5 cs_primary_bg text-center cs_radius_5">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/tech-startup/service_icon_2.svg" alt="Icon"></div>
              <h2 class="cs_iconbox_title cs_white_color cs_fs_21"><a href="tech-startup.php">Email Client</a></h2>
              <p class="cs_iconbox_subtitle cs_gray_color_2">AI can analyze large volumes of data quickly and accurately, extracting valuable insights for decision making.</p>
              <a href="service-details.php" class="cs_iconbox_btn">
                <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45.0607 13.0616C45.6464 12.4759 45.6464 11.5261 45.0607 10.9403L35.5147 1.39437C34.9289 0.808588 33.9792 0.808588 33.3934 1.39437C32.8076 1.98016 32.8076 2.92991 33.3934 3.5157L41.8787 12.001L33.3934 20.4863C32.8076 21.072 32.8076 22.0218 33.3934 22.6076C33.9792 23.1934 34.9289 23.1934 35.5147 22.6076L45.0607 13.0616ZM0 13.501H44V10.501H0V13.501Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3">
            <div class="cs_iconbox cs_style_5 cs_primary_bg text-center cs_radius_5">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/tech-startup/service_icon_3.svg" alt="Icon"></div>
              <h2 class="cs_iconbox_title cs_white_color cs_fs_21"><a href="tech-startup.php">AI Algorithm</a></h2>
              <p class="cs_iconbox_subtitle cs_gray_color_2">AI can analyze large volumes of data quickly and accurately, extracting valuable insights for decision making.</p>
              <a href="service-details.php" class="cs_iconbox_btn">
                <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45.0607 13.0616C45.6464 12.4759 45.6464 11.5261 45.0607 10.9403L35.5147 1.39437C34.9289 0.808588 33.9792 0.808588 33.3934 1.39437C32.8076 1.98016 32.8076 2.92991 33.3934 3.5157L41.8787 12.001L33.3934 20.4863C32.8076 21.072 32.8076 22.0218 33.3934 22.6076C33.9792 23.1934 34.9289 23.1934 35.5147 22.6076L45.0607 13.0616ZM0 13.501H44V10.501H0V13.501Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3">
            <div class="cs_iconbox cs_style_5 cs_primary_bg text-center cs_radius_5">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/tech-startup/service_icon_4.svg" alt="Icon"></div>
              <h2 class="cs_iconbox_title cs_white_color cs_fs_21"><a href="tech-startup.php">Web Solution</a></h2>
              <p class="cs_iconbox_subtitle cs_gray_color_2">AI can analyze large volumes of data quickly and accurately, extracting valuable insights for decision making.</p>
              <a href="service-details.php" class="cs_iconbox_btn">
                <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45.0607 13.0616C45.6464 12.4759 45.6464 11.5261 45.0607 10.9403L35.5147 1.39437C34.9289 0.808588 33.9792 0.808588 33.3934 1.39437C32.8076 1.98016 32.8076 2.92991 33.3934 3.5157L41.8787 12.001L33.3934 20.4863C32.8076 21.072 32.8076 22.0218 33.3934 22.6076C33.9792 23.1934 34.9289 23.1934 35.5147 22.6076L45.0607 13.0616ZM0 13.501H44V10.501H0V13.501Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->
    <!-- Start Video Section -->
    <section>
      <div class="cs_height_130 cs_height_lg_70"></div>
      <div class="container">
        <h2 class="text-center cs_fs_68 cs_outline_text">Server</h2>
        <?php
            require_once __DIR__ . '/core.php';

            include 'servers.php';
        ?>
      </div>
    </section>
    <!-- End Video Section -->
    <!-- Start Funfact Section -->
    <div>
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
    </div>
    <!-- End Funfact Section -->
    <!-- Start Testimonial -->
    <div class="cs_testimonial_2_wrap cs_primary_bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="cs_testimonial_thumb cs_bg_filed" data-src="assets/img/tech-startup/testimonial_thumb.jpg"></div>
          </div>
          <div class="col-lg-6">
            <div class="cs_height_150 cs_height_lg_80"></div>
            <div class="cs_slider cs_slider_2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="cs_testimonial cs_style_1">
                    <div class="cs_testimonial_icon">
                      <svg width="56" height="40" viewBox="0 0 56 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 40H16L24 24V0H0V24H12L4 40ZM36 40H48L56 24V0H32V24H44L36 40Z" fill="currentColor"/>
                      </svg>            
                    </div>
                    <blockquote class="cs_testimonial_text cs_fs_21 cs_medium cs_white_color">Testimonio Prueba</blockquote>
                    <div class="cs_testimonial_info">
                      <h3 class="cs_fs_21 cs_semibold cs_white_color">Ansari Patron</h3>
                      <p class="cs_gray_color_2">CEO at Delta</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cs_testimonial cs_style_1">
                    <div class="cs_testimonial_icon">
                      <svg width="56" height="40" viewBox="0 0 56 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 40H16L24 24V0H0V24H12L4 40ZM36 40H48L56 24V0H32V24H44L36 40Z" fill="currentColor"/>
                      </svg>            
                    </div>
                    <blockquote class="cs_testimonial_text cs_fs_21 cs_medium cs_white_color">Testimonio Prueba</blockquote>
                    <div class="cs_testimonial_info">
                      <h3 class="cs_fs_21 cs_semibold cs_white_color">Ansari Patron</h3>
                      <p class="cs_gray_color_2">CEO at Delta</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cs_testimonial cs_style_1">
                    <div class="cs_testimonial_icon">
                      <svg width="56" height="40" viewBox="0 0 56 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 40H16L24 24V0H0V24H12L4 40ZM36 40H48L56 24V0H32V24H44L36 40Z" fill="currentColor"/>
                      </svg>            
                    </div>
                    <blockquote class="cs_testimonial_text cs_fs_21 cs_medium cs_white_color">Testimonio Prueba</blockquote>
                    <div class="cs_testimonial_info">
                      <h3 class="cs_fs_21 cs_semibold cs_white_color">Ansari Patron</h3>
                      <p class="cs_gray_color_2">CEO at Delta</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_pagination"></div>
              <div class="cs_swiper_navigation cs_style_1">
                <div class="cs_swiper_prev">
                  <svg width="42" height="24" viewBox="0 0 42 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.807612 11.0711 0.807612 10.4853 1.3934L0.93934 10.9393ZM42 10.5L2 10.5V13.5L42 13.5V10.5Z" fill="currentColor"/>
                  </svg>           
                </div>
                <div class="cs_swiper_next">
                  <svg width="42" height="24" viewBox="0 0 42 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.0607 13.0607C41.6464 12.4749 41.6464 11.5251 41.0607 10.9393L31.5147 1.3934C30.9289 0.807611 29.9792 0.807611 29.3934 1.3934C28.8076 1.97919 28.8076 2.92893 29.3934 3.51472L37.8787 12L29.3934 20.4853C28.8076 21.0711 28.8076 22.0208 29.3934 22.6066C29.9792 23.1924 30.9289 23.1924 31.5147 22.6066L41.0607 13.0607ZM0 13.5H40V10.5H0V13.5Z" fill="currentColor"/>
                  </svg>  
                </div>
              </div>
            </div>
            <div class="cs_height_150 cs_height_lg_80"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonial -->
    <!-- Start Pricing Section -->
    <section class="cs_shape_animation_2">
      <div class="cs_shape_1 position-absolute">
        <svg width="57" height="41" viewBox="0 0 57 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.5" d="M55.1923 32.7347C52.209 37.0618 42.704 43.3879 40.3199 34.8097C39.0585 30.2359 42.6536 24.5172 43.1266 19.9687C43.8204 13.2821 39.973 5.41874 32.4359 6.05135C31.8886 6.10385 31.3452 6.19047 30.8086 6.31072C29.5308 4.21019 27.6918 2.5107 25.5002 1.40489C23.3085 0.299087 20.8519 -0.168816 18.4087 0.0542238C11.0797 0.743766 5.31489 7.39247 2.40097 13.6616C0.297443 17.9159 -0.0470809 22.831 1.44227 27.3386C2.02253 28.9897 4.52649 28.3381 4.07868 26.6111C2.33789 19.994 6.55742 12.4976 11.1238 7.99978C15.6903 3.50194 23.1517 2.572 26.8919 7.71511C22.3191 9.96086 18.2321 14.1614 15.6019 17.957C12.4483 22.5245 9.15598 31.3746 15.1794 35.2589C21.0135 39.0165 27.7181 36.5241 30.9852 30.8306C34.3217 24.9727 34.2461 16.9828 32.6377 10.6251C32.4379 9.84013 32.1764 9.07227 31.8556 8.32873C34.7948 7.65817 37.6078 8.80319 39.4747 11.7765C42.4517 16.502 40.9317 21.6009 39.5126 26.5289C38.1691 31.1785 36.6617 38.618 42.9185 40.5728C48.4057 42.2935 54.6246 38.6054 56.4853 33.2978C56.7691 32.507 55.6275 32.1085 55.1923 32.7347ZM27.8253 28.0345C26.6396 30.7231 24.5519 32.7537 21.5181 32.9751C16.3336 33.3547 15.3434 29.0909 16.4723 25.0739C18.1122 19.3298 23.2274 13.4845 28.1407 10.0684C28.1664 10.1199 28.1896 10.1727 28.2101 10.2266C30.2749 16.0071 30.1378 22.349 27.8253 28.0345Z" fill="#4F4747"/>
        </svg>               
      </div>
      <div class="cs_shape_2 position-absolute">
        <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.5" d="M1.83883 0.992714L20.9086 13.6609L0.402728 23.8417L1.83883 0.992714Z" fill="#4F4747"/>
          </svg>                       
      </div>
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Our Pricing</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Offering budget friendly pricing <br>solutions for your business</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
      </div>
      <div class="container">
        <div class="cs_tabs cs_style1">
          <ul class="cs_tab_links cs_style1 cs_mp0 cs_pricing_control">
            <li class="active">
              <a href="#tab_1">Monthly</a>
              <span class="cs_switch"></span>
            </li>
            <li><a href="#tab_2">Yearly</a></li>
          </ul>
          <div class="cs_tab_body">
            <div class="cs_tab active" id="tab_1">
              <div class="row">
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Silver</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$399</h3>
                        <span class="cs_accent_color cs_medium">/month</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Limited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Branding consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Video ad banner</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Gold <span>Popular</span></h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$449</h3>
                        <span class="cs_accent_color cs_medium">/month</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Limited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Social ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Premium consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Secret strategy</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Platinum</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$599</h3>
                        <span class="cs_accent_color cs_medium">/Yearly</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Unlimited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Branding consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Video ad banner</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
              </div>
            </div><!-- .cs_tab -->
            <div class="cs_tab" id="tab_2">
              <div class="row">
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Silver</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$499</h3>
                        <span class="cs_accent_color cs_medium">/month</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Limited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Branding consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Video ad banner</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Gold <span>Popular</span></h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$549</h3>
                        <span class="cs_accent_color cs_medium">/month</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Limited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Social ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Premium consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Secret strategy</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">Platinum</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">$899</h3>
                        <span class="cs_accent_color cs_medium">/Yearly</span>
                      </div>
                      <div class="cs_price_text cs_gray_color_2">Control your choices for effective business growth and more customers.</div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Unlimited content</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Ad campaign</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Branding consultancy</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Video ad banner</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Choose Packedge</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
              </div>
            </div><!-- .cs_tab -->
          </div><!-- .cs_tab_body -->
        </div><!-- .cs_tabs -->
      </div>
      <div class="cs_height_125 cs_height_lg_55"></div>
    </section>
    <!-- End Pricing Section -->
    <!-- Start Blog Section -->
    <section class="cs_p76_full_width cs_gray_bg_2">
      <div class="cs_height_143 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Our Blog</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Exploring the world of innovation <br>in our recent news</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
      </div>
      <div class="cs_slider cs_slider_1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="cs_post cs_style_1 position-relative overflow-hidden cs_radius_5">
              <a href="blog-details.php" class="cs_post_thumb cs_image_blur_effect">
                <img src="assets/img/creative-agency/post_1.jpg" alt="Thumb">
                <img src="assets/img/creative-agency/post_1.jpg" alt="Thumb">
              </a>
              <div class="cs_post_overlay h-100 w-100 position-absolute start-0 bottom-0"></div>
              <div class="cs_post_info position-absolute w-100 start-0 bottom-0 d-flex flex-column justify-content-end">
                <span class="cs_posted_by">07 Mar 2023</span>
                <div class="cs_height_10 cs_height_lg_5"></div>
                <h2 class="cs_post_title cs_fs_21 cs_white_color mb-0"><a href="blog-details.php">How to keep fear from ruining your art business with confident</a></h2>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_post cs_style_1 position-relative overflow-hidden cs_radius_5">
              <a href="blog-details.php" class="cs_post_thumb cs_image_blur_effect">
                <img src="assets/img/creative-agency/post_2.jpg" alt="Thumb">
                <img src="assets/img/creative-agency/post_2.jpg" alt="Thumb">
              </a>
              <div class="cs_post_overlay h-100 w-100 position-absolute start-0 bottom-0"></div>
              <div class="cs_post_info position-absolute w-100 start-0 bottom-0 d-flex flex-column justify-content-end">
                <span class="cs_posted_by">22 Apr 2023</span>
                <div class="cs_height_10 cs_height_lg_5"></div>
                <h2 class="cs_post_title cs_fs_21 cs_white_color mb-0"><a href="blog-details.php">Artistic mind will be great for creation anything</a></h2>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_post cs_style_1 position-relative overflow-hidden cs_radius_5">
              <a href="blog-details.php" class="cs_post_thumb cs_image_blur_effect">
                <img src="assets/img/creative-agency/post_3.jpg" alt="Thumb">
                <img src="assets/img/creative-agency/post_3.jpg" alt="Thumb">
              </a>
              <div class="cs_post_overlay h-100 w-100 position-absolute start-0 bottom-0"></div>
              <div class="cs_post_info position-absolute w-100 start-0 bottom-0 d-flex flex-column justify-content-end">
                <span class="cs_posted_by">13 May 2023</span>
                <div class="cs_height_10 cs_height_lg_5"></div>
                <h2 class="cs_post_title cs_fs_21 cs_white_color mb-0"><a href="blog-details.php">AI will take over all job for human within few years</a></h2>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_post cs_style_1 position-relative overflow-hidden cs_radius_5">
              <a href="blog-details.php" class="cs_post_thumb cs_image_blur_effect">
                <img src="assets/img/creative-agency/post_4.jpg" alt="Thumb">
                <img src="assets/img/creative-agency/post_4.jpg" alt="Thumb">
              </a>
              <div class="cs_post_overlay h-100 w-100 position-absolute start-0 bottom-0"></div>
              <div class="cs_post_info position-absolute w-100 start-0 bottom-0 d-flex flex-column justify-content-end">
                <span class="cs_posted_by">15 Mar 2023</span>
                <div class="cs_height_10 cs_height_lg_5"></div>
                <h2 class="cs_post_title cs_fs_21 cs_white_color mb-0"><a href="blog-details.php">Your agency need to replace some artistic mind people</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_pagination cs_style_1"></div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->
    <!-- Start CTA Section -->
    <section>
      <div class="cs_height_150 cs_height_lg_80"></div>
      <div class="container">
        <div class="cs_cta cs_style_1 cs_bg_filed position-relative cs_radius_5 overflow-hidden text-center" data-src="assets/img/tech-startup/cta_bg.jpg">
          <div class="cs_cta_in position-relative">
            <h2 class="cs_cta_title cs_fs_50 cs_white_color mb-0">Is there a specific project or goal that you have in mind?</h2>
            <div class="cs_height_45 cs_height_lg_30"></div>
            <a href="contact.php" class="cs_btn cs_style_1 cs_btn_white">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
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
