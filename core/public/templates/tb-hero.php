<section class="hero-section fix">
   <div class="hero-wrapper style1">
      <div class="shape1_2 d-none d-xxl-block"><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/shape/heroShape1_2.png" alt="shape"></div>
      <div class="shape1_3">
         <a href="<?php echo esc_url(get_theme_mod('hero_button_link', 'contact.html')); ?>"> 
            <img class="rotate360" src="<?php echo get_template_directory_uri(); ?>/core/assets/img/shape/heroShape1_3.png" alt="shape">
         </a>
      </div>
      <div class="shape1_4 movingX d-none d-xxl-block"><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/shape/heroShape1_4.png" alt="shape"></div>
      <div class="shape1_5 float-bob-y d-none d-xxl-block"><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/shape/heroShape1_5.png" alt="shape"></div>

      <div class="container">
         <div class="hero-main-container style1 border-radius">
            <div class="container">
               <div class="row d-flex align-items-center align-items-xl-start">
                  <div class="col-xl-6 order-2 order-xl-1">
                     <div class="hero-content style1">
                        <h6 class="subtitle">
                           <img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/icon/subtitleIcon1_1.svg" alt="icon">
                           <?php echo esc_html(get_theme_mod('hero_subtitle')); ?>
                        </h6>
                        <h1><?php echo esc_html(get_theme_mod('hero_title')); ?></h1>

                        <!-- Checklist -->
                        <div class="checklist-wrapper style3">
                           <ul class="checklist style3">
                              <li><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/icon/checkmarkIcon2.svg" alt="icon"> <?php echo esc_html(get_theme_mod('checklist_1')); ?></li>
                              <li><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/icon/checkmarkIcon2.svg" alt="icon"> <?php echo esc_html(get_theme_mod('checklist_2')); ?></li>
                           </ul>
                           <ul class="checklist style3">
                              <li><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/icon/checkmarkIcon2.svg" alt="icon"> <?php echo esc_html(get_theme_mod('checklist_3')); ?></li>
                              <li><img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/icon/checkmarkIcon2.svg" alt="icon"> <?php echo esc_html(get_theme_mod('checklist_4')); ?></li>
                           </ul>
                        </div>

                        <!-- Button -->
                        <div class="contact-meta">
                           <div class="btn-wrapper">
                              <a href="<?php echo esc_url(get_theme_mod('hero_button_link', 'contact.html')); ?>" class="gt-btn style4">
                                 <?php echo esc_html(get_theme_mod('hero_button_text')); ?> 
                                 <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                              </a>
                           </div>
                        </div>

                        <!-- Trustpilot and Google Reviews -->
                        <div class="fancy-box-wrapper style5">
                           <div class="fancy-box style5">
                              <div class="title"><img src="<?php echo esc_url(get_theme_mod('trustpilot_image', get_template_directory_uri().'/core/assets/img/icon/starIcon1_1.svg')); ?>" alt="icon"> Trustpilot</div>
                              <h6><?php echo esc_html(get_theme_mod('trustpilot_text')); ?></h6>
                           </div>
                           <div class="fancy-box style5 border-0">
                              <div class="title"><img src="<?php echo esc_url(get_theme_mod('google_image', get_template_directory_uri().'/core/assets/img/icon/starIcon1_1.svg')); ?>" alt="icon"> Google</div>
                              <h6><?php echo esc_html(get_theme_mod('google_reviews_text')); ?></h6>
                           </div>
                        </div>

                     </div>
                  </div>

                  <!-- Hero Image + Main Thumb Section -->
                  <div class="col-xl-6 order-1 order-xl-2 justify-content-center">
                     <div class="hero-thumb style1">
                        <div class="main-thumb">
                           <img src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri().'/core/assets/img/hero/heroThumb1_1.png')); ?>" alt="thumb">
                        </div>
                        <div class="shape1_1 d-none d-xxl-block">
                           <img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/shape/heroShape1_1.png" alt="shape">
                        </div>
                     </div>
                  </div>
                   <!-- SVG Mask -->
               <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position: absolute;">
                  <clipPath id="heroMask2">
                     <path
                        d="M0 50C0 22.3858 22.3858 0 50 0H1780C1807.61 0 1830 22.3858 1830 50V774C1830 801.614 1807.61 824 1780 824H1042.05C1015.85 824 991.426 810.575 977.326 788.498C947.176 741.292 878.083 741.197 848.055 788.482C834.009 810.601 809.627 824 783.425 824H50C22.3858 824 0 801.614 0 774V50Z"
                        fill="#384BFF" />
                  </clipPath>
               </svg>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
