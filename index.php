<?php get_header(); ?>

    <div class="home-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) :
		the_post(); ?>
        <a href="<?php the_permalink() ?>" target="_blank" class="home-grid__cell">
            <div class="home-grid__cell-shadow"></div>
            <div class="home-grid__cell-post">
                <div class="home-post__thumbnail"><?php the_post_thumbnail( 'full' ); ?></div>
                <div class="home-post__content">
                    <div class="home-post__title"><?php the_title(); ?></div>
                    <div class="home-post__excerpt"><?php the_excerpt(); ?></div>
                </div>
            </div>
			<?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
        </a>
    </div>

<?php get_footer(); ?>