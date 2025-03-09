<footer class="footer-area" style="background-color: <?php echo esc_attr(get_theme_mod('footer_bg_color', '#222')); ?>;">
    <div class="widget-area style1 pt-100 pb-80">
        <div class="container">
            <div class="footer-layout style1">
                <div class="row">
                    <!-- About Widget -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="widget footer-widget">
                            <div class="gt-widget-about">
                                <div class="about-logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php
                                        $footer_logo = get_theme_mod('footer_logo');
                                        if ($footer_logo) {
                                            echo '<img src="' . esc_url($footer_logo) . '" alt="Footer Logo">';
                                        } else {
                                            bloginfo('name');
                                        }
                                        ?>
                                    </a>
                                </div>
                                <p style="color: <?php echo esc_attr(get_theme_mod('footer_about_text_color', '#fff')); ?>;">
                                    <?php echo esc_html(get_theme_mod('footer_about_text', 'Default About Text Here')); ?>
                                </p>
                                <div class="gt-social style2">
                                    <a href="<?php echo esc_url(get_theme_mod('footer_social_facebook', '#')); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo esc_url(get_theme_mod('footer_social_twitter', '#')); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo esc_url(get_theme_mod('footer_social_youtube', '#')); ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo esc_url(get_theme_mod('footer_social_instagram', '#')); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Menu -->
                     <div class="col-xl-2 col-md-6 col-12">
                        <div class="widget footer-widget">
                           <h3 class="widget_title" style="color: <?php echo esc_attr(get_theme_mod('footer_menu_text_color', '#fff')); ?>;">Quick Links</h3>
                           <ul class="menu">
                                 <?php
                                 $footer_menu_id = get_theme_mod('footer_menu_selection');
                                 if ($footer_menu_id) {
                                    wp_nav_menu([
                                       'menu'        => $footer_menu_id,
                                       'container'   => false,
                                       'menu_class'  => 'footer-menu',
                                       'fallback_cb' => '__return_false'
                                    ]);
                                 } else {
                                    echo '<li>No footer menu selected. Please assign one in the Customizer.</li>';
                                 }
                                 ?>
                           </ul>
                        </div>
                  </div>



                    <!-- Recent Posts -->
                    <div class="col-xl-4 col-md-6 col-12">
    <div class="widget footer-widget">
        <h3 class="widget_title" style="color: <?php echo esc_attr(get_theme_mod('footer_recent_text_color', '#fff')); ?>;">Recent Posts</h3>
        <div class="recent-post-wrap">
            <?php
            $post_type  = get_theme_mod('footer_recent_post_type', 'post');
            $post_count = get_theme_mod('footer_recent_posts_count', 2);

            $query_args = [
                'post_type'      => $post_type,
                'posts_per_page' => $post_count,
                'post_status'    => 'publish',
            ];

            $recent_posts = new WP_Query($query_args);
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a href="<?php the_permalink(); ?>" style="color: <?php echo esc_attr(get_theme_mod('footer_recent_text_color', '#fff')); ?>;">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No recent posts available.</p>';
            endif;
            ?>
        </div>
    </div>
</div>



                    <!-- Contact Info -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="widget footer-widget">
                            <h3 class="widget_title" style="color: <?php echo esc_attr(get_theme_mod('footer_contact_text_color', '#fff')); ?>;">Contact Us</h3>
                            <p style="color: <?php echo esc_attr(get_theme_mod('footer_contact_text_color', '#fff')); ?>;">
                                <i class="fa-solid fa-envelope"></i> <?php echo esc_html(get_theme_mod('footer_email', 'info@example.com')); ?>
                            </p>
                            <p style="color: <?php echo esc_attr(get_theme_mod('footer_contact_text_color', '#fff')); ?>;">
                                <i class="fa-solid fa-phone"></i> <?php echo esc_html(get_theme_mod('footer_phone', '+208-6666-0112')); ?>
                            </p>
                            <div class="contact-form">
                                <?php echo do_shortcode(get_theme_mod('footer_contact_shortcode')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <p style="color: <?php echo esc_attr(get_theme_mod('footer_copyright_text_color', '#fff')); ?>;">
                <?php echo esc_html(get_theme_mod('footer_copyright_text', '© 2024 All Rights Reserved')); ?>
            </p>
        </div>
    </div>
</footer>

<!-- WordPress Footer Hook -->
<?php wp_footer(); ?>
</body>
</html>
