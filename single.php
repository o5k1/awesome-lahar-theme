<?php get_header(); ?>
    <div class="body">
		<?php get_search_form();

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				if ( $post->post_type === 'attachment' ) {
					get_template_part( 'partials/content-single-attachment' );
				} else {
					get_template_part( 'partials/content-single-post' );
				}
			}
		}
		?>
        <div class="menu--mobile">
		    <?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
    </div>
<?php get_footer(); ?>