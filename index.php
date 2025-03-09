<?php get_template_part('core/templates/header'); ?>

<main id="site-main">
    <section class="content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('No posts found.', 'trickybytes'); ?></p>
        <?php endif; ?>
    </section>
</main>

<?php get_template_part('core/templates/footer'); ?>
