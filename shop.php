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
  <title>ProRusty - Shop</title>
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
      <h2 class="cs_section_title cs_fs_68 mb-0">Our products</h2>
    </div>
  </div>
  <div class="cs_height_125 cs_height_lg_50"></div>
  <!-- End Page Heading -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="cs_shop_sidebar">
          <div class="cs_shop_sidebar_widget">
            <form action="#" class="cs_shop_search">
              <input class="cs_shop_search_input" type="text" placeholder="Search Products...">
              <button class="cs_shop_search_btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.6939 10.3222C11.5282 10.1562 11.3033 10.0629 11.0688 10.0629H10.8189C10.7506 10.0629 10.6849 10.0364 10.6357 9.98894C10.535 9.89181 10.5281 9.73333 10.6148 9.62352C11.416 8.60899 11.8925 7.33012 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.33012 11.8925 8.60899 11.416 9.62352 10.6148C9.73333 10.5281 9.89181 10.535 9.98894 10.6357C10.0364 10.6849 10.0629 10.7506 10.0629 10.8189V11.0688C10.0629 11.3033 10.1562 11.5282 10.3222 11.6939L13.9547 15.3191C14.3316 15.6953 14.942 15.695 15.3185 15.3185C15.695 14.942 15.6953 14.3316 15.3191 13.9547L11.6939 10.3222ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z" fill="#4F4747"/>
                </svg>                         
              </button>
            </form>
          </div>
          <div class="cs_shop_sidebar_widget">
            <h3 class="cs_shop_sidebar_widget_title">Categories</h3>
            <ul class="cs_shop_sidebar_category_list">
              <li><a href="#">Design (5)</a></li>
              <li><a href="#">Creative (2)</a></li>
              <li><a href="#">Illustration (3)</a></li>
            </ul>
          </div>
          <div class="cs_shop_sidebar_widget">
            <h3 class="cs_shop_sidebar_widget_title">Price Filter</h3>
            <div class="st-range-slider-wrap">
              <div id="slider-range"></div>
              <div class="st-amount-wrap">
                <input type="text" id="amount" readonly>
              </div>
            </div>
          </div>
          <div class="cs_shop_sidebar_widget">
            <h3 class="cs_shop_sidebar_widget_title">Tags</h3>
            <ul class="cs_shop_sidebar_tag_list">
              <li><a href="#">Brand</a></li>
              <li><a href="#">Digital</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Graphics</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="cs_height_0 cs_height_lg_60"></div>
        <div class="cs_shop_filter_wrap">
          <div class="cs_number_of_product">Showing 1–9 of 12 results</div>
          <form action="#" class="cs_shop_filter_form">
            <select>
              <option value="latest">Sort by latest</option>
              <option value="high">Sort by low price</option>
              <option value="low">Sort by high price</option>
            </select>
          </form>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_1.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#a1)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="a1"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Future AI robot toys</a></h2>
                <p class="cs_product_price">Price: $550</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_2.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#b2)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="b2"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Awesome men t-shirt</a></h2>
                <p class="cs_product_price">Price: $20</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_3.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#c3)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="c3"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Nature photography</a></h2>
                <p class="cs_product_price">Price: $10</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_4.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#d4)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="d4"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Hemp seed shampoo</a></h2>
                <p class="cs_product_price">Price: $35</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_5.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#e6)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="e6"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">iPhone prototype</a></h2>
                <p class="cs_product_price">Price: $50</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_6.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#f6)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="f6"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Red diamond perfume</a></h2>
                <p class="cs_product_price">Price: $45</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_7.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#g7)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="g7"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">3d suduku toy</a></h2>
                <p class="cs_product_price">Price: $20</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_8.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#h8)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="h8"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Fossil watch</a></h2>
                <p class="cs_product_price">Price: $450</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="cs_product_card cs_style_1">
              <div class="cs_product_thumb">
                <img src="assets/img/shop/product_9.jpg" alt="Product">
                <div class="cs_product_overlay"></div>
                <div class="cs_card_btns">
                  <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#i9)">
                        <path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="i9"><rect width="24" height="24" fill="currentColor"/></clipPath>
                      </defs>
                    </svg>                      
                  </a>
                  <a href="#">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 18.35L8.55 17.03C3.4 12.36 0 9.28 0 5.5C0 2.42 2.42 0 5.5 0C7.24 0 8.91 0.81 10 2.09C11.09 0.81 12.76 0 14.5 0C17.58 0 20 2.42 20 5.5C20 9.28 16.6 12.36 11.45 17.04L10 18.35Z" fill="currentColor"/>
                    </svg>                      
                  </a>
                  <a href="shop-product-details.php">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 0.5C6 0.5 1.73 3.61 0 8C1.73 12.39 6 15.5 11 15.5C16 15.5 20.27 12.39 22 8C20.27 3.61 16 0.5 11 0.5ZM11 13C8.24 13 6 10.76 6 8C6 5.24 8.24 3 11 3C13.76 3 16 5.24 16 8C16 10.76 13.76 13 11 13ZM11 5C9.34 5 8 6.34 8 8C8 9.66 9.34 11 11 11C12.66 11 14 9.66 14 8C14 6.34 12.66 5 11 5Z" fill="currentColor"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="cs_product_info">
                <h2 class="cs_product_title"><a href="shop-product-details.php">Water bottle</a></h2>
                <p class="cs_product_price">Price: $10</p>
              </div>
            </div>
            <div class="cs_height_55 cs_height_lg_25"></div>
          </div>
        </div>
        <ul class="cs_pagination_box cs_white_color cs_mp0 cs_semi_bold">
          <li>
            <a class="cs_pagination_item cs_center active" href="shop.php">1</a>
          </li>
          <li>
            <a class="cs_pagination_item cs_center" href="shop.php">2</a>
          </li>
          <li>
            <a class="cs_pagination_item cs_center" href="shop.php">3</a>
          </li>
          <li>
            <a href="#" class="cs_pagination_item cs_center">
              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.272L4.55116 6L0 10.728L1.22442 12L7 6L1.22442 0L0 1.272Z" fill="currentColor"></path>
              </svg>
            </a>
          </li>
        </ul>
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