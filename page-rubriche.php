<?php get_header(); ?>
    <div class="body rubriche">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <img class="lahar-loader" src="<?php echo get_template_directory_uri(); ?>/img/loading.gif">
        <div class="loadable-content">
            <div class="home-other">
                <h1 class="home-other__title">rubriche</h1>
                <div class="home-other-grid">
		            <?php
		            // Recupera tutte le categorie che rappresentano rubriche
		            $categories = get_categories(
			            array( 'parent' => get_cat_ID( 'Rubriche' ) )
		            );

		            foreach ( $categories as $index => $category ):?>
                        <a href="<?php print get_category_link( $category ) ?>" class="home-other-grid__item">
				            <?php $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
					            'term_args' => [ 'term_taxonomy_id' => $category->term_id ]
				            ) );
				            $image = '';
				            if ( ! empty( $terms ) ) {
					            $image = wp_get_attachment_image_src( $terms[0]->image_id, 'full' )[0];
				            }
				            ?>
                            <div class="home-other-grid__item-background" style="background-image: url(<?php print $image ?>)">
                                <div class="home-other__item-title"><?php print $category->name ?></div>
                            </div>
                        </a>
		            <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>