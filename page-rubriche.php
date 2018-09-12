<?php get_header(); ?>
    <div class="body">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <div class="home-other">
            <div class="home-other-grid">
				<?php
				// Recupera tutte le categorie che rappresentano rubriche
				$categories = get_categories(
					array( 'parent' => get_cat_ID( 'Rubriche' ) )
				);

				foreach ( $categories as $index => $category ):?>
                    <a href="<?php print get_category_link( $category ) ?>" class="home-other-grid__item">
                        <div class="home-other-grid__item-hero">
							<?php $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
								'term_args' => [ 'term_taxonomy_id' => $category->term_id ]
							) );
							print wp_get_attachment_image( $terms[0]->image_id, 'full' );
							?>
                            <div class="home-other-grid__item-film"></div>
                            <div>
                                <div class="home-other__item-title">
									<?php print $category->name ?>
                                </div>
                            </div>
                        </div>
                    </a>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>