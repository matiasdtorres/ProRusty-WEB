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
  <title>ProRusty - Order Recived</title>
  <?php
    $bootstrap_css_file = 'assets/css/bootstrap.min.css';
    $fontawesome_css_file = 'assets/css/fontawesome.min.css';
    $animate_css_file = 'assets/css/animate.css';
    $swiper_css_file = 'assets/css/swiper.min.css';
    $odometer_css_file = 'assets/css/odometer.css';
    $jquery_ui_css_file = 'assets/css/jquery-ui.min.css';
    $slick_css_file = 'assets/css/slick.css';
    $css_file = 'assets/css/style.css';
    
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
            <a href="shop-cart.php" class="cs_header_cart">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_307_180)">
                <path d="M19.25 5.5H16.5C16.5 4.04131 15.9205 2.64236 14.8891 1.61091C13.8576 0.579463 12.4587 0 11 0C9.54131 0 8.14236 0.579463 7.11091 1.61091C6.07946 2.64236 5.5 4.04131 5.5 5.5H2.75C2.02065 5.5 1.32118 5.78973 0.805456 6.30546C0.289731 6.82118 0 7.52065 0 8.25L0 17.4167C0.00145554 18.6318 0.484808 19.7967 1.34403 20.656C2.20326 21.5152 3.3682 21.9985 4.58333 22H17.4167C18.6318 21.9985 19.7967 21.5152 20.656 20.656C21.5152 19.7967 21.9985 18.6318 22 17.4167V8.25C22 7.52065 21.7103 6.82118 21.1945 6.30546C20.6788 5.78973 19.9793 5.5 19.25 5.5ZM11 1.83333C11.9725 1.83333 12.9051 2.21964 13.5927 2.90728C14.2804 3.59491 14.6667 4.52754 14.6667 5.5H7.33333C7.33333 4.52754 7.71964 3.59491 8.40728 2.90728C9.09491 2.21964 10.0275 1.83333 11 1.83333ZM20.1667 17.4167C20.1667 18.146 19.8769 18.8455 19.3612 19.3612C18.8455 19.8769 18.146 20.1667 17.4167 20.1667H4.58333C3.85399 20.1667 3.15451 19.8769 2.63879 19.3612C2.12306 18.8455 1.83333 18.146 1.83333 17.4167V8.25C1.83333 8.00688 1.92991 7.77373 2.10182 7.60182C2.27373 7.42991 2.50688 7.33333 2.75 7.33333H5.5V9.16667C5.5 9.40978 5.59658 9.64294 5.76849 9.81485C5.94039 9.98676 6.17355 10.0833 6.41667 10.0833C6.65978 10.0833 6.89294 9.98676 7.06485 9.81485C7.23676 9.64294 7.33333 9.40978 7.33333 9.16667V7.33333H14.6667V9.16667C14.6667 9.40978 14.7632 9.64294 14.9352 9.81485C15.1071 9.98676 15.3402 10.0833 15.5833 10.0833C15.8264 10.0833 16.0596 9.98676 16.2315 9.81485C16.4034 9.64294 16.5 9.40978 16.5 9.16667V7.33333H19.25C19.4931 7.33333 19.7263 7.42991 19.8982 7.60182C20.0701 7.77373 20.1667 8.00688 20.1667 8.25V17.4167Z" fill="currentColor"/>
                </g>
                <defs>
                <clipPath id="clip0_307_180">
                <rect width="22" height="22" fill="white"/>
                </clipPath>
                </defs>
              </svg>
              <span class="cs_header_cart_label">0</span>   
            </a>
            <a href="https://discord.gg/Zm7THPXVcd" target="_blank" class="cs_btn cs_style_discord cs_btn_white">Server Discord</a>
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
      <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Shop</p>
      <div class="cs_height_20 cs_height_lg_10"></div>
      <h2 class="cs_section_title cs_fs_68 mb-0">Checkout page</h2>
    </div>
  </div>
  <div class="cs_height_125 cs_height_lg_50"></div>
  <!-- End Page Heading -->
  <div class="container">
    <p class="m-0 text-center">Thank you! Your order has been received.</p>
    <div class="cs_height_95 cs_height_lg_50"></div>
    <ul class="cs_order-summery">
      <li>
        <p>Order Number:</p>
        <h3>251501</h3>
      </li>
      <li>
        <p>Date:</p>
        <h3>September 11, 2023</h3>
      </li>
      <li>
        <p>Total:</p>
        <h3>$605.00</h3>
      </li>
      <li>
        <p>Payment method:</p>
        <h3>COD</h3>
      </li>
    </ul>
    <div class="cs_height_50 cs_height_lg_30"></div>
    <div class="cs_shop-card">
      <h2>Order details</h2>
      <table class="border-bottom-0">
        <tbody>
          <tr class="cs_semi_bold">
            <td>Products</td>
            <td class="text-end">Amount</td>
          </tr>
          <tr>
            <td>Awesome men T-shirt x 1</td>
            <td class="text-end">$20.00</td>
          </tr>
          <tr>
            <td>Future AI robot toy x 1</td>
            <td class="text-end">$550.00</td>
          </tr>
          <tr>
            <td>Hemp seed shampoo x 1</td>
            <td class="text-end">$35.00</td>
          </tr>
          <tr>
            <td class="cs_semi_bold">Subtotal</td>
            <td class="text-end">$605.00</td>
          </tr>
          <tr>
            <td class="cs_semi_bold">Payment method</td>
            <td class="text-end">Cash on delivery</td>
          </tr>
          <tr class="cs_semi_bold">
            <td class="pb-0">Total</td>
            <td class="text-end pb-0">$605.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="cs_height_150 cs_height_lg_80"></div>
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
    $jquery_ui_js_file = 'assets/js/jquery-ui.min.js';
    $slick_js_file = 'assets/js/jquery.slick.min.js';
    $main_js_file = 'assets/js/main.js';

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