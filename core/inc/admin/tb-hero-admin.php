<?php
class HeroSectionCustomizer {
    public function __construct() {
        add_action('customize_register', [$this, 'register_hero_section_settings']);
    }

    public function register_hero_section_settings($wp_customize) {
        // Add Section for Hero Section
        $wp_customize->add_section('hero_section', array(
            'title'    => __('Hero Section', 'your-theme'),
            'priority' => 30,
        ));

        // Hero Title
        $this->add_text_control($wp_customize, 'hero_title', 'Hero Title', 'Business Innovation With IT Services expertise');

        // Hero Subtitle
        $this->add_text_control($wp_customize, 'hero_subtitle', 'Hero Subtitle', 'Everything You Need to Create a Website');

        // Hero Button Text & Link
        $this->add_text_control($wp_customize, 'hero_button_text', 'Button Text', 'Get Started');
        $this->add_url_control($wp_customize, 'hero_button_link', 'Button Link', 'contact.html');

        // Hero Image
        $this->add_image_control($wp_customize, 'hero_image', 'Hero Image', '/core/assets/img/hero/heroThumb1_1.png');

        // Trustpilot Section
        $this->add_image_control($wp_customize, 'trustpilot_image', 'Trustpilot Image', '/core/assets/img/icon/starIcon1_1.svg');
        $this->add_text_control($wp_customize, 'trustpilot_text', 'Trustpilot Reviews Text', '450+ reviews');

        // Google Reviews Section
        $this->add_image_control($wp_customize, 'google_image', 'Google Reviews Image', '/core/assets/img/icon/starIcon1_1.svg');
        $this->add_text_control($wp_customize, 'google_reviews_text', 'Google Reviews Text', '450+ reviews');

        // Checklist Items
        $checklist_items = [
            'checklist_1' => 'Deployment and Support',
            'checklist_2' => 'Discovery and Analysis',
            'checklist_3' => 'Flexibility and Adaptability',
            'checklist_4' => 'Competitive Advantage'
        ];

        foreach ($checklist_items as $key => $default_text) {
            $this->add_text_control($wp_customize, $key, __('Checklist Item', 'your-theme') . ' ' . substr($key, -1), $default_text);
        }
    }

    // Helper function for text input fields
    private function add_text_control($wp_customize, $id, $label, $default) {
        $wp_customize->add_setting($id, array(
            'default'   => $default,
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label'    => __($label, 'your-theme'),
            'section'  => 'hero_section',
            'type'     => 'text',
        ));
    }

    // Helper function for URL input fields
    private function add_url_control($wp_customize, $id, $label, $default) {
        $wp_customize->add_setting($id, array(
            'default'   => $default,
            'sanitize_callback' => 'esc_url',
        ));
        $wp_customize->add_control($id, array(
            'label'    => __($label, 'your-theme'),
            'section'  => 'hero_section',
            'type'     => 'url',
        ));
    }

    // Helper function for image upload fields
    private function add_image_control($wp_customize, $id, $label, $default) {
        $wp_customize->add_setting($id, array(
            'default'   => get_template_directory_uri() . $default,
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id, array(
            'label'    => __($label, 'your-theme'),
            'section'  => 'hero_section',
        )));
    }
}

// Initialize the class
new HeroSectionCustomizer();
