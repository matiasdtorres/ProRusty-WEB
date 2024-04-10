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
                  <li><a href="shop.php">Shop</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Ayuda</a>
                    <ul>
                      <li><a href="reglas.php">Reglas</a></li>
                      <li><a href="id.php">Mi ID</a></li>
                    </ul>
                  </li>
                  <li><a href="contacto.php">Contacto</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <a href="login.php" class="cs_header_cart"> <!-- mirar esta clase, en version mobile se queda y no se oculta cuando se abre el menu -->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" zoomAndPan="magnify" viewBox="0 0 375 374.999991" preserveAspectRatio="xMidYMid meet" version="1.0">
                  <defs>
                    <clipPath id="2ab03e4f9a">
                      <path d="M 5.433594 3.425781 L 369.933594 3.425781 L 369.933594 371.675781 L 5.433594 371.675781 Z M 5.433594 3.425781 " clip-rule="nonzero"/>
                    </clipPath>
                  </defs>
                  <g clip-path="url(#2ab03e4f9a)">
                    <path fill="#ff4a17" d="M 187.183594 3.445312 C 91.375 3.445312 12.886719 77.992188 5.433594 172.71875 L 103.183594 213.515625 C 111.464844 207.796875 121.476562 204.453125 132.238281 204.453125 C 133.207031 204.453125 134.167969 204.480469 135.113281 204.539062 L 178.59375 140.945312 L 178.59375 140.050781 C 178.59375 101.785156 209.445312 70.644531 247.363281 70.644531 C 285.285156 70.644531 316.136719 101.785156 316.136719 140.050781 C 316.136719 178.308594 285.285156 209.472656 247.363281 209.472656 C 246.839844 209.472656 246.324219 209.460938 245.800781 209.445312 L 183.800781 254.078125 C 183.839844 254.90625 183.855469 255.730469 183.855469 256.539062 C 183.855469 285.273438 160.699219 308.65625 132.238281 308.65625 C 107.253906 308.65625 86.347656 290.648438 81.625 266.808594 L 11.707031 237.636719 C 33.359375 314.898438 103.695312 371.539062 187.183594 371.539062 C 287.917969 371.539062 369.558594 289.125 369.558594 187.484375 C 369.558594 85.839844 287.917969 3.445312 187.183594 3.445312 Z M 119.722656 282.699219 L 97.324219 273.351562 C 101.289062 281.703125 108.164062 288.6875 117.285156 292.511719 C 136.992188 300.804688 159.71875 291.375 167.941406 271.476562 C 171.90625 261.832031 171.9375 251.207031 167.996094 241.546875 C 164.070312 231.890625 156.632812 224.351562 147.085938 220.339844 C 137.597656 216.371094 127.441406 216.515625 118.515625 219.914062 L 141.664062 229.574219 C 156.207031 235.6875 163.074219 252.527344 157.015625 267.207031 C 150.972656 281.871094 134.265625 288.8125 119.722656 282.699219 Z M 293.195312 140.050781 C 293.195312 114.554688 272.628906 93.792969 247.367188 93.792969 C 222.09375 93.792969 201.539062 114.554688 201.539062 140.050781 C 201.539062 165.550781 222.09375 186.285156 247.367188 186.285156 C 272.628906 186.285156 293.195312 165.550781 293.195312 140.050781 Z M 213.015625 139.96875 C 213.015625 120.785156 228.4375 105.234375 247.4375 105.234375 C 266.457031 105.234375 281.875 120.785156 281.875 139.96875 C 281.875 159.164062 266.457031 174.710938 247.4375 174.710938 C 228.4375 174.710938 213.015625 159.164062 213.015625 139.96875 Z M 213.015625 139.96875 " fill-opacity="1" fill-rule="nonzero"/>
                  </g>
                </svg>
              </a>
              <a href="https://discord.gg/VCzRg27DQx" target="_blank" class="cs_btn cs_style_discord cs_btn_white">Server Discord</a>
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
            The Bests Servers in LATAM 2024
          </p>
          <h1 class="cs_hero_title cs_fs_68 cs_white_color">Bienvenido a <br>ProRusty Servers</h1>
          <p class="cs_hero_subtitle">Buscabamos un servidor bien configurado y con poca latencia.<br> Como no lo encontramos decidimos crearlo.</p>
          <div class="cs_hero_btns">
            <a href="#" class="cs_btn cs_style_1 cs_btn_accent">Servidores
              <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
            <a href="https://www.youtube.com/embed/jWIBEyT70-E" class="cs_play_btn cs_style_1 cs_video_open">
              <img src="assets/img/icons/play.svg" alt="Icon">
              Reproducir video
            </a>
          </div>
        </div>
      </div>
      <div id="background-wrap" style="opacity: 0.09;">
        <div class="bubble cs_hero_shape_1">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_2">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_3">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_4">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_5">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_6">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_7">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_8">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_9">
          <img src="assets/img/tech-startup/rust.png" alt="">
        </div>
        <div class="bubble cs_hero_shape_10">
          <img src="assets/img/tech-startup/rust.png" alt="">
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
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
            </div>
            <div class="swiper-slide">
              <div class="text-center"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
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
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0">Características</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Nuestro objetivo es mejorar la experiencia en <br> LATAM</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
        <div class="row g-3">
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_2.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Servidor Alojado en Argentina</h2>
                <p class="cs_iconbox_subtitle">Conexión rápida y estable para jugadores de la región. Gracias a nuestro partner Histeria Servers</p>
                <a href="#" class="cs_btn cs_style_1">Aprende más
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_iconbox cs_style_4 cs_radius_5">
              <div class="cs_iconbox_icon">
                <img src="assets/img/tech-startup/feature_icon_1.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h2 class="cs_iconbox_title cs_fs_29">Precios Competitivos</h2>
                <p class="cs_iconbox_subtitle">Ofertas atractivas en rangos dentro del juego para mejorar tu experiencia.</p>
                <a href="#" class="cs_btn cs_style_1">Aprende más
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
                <h2 class="cs_iconbox_title cs_fs_29">Soporte 24/7</h2>
                <p class="cs_iconbox_subtitle">Asistencia constante a través de Discord para resolver cualquier problema.</p>
                <a href="#" class="cs_btn cs_style_1">Aprende más
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
                <h2 class="cs_iconbox_title cs_fs_29">Configuración Equilibrada</h2>
                <p class="cs_iconbox_subtitle">Ambiente de juego diseñado para un combate PvP y justo.</p>
                <a href="#" class="cs_btn cs_style_1">Aprende más
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
    <!-- Start Server -->
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
    <!-- End Server -->
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
    <!-- Start Team Section -->
    <section class="cs_p76_full_width">
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
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Nuestro equipo</p>
          <div class="cs_height_10 cs_height_lg_5"></div>
          <h2 class="cs_section_title cs_fs_50 mb-0">Conozca a nuestro equipo de detrás de<br> ProRusty</h2>
        </div>
        <div class="cs_height_85 cs_height_lg_45"></div>
      </div>
      <div class="cs_slider cs_slider_1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_2.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a>Sukor</a></h2>
                <p class="mb-0">Director & Developer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_1.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a>Massi</a></h2>
                <p class="mb-0">Admin & Developer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_3.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a>Clicon</a></h2>
                <p class="mb-0">Admin & Developer</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cs_team cs_style_1">
              <a class="cs_team_img cs_radius_5 overflow-hidden d-block"><img src="assets/img/studio-agency/team_4.jpg" alt="Team"></a>
              <div class="cs_team_info">
                <h2 class="cs_fs_29"><a>Blammed</a></h2>
                <p class="mb-0">Admin</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_pagination cs_style_1"></div>
      </div>
      </section>
    </section>
    <!-- End Team Section -->
    <!-- Start Moving Text -->
    <div class="cs_height_135 cs_height_lg_70"></div>
    <div class="cs_moving_text_wrap cs_style_1 cs_fs_68 text-uppercase cs_bold cs_primary_font">
      <div class="cs_moving_text_in">
        <div class="cs_moving_text">HOST EN ARGENTINA - ADMINS ACTIVOS - MEJORES PRECIOS -</div>
        <div class="cs_moving_text">HOST EN ARGENTINA - ADMINS ACTIVOS - MEJORES PRECIOS -</div>
      </div>
    </div>
    <!-- Start Moving Text -->
    <!-- Start Brands  -->
    <div class="cs_height_84 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_brands cs_style_1 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
        <div class="cs_brand"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
        <div class="cs_brand"><img src="assets/img/tech-startup/HisteriaServers.svg" alt="Brand"></div>
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
              <a href="https://discord.gg/VCzRg27DQx" target="_black" class="cs_center">
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
