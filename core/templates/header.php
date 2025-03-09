<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Trickybytes">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
    
    <link rel="shortcut icon" href="<?php echo TRICKYBYTES_ASSETS; ?>img/favicon.svg">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- Preloader Start -->
   <!-- <div id="preloader" class="preloader">
      <div class="animation-preloader">
         <div class="spinner">
         </div>
         <div class="txt-loading">
            <?php 
            $site_name = get_bloginfo('name');
            $letters = str_split($site_name);
            foreach ($letters as $letter) {
               echo '<span data-text-preloader="' . esc_attr($letter) . '" class="letters-loading">' . esc_html($letter) . '</span>';
            }
            ?>
         </div>
         <p class="text-center">Loading</p>
      </div>
      <div class="loader">
         <div class="row">
            <div class="col-3 loader-section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
               <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
               <div class="bg"></div>
            </div>
         </div>
      </div>
   </div> -->

   <!--<< Mouse Cursor Start >>-->
   <div class="mouse-cursor cursor-outer"></div>
   <div class="mouse-cursor cursor-inner"></div>

   <!-- Offcanvas Area Start -->
   <div class="fix-area">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="index.html">
                        <img src="assets/img/logo.svg" alt="logo-img">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
               <p class="text d-none d-lg-block">
                  Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo
                  urna eget eros. Duis Aenean a imperdiet risus.
               </p>
               <div class="mobile-menu fix mb-3"></div>
               <div class="offcanvas__contact">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="mailto:info@azent.com"><span
                                 class="mailto:info@example.com">info@example.com</span></a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-clock"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+11002345909">+11002345909</a>
                        </div>
                     </li>
                  </ul>
                  <div class="header-button mt-4">
                     <a href="contact.html" class="theme-btn text-center">
                        <span>get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                     </a>
                  </div>
                  <div class="social-icon d-flex align-items-center">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>

   
   <header>
      <div id="header-sticky" class="header-1">
         <div class="container">
            <div class="mega-menu-wrapper">
               <div class="header-main style-2">
                  <div class="header-left">
                     <div class="logo">
                        <?php 
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                           the_custom_logo();
                        } else { ?>
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                           </a>
                        <?php } ?>
                     </div>
                  </div>
                  <div class="header-middle">
                     <div class="mean__menu-wrapper">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <?php 
                              wp_nav_menu( array(
                                 'theme_location' => 'primary',
                                 'container'      => false,
                                 'menu_class'     => '',
                                 // 'walker' can be added here if you need custom HTML markup.
                              ) );
                              ?>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="header-right d-flex justify-content-end align-items-center">
                     <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                     <a href="#0"><i class="fa-solid fa-cart-shopping"></i></a>
                     <div class="header-button ms-4">
                        <a href="contact.html" class="gt-btn">
                           <span>
                              get A Quote
                              <i class="fa-solid fa-arrow-right-long"></i>
                           </span>
                        </a>
                     </div>
                     <div class="header__hamburger d-block d-xl-none my-auto">
                        <div class="sidebar__toggle">
                           <i class="fas fa-bars"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   
   <!-- Offcanvas Area Start -->
   <div class="fix-area">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <?php 
                     if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                        the_custom_logo();
                     } else { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php bloginfo('name'); ?>">
                        </a>
                     <?php } ?>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
               <p class="text d-none d-lg-block">
                  Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
               </p>
               <div class="mobile-menu fix mb-3">
                  <?php 
                  wp_nav_menu( array(
                     'theme_location' => 'mobile',
                     'container'      => false,
                     'menu_class'     => '',
                  ) );
                  ?>
               </div>
               <div class="offcanvas__contact">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="mailto:info@azent.com"><span class="mailto:info@example.com">info@example.com</span></a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-clock"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+11002345909">+11002345909</a>
                        </div>
                     </li>
                  </ul>
                  <div class="header-button mt-4">
                     <a href="contact.html" class="theme-btn text-center">
                        <span>get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                     </a>
                  </div>
                  <div class="social-icon d-flex align-items-center">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>

   <!-- Search Area Start -->
   <div class="search-wrap">
      <div class="search-inner">
         <i class="fas fa-times search-close" id="search-close"></i>
         <div class="search-cell">
            <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
               <div class="search-field-holder">
                  <input type="search" name="s" class="main-search-input" placeholder="Search..." value="<?php echo get_search_query(); ?>">
               </div>
            </form>
         </div>
      </div>
   </div>
