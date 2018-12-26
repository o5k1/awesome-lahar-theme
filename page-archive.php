<?php get_header(); ?>
    <div class="body archive">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <img class="lahar-loader" src="<?php echo get_template_directory_uri(); ?>/img/loading.gif">
        <div class="loadable-content">
            <h1 class="home-other__title">archivio</h1>
            <ul class="archive-grid">
				<?php $terms = apply_filters( 'taxonomy-images-get-terms', '' );
				if ( ! empty( $terms ) ) :
					foreach ( $terms as $term ): ?>
						<?php if ( ! lahar_has_parent_category( 'Rubriche', $term->term_id ) ): ?>
                            <li class="archive-grid__item">
                                <a href="<?php print get_category_link( $term ) ?>">
									<?php print wp_get_attachment_image( $term->image_id, 'medium' ); ?>
                                </a>
                            </li>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
            </ul>
        </div>
    </div>
<?php get_footer(); ?>