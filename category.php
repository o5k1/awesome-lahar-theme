<?php get_header(); ?>
    <div class="body">
		<?php get_search_form();
		global $cat;
		if ( lahar_has_parent_category( 'rubriche', $cat ) ):
			get_template_part( 'partials/content-rubrica' );
		else:
			get_template_part( 'partials/content-category' );
		endif; ?>
        <div class="home-grid">
			<?php
			global $post;
			$args = array( 'category' => $cat, 'posts_per_page' => - 1 );

			$articles = get_posts( $args );
			$images   = get_posts( array( 'category' => $cat, 'posts_per_page' => - 1, 'post_type' => 'attachment' ) );
			$myposts  = array_merge( $articles, $images );
			shuffle( $myposts );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<?php if ( $post->post_type === 'attachment' ) { ?>
                    <a href="<?php the_permalink() ?>" class="home-grid__cell">
                        <div class="home-grid__cell-post">
                            <div class="home-post__content">
                                <img src="<?php echo wp_get_attachment_image_src( $post->id, 'full' )[0] ?>"/>
                            </div>
                        </div>
                    </a>
				<?php } else { ?>
                    <a href="<?php the_permalink() ?>" class="home-grid__cell">
                        <div class="home-grid__cell-post">
                            <div class="home-post__content">
                                <div class="home-post__title"><?php the_title(); ?></div>
                                <div class="home-post__excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    </a>
				<?php } ?>
			<?php endforeach;
			wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer();?>