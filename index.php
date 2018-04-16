<?php get_header(); ?>
    <div class="body">
	    <?php get_search_form(); ?>
        <div class="home__current-category">
            <h1 class="home__current-category-name">#39 - Roberto Baggio</h1>
        </div>
        <div class="home-grid">
			<?php if ( have_posts() ) : while ( have_posts() ) :
			the_post(); ?>
            <a href="<?php the_permalink() ?>" class="home-grid__cell">
                <div class="home-grid__cell-shadow"></div>
                <div class="home-grid__cell-post">
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
    </div>
<?php get_footer(); ?>