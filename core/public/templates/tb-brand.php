<div class="brand-slider-section fix">
   <div class="brand-slider-container-wrapper style1">
      <div class="container">
         <div class="row">
            <div class="slider-area brandSliderOne">
               <div class="swiper gt-slider" id="brandSliderOne"
                  data-slider-options='{"loop": true, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":3},"992":{"slidesPerView":4},"1200":{"slidesPerView":5}}}'>
                  <div class="swiper-wrapper">
                     <?php 
                        $brand_count = get_theme_mod('brand_slider_count', 5);
                        for ($i = 1; $i <= $brand_count; $i++) :
                            $brand_logo = get_theme_mod("brand_logo_$i", get_template_directory_uri() . "/core/assets/img/brand-logo/brandLogo1_$i.svg");
                            if ($brand_logo) :
                     ?>
                     <div class="swiper-slide">
                        <div class="brand-logo">
                           <img src="<?php echo esc_url($brand_logo); ?>" alt="brandLogo">
                        </div>
                     </div>
                     <?php 
                            endif;
                        endfor; 
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
