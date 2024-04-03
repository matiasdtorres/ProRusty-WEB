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
  <title>ProRusty - Wishlist</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  
    <?php
    $css_file = 'assets/css/style.css';
    $css_version = filemtime($css_file);
    ?>
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
                <li class="menu-item-has-children cs_mega_menu">
                  <a href="index.php">Home</a>
                  <ul class="cs_mega_wrapper">
                    <li class="menu-item-has-children">
                      <a href="#">Dark Version</a>
                      <ul>
                        <li><a href="index.php">Creative Agency</a></li>
                        <li><a href="marketing-agency.php">Marketing Agency</a></li>
                        <li><a href="studio-agency.php">Studio Agency</a></li>
                        <li><a href="digital-agency.php">Digital Agency</a></li>
                        <li><a href="tech-startup.php">Tech Startup</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="#">Light Version</a>
                      <ul>
                        <li><a href="index-light.php">Creative Agency</a></li>
                        <li><a href="marketing-agency-light.php">Marketing Agency</a></li>
                        <li><a href="studio-agency-light.php">Studio Agency</a></li>
                        <li><a href="digital-agency-light.php">Digital Agency</a></li>
                        <li><a href="tech-startup-light.php">Tech Startup</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
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
            <a href="contact.php" class="cs_btn cs_style_1">Getting Started</a>
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
    <div class="table-responsive">
      <table class="cs_cart_table cs_size1">
        <thead>
          <tr>
            <th>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkAll">
              </div>
            </th>
            <th>Product</th>
            <th>Price</th>
            <th>Stock Status</th>
            <th>Subtotal</th>
            <th>Remove</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
              </div>
            </td>
            <td>
              <div class="cs_cart_table_media">
                <img src="assets/img/shop/cart-product-1.jpg" alt="Thumb">
                <h3>Awesome men T-shirt</h3>
              </div>
            </td>
            <td>$300.00</td>
            <td>In stock</td>
            <td>
              $20.00
            </td>
            <td class="text-center">
              <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
            </td>
            <td class="text-end"><a href="#" class="cs_product_btn cs_semi_bold">Add to Cart</a></td>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
              </div>
            </td>
            <td>
              <div class="cs_cart_table_media">
                <img src="assets/img/shop/cart-product-2.jpg" alt="Thumb">
                <h3>Fuyure AI robot toy</h3>
              </div>
            </td>
            <td>$300.00</td>
            <td>In stock</td>
            <td>
              $20.00
            </td>
            <td class="text-center">
              <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
            </td>
            <td class="text-end"><a href="#" class="cs_product_btn cs_semi_bold">Add to Cart</a></td>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
              </div>
            </td>
            <td>
              <div class="cs_cart_table_media">
                <img src="assets/img/shop/cart-product-3.jpg" alt="Thumb">
                <h3>Hemp seed shampoo</h3>
              </div>
            </td>
            <td>$300.00</td>
            <td>In stock</td>
            <td>
              $20.00
            </td>
            <td class="text-center">
              <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
            </td>
            <td class="text-end"><a href="#" class="cs_product_btn cs_semi_bold">Add to Cart</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="cs_height_5 cs_height_lg_5"></div>
    <div class="cs_cart-offer">
      <div class="cs_cart-offer-col">
        <form action="#" class="cs_coupon-doce-form">
          <select class="cs_shop-input m-0">
            <option value="States">Actions</option>
            <option value="Kingdom">Add to Cart</option>
            <option value="Kanada">Remove</option>
          </select>
          <button class="cs_product_btn cs_color1 cs_semi_bold">Apply Action</button>
        </form>
      </div>
      <div class="cs_cart-offer-col">
        <button class="cs_product_btn cs_semi_bold">Add Selected to Cart</button>
        <button class="cs_product_btn cs_semi_bold">Add All to Cart</button>
      </div>
    </div>
  </div>
  <div class="cs_height_150 cs_height_lg_80"></div>
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

  <!-- Script -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/odometer.js"></script>
  <script src="assets/js/ripples.min.js"></script>
  <script src="assets/js/isotope.pkg.min.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/jquery.slick.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>