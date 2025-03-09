<?php
class BrandSliderCustomizer {
    public function __construct() {
        add_action('customize_register', [$this, 'register_brand_slider_settings']);
    }

    public function register_brand_slider_settings($wp_customize) {
        // Add Section for Brand Slider
        $wp_customize->add_section('brand_slider_section', array(
            'title'    => __('Brand Slider', 'your-theme'),
            'priority' => 31,
        ));

        // Number of Brands
        $wp_customize->add_setting('brand_slider_count', array(
            'default'   => 5,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control('brand_slider_count', array(
            'label'    => __('Number of Brands', 'your-theme'),
            'section'  => 'brand_slider_section',
            'type'     => 'number',
        ));

        // Add Brand Logos (Dynamic)
        for ($i = 1; $i <= 10; $i++) {
            $wp_customize->add_setting("brand_logo_$i", array(
                'default'   => get_template_directory_uri() . "/core/assets/img/brand-logo/brandLogo1_$i.svg",
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "brand_logo_$i", array(
                'label'    => __("Brand Logo $i", 'your-theme'),
                'section'  => 'brand_slider_section',
            )));
        }
    }
}

// Initialize the class
new BrandSliderCustomizer();
