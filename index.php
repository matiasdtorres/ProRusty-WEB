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
              <a href="https://discord.gg/Zm7THPXVcd" target="_blank" class="cs_btn cs_style_discord cs_btn_white">Server Discord</a>
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
        <div class="cs_section_heading cs_style_1 cs_type_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">By Histeria Servers</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Servidor alojado en <br> Argentina</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
          <?php
              require_once __DIR__ . '/servers/core.php';

              include 'servers/servers.php';
          ?>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End About Us -->
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
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">TIENDA</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Ofreciendo precios económicos <br>para nuestros usuarios</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
      </div>
      <div class="container">
        <div class="cs_tabs cs_style1">
          <ul class="cs_tab_links cs_style1 cs_mp0 cs_pricing_control">
            <li class="active">
              <a href="#tab_1">Pesos ARG</a>
              <span class="cs_switch"></span>
            </li>
            <li><a href="#tab_2">Dolar US</a></li>
          </ul>
          <div class="cs_tab_body">
            <div class="cs_tab active" id="tab_1">
              <div class="row">
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">NO FILA</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 650</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Te Permite Saltarte la Fila</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>BGRADE</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">BUILD+ <span>Popular</span></h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 1300</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 3 (metal)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 1900</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 3 (metal)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">CLAN VIP (Solo Lider)</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 2300</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Te Habilita en el panel de clan seleccionar <strong>SKINS</strong> de: ak, bolt y FullHQ</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>BGRADE</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP+</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 3500</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span><strong>BGRADE 4 (HQ)</strong></span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP OPAL</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">AR$ 4000</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 4 (HQ)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
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
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">NO FILA</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 1</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Te Permite Saltarte la Fila</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>BGRADE</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">BUILD+ <span>Popular</span></h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 1.50</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 3 (metal)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 2</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 3 (metal)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">CLAN VIP (Solo Lider)</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 2.50</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">                           
                        </span>
                        <span>Te Habilita en el panel de clan seleccionar <strong>SKINS</strong> de: ak, bolt y FullHQ</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>BGRADE</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP+</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 3.50</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span><strong>BGRADE 4 (HQ)</strong></span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/x.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
                    </div>
                  </div>
                  <div class="cs_height_25 cs_height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                  <div class="cs_pricing_table cs_style1 cs_radius_5">
                    <h2 class="cs_pricing_title cs_fs_29 cs_semibold">VIP OPAL</h2>
                    <div class="cs_pricing_info">
                      <div class="cs_price">
                        <h3 class="cs_accent_color cs_fs_50">U$D 4.50</h3>
                        <span class="cs_accent_color cs_medium">/ 30 días</span>
                      </div>
                    </div>
                    <ul class="cs_pricing_feature cs_mp0 cs_primary_font cs_fs_21">
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Permisos de NO FILA</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>BGRADE 4 (HQ)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit Build+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>AD (autodoor)</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>Kit VIP+</span>
                      </li>
                      <li>
                        <span class="cs_feature_icon cs_accent_color">
                          <img src="assets/img/icons/check.svg" alt="Icon">
                        </span>
                        <span>SkinBox</span>
                      </li>
                    </ul>
                    <div class="cs_pricing_btn_wrap">
                      <a href="#" class="cs_btn cs_style_1 cs_white_color">Seleccionar</a>
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
