<?php get_header(); ?>
    <div class="body">
		<?php get_search_form(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) :
			the_post(); ?>
            <div class="single-post__title">
				<?php the_title(); ?>
            </div>
            <div class="single-post__author-wrapper">
                <span>di </span>
                <a href="<?php echo get_term_link( get_the_tags()[0] ); ?>" class="single-post__author">
					<?php echo get_the_tags()[0]->name; ?>
                </a>
            </div>
            <div class="single-post__divider"></div>
            <div class="single-post__content"><?php the_content(); ?></div>
		<?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
    </div>
<?php get_footer(); ?>