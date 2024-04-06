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
    <title>ProRusty - Contact Us</title>
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
    <div class="cs_section_heading cs_style_1 cs_type_3 ">
      <div class="container">
        <p class="cs_section_subtitle cs_accent_color cs_fs_21 mb-0 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Contact</p>
        <div class="cs_height_20 cs_height_lg_10"></div>
        <h2 class="cs_section_title cs_fs_68 mb-0">Get in touch for more <br>information and support</h2>
      </div>
      <div class="cs_shape_4">
        <img src="assets/img/icons/mail.svg" alt="Mail">
      </div>
    </div>
    <div class="cs_height_85 cs_height_lg_45"></div>
    <!-- End Page Heading -->
    <!-- Start Contact Section -->
    <section>
      <div class="container">
        <div class="row align-items-center cs_gap_y_45">
          <div class="col-lg-6">
            <h2 class="cs_fs_50">Come & visit <br>our place!</h2>
            <div class="cs_height_55 cs_height_lg_30"></div>
            <ul class="cs_mp0 cs_contact_info">
              <li>
                <h3 class="cs_fs_29 cs_semibold">Email:</h3>
                <li><a href="">email@email.com</a></li>
              </li>
              <li>
                <h3 class="cs_fs_29 cs_semibold">Phone:</h3>
                <p class="mb-0">+54 45 454 78 23</p>
              </li>
              <li>
                <h3 class="cs_fs_29 cs_semibold">Address:</h3>
                <p class="mb-0">55/53 Jay Pathshala Apt. 908, USA</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="cs_contact_form_wrap">
              <div class="cs_gray_bg_3 cs_contact_form_bg"></div>
              <form class="cs_contact_form">
                <label class="cs_fs_21 cs_semibold cs_primary_color">Your full name</label>
                <input placeholder="Type your name" type="text" class="cs_form_field">
                <div class="cs_height_38 cs_height_lg_25"></div>
                <label class="cs_fs_21 cs_semibold cs_primary_color">Give valid email</label>
                <input placeholder="Type your email address" type="text" class="cs_form_field">
                <div class="cs_height_38 cs_height_lg_25"></div>
                <label class="cs_fs_21 cs_semibold cs_primary_color">Phone number</label>
                <input placeholder="Type your phone number" type="text" class="cs_form_field">
                <div class="cs_height_38 cs_height_lg_25"></div>
                <label class="cs_fs_21 cs_semibold cs_primary_color">Project brief</label>
                <textarea cols="30" rows="5" class="cs_form_field"></textarea>
                <div class="cs_height_38 cs_height_lg_25"></div>
                <button class="cs_btn cs_style_1">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_0 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Google Map -->
    <div class="cs_map">
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
    </div>
    <!-- End Google Map -->
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
