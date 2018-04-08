<?php get_header(); ?>

<div class="home-grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="home-grid__cell">
        <div class="home-cell__thumbnail"><?php the_post_thumbnail( 'medium' ); ?></div>
        <div class="home-cell__content">
            <div class="home-cell__title"><?php the_title(); ?></div>
            <div class="home-cell__excerpt"><?php the_excerpt(); ?></div>
        </div>
    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>