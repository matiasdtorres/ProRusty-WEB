<!DOCTYPE html>
<html class="no-js" lang="es-AR">


<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Sukor">
  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png" />
  <link rel="shortcut icon" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png" />
  <link rel="apple-touch-icon" href="../assets/img/favicon/apple-touch-icon.png" />
  <link rel="android-chrome" sizes="192x192" href="../assets/img/favicon/android-chrome-192x192.png" />
  <link rel="android-chrome" sizes="512x512" href="../assets/img/favicon/android-chrome-512x512.png" />
  <!-- Site Title -->
  <title>ProRusty - Detalles de producto</title>
  <?php
    $bootstrap_css_file = '../assets/css/bootstrap.min.css';
    $fontawesome_css_file = '../assets/css/fontawesome.min.css';
    $animate_css_file = '../assets/css/animate.css';
    $swiper_css_file = '../assets/css/swiper.min.css';
    $odometer_css_file = '../assets/css/odometer.css';
    $jquery_ui_css_file = '../assets/css/jquery-ui.min.css';
    $slick_css_file = '../assets/css/slick.css';
    $css_file = '../assets/css/style.css';
    
    $bootstrap_css_version = filemtime($bootstrap_css_file);
    $fontawesome_css_version = filemtime($fontawesome_css_file);
    $animate_css_version = filemtime($animate_css_file);
    $swiper_css_version = filemtime($swiper_css_file);
    $odometer_css_version = filemtime($odometer_css_file);
    $jquery_ui_css_version = filemtime($jquery_ui_css_file);
    $slick_css_version = filemtime($slick_css_file);
    $css_version = filemtime($css_file);
  ?>

  <link rel="stylesheet" href="<?php echo $bootstrap_css_file; ?>?v=<?php echo $bootstrap_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $fontawesome_css_file; ?>?v=<?php echo $fontawesome_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $animate_css_file; ?>?v=<?php echo $animate_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $swiper_css_file; ?>?v=<?php echo $swiper_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $odometer_css_file; ?>?v=<?php echo $odometer_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $jquery_ui_css_file; ?>?v=<?php echo $jquery_ui_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $slick_css_file; ?>?v=<?php echo $slick_css_version; ?>">
  <link rel="stylesheet" href="<?php echo $css_file; ?>?v=<?php echo $css_version; ?>">

  <?php require_once 'funciones/prices.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_sticky_header cs_primary_color">
    <div class="cs_main_header">
      <div class="container">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="../index.php">
              <img src="../assets/img/logo.svg" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_medium cs_primary_font">
              <ul class="cs_nav_list">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../shop.php">Shop</a></li>
                <li class="menu-item-has-children">
                  <a href="#">Ayuda</a>
                  <ul>
                    <li><a href="../reglas.php">Reglas</a></li>
                    <li><a href="../id.php">Mi ID</a></li>
                  </ul>
                </li>
                <li><a href="../contacto.php">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_main_header_right">
              <a href="../login.php" class="cs_header_cart">
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
  <!-- Start Page Heading -->
  <div class="cs_height_70 cs_height_lg_70"></div>
  <div class="cs_height_150 cs_height_lg_70"></div>
  <div class="cs_section_heading cs_style_1 cs_type_3 text-center">
    <div class="container">
      <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Rango</p>
      <div class="cs_height_20 cs_height_lg_10"></div>
      <h2 class="cs_section_title cs_fs_68 mb-0">CLAN VIP</h2>
    </div>
  </div>
  <div class="cs_height_125 cs_height_lg_50"></div>
  <!-- End Page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cs_single_product_thumb">
          <div class="cs_single_product_thumb_item">
            <img src="../assets/img/shop/clanvip/clanvip.jpg" alt="Thumb">
          </div>
          <div class="cs_single_product_thumb_item">
            <img src="../assets/img/shop/clanvip/skinclan.jpg" alt="Thumb">
          </div>
        </div>
        <div class="cs_single_product_nav">
          <div class="cs_single_product_thumb_mini">
            <img src="../assets/img/shop/clanvip/clanvip-mini.jpg" alt="Thumb">
          </div>
          <div class="cs_single_product_thumb_mini">
            <img src="../assets/img/shop/clanvip/skinclan-mini.jpg" alt="Thumb">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cs_single-product-details">
          <h2 id="clan_vip-price"><?php echo $currency; ?>: <?php echo ($currency === 'USD') ? number_format($finalPriceCLAN_VIP, 2) : $finalPriceCLAN_VIP; ?></h2>
          <div class="cs_single_product-price_review">
            <div class="cs_single_product_price cs_accent_color cs_primary_font cs_semi_bold">
            <form id="currency-form" action="#" class="cs_shop_filter_form" method="get">
              <select name="currency" id="currency">
                <option value="ARS" <?php if ($currency === 'ARS') echo 'selected'; ?>>ARS</option>
                <option value="USD" <?php if ($currency === 'USD') echo 'selected'; ?>>USD</option>
              </select>
            </form>
            </div>
          </div>
          <div class="cs_height_25 cs_height_lg_25"></div>
          <div class="cs_single-product-details-text">
            <p>Otorga al líder del clan el privilegio de seleccionar skins específicas para ciertos objetos, como la Máscara de Metal, la Pechera de Metal, la Falda de Señales de Tráfico, la Sudadera, los Pantalones, las Botas, el AK-47 y el Bolt. Estas skins elegidas se aplican automáticamente a los miembros del clan que posean esos objetos.</p>
            <p>Basicamente skinbox</p>
          </div>
          <div class="cs_height_35 cs_height_lg_35"></div>
          <div class="cs_quantity_and_btn">
            <a href="#" class="cs_product_btn cs_semi_bold">Obtener</a>
          </div>
          <div class="cs_height_40 cs_height_lg_30"></div>
        </div>
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_60"></div>
  </div>
  <!-- Start Script Precios -->
  <script>
        $(document).ready(function(){
            $('#currency').change(function(){
                $.ajax({
                    url: 'funciones/update_prices.php',
                    type: 'GET',
                    data: $('#currency-form').serialize(),
                    success: function(response){
                        var prices = JSON.parse(response);
                        $('#clan_vip-price').html(prices.currency + ": " + (prices.currency === 'USD' ? prices.finalPriceCLAN_VIP.toFixed(2) : prices.finalPriceCLAN_VIP));
                    }
                });
            });
        });
  </script>
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

  <span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor"/>
    </svg>      
  </span>
  
  <!-- Start Video Popup -->
  <div class="cs_video_popup">
    <div class="cs_video_popup_overlay"></div>
    <div class="cs_video_popup_content">
      <div class="cs_video_popup_layer"></div>
      <div class="cs_video_popup_container">
        <div class="cs_video_popup_align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="cs_video_popup_close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Start Scroll Up -->
  <span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
  </span>
  <!-- End Scroll Up -->

  <!-- Scripts -->
  <?php
      $jquery_js_file = '../assets/js/jquery-3.6.0.min.js';
      $wow_js_file = '../assets/js/wow.min.js';
      $swiper_js_file = '../assets/js/swiper.min.js';
      $odometer_js_file = '../assets/js/odometer.js';
      $ripples_js_file = '../assets/js/ripples.min.js';
      $isotope_js_file = '../assets/js/isotope.pkg.min.js';
      $gsap_js_file = '../assets/js/gsap.min.js';
      $jquery_ui_js_file = '../assets/js/jquery-ui.min.js';
      $slick_js_file = '../assets/js/jquery.slick.min.js';
      $main_js_file = '../assets/js/main.js';

      $jquery_js_version = filemtime($jquery_js_file);
      $wow_js_version = filemtime($wow_js_file);
      $swiper_js_version = filemtime($swiper_js_file);
      $odometer_js_version = filemtime($odometer_js_file);
      $ripples_js_version = filemtime($ripples_js_file);
      $isotope_js_version = filemtime($isotope_js_file);
      $gsap_js_version = filemtime($gsap_js_file);
      $jquery_ui_js_version = filemtime($jquery_ui_js_file);
      $slick_js_version = filemtime($slick_js_file);
      $main_js_version = filemtime($main_js_file);
    ?>
    <script src="<?php echo $jquery_js_file; ?>?v=<?php echo $jquery_js_version; ?>"></script>
    <script src="<?php echo $wow_js_file; ?>?v=<?php echo $wow_js_version; ?>"></script>
    <script src="<?php echo $swiper_js_file; ?>?v=<?php echo $swiper_js_version; ?>"></script>
    <script src="<?php echo $odometer_js_file; ?>?v=<?php echo $odometer_js_version; ?>"></script>
    <script src="<?php echo $ripples_js_file; ?>?v=<?php echo $ripples_js_version; ?>"></script>
    <script src="<?php echo $isotope_js_file; ?>?v=<?php echo $isotope_js_version; ?>"></script>
    <script src="<?php echo $gsap_js_file; ?>?v=<?php echo $gsap_js_version; ?>"></script>
    <script src="<?php echo $jquery_ui_js_file; ?>?v=<?php echo $jquery_ui_js_version; ?>"></script>
    <script src="<?php echo $slick_js_file; ?>?v=<?php echo $slick_js_version; ?>"></script>
    <script src="<?php echo $main_js_file; ?>?v=<?php echo $main_js_version; ?>"></script>
  <!-- End Scripts -->
</body>

</html>