<?php get_header(); ?>
    <div class="body">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
		    <?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <ul class="archive-grid">
			<?php $terms = apply_filters( 'taxonomy-images-get-terms', '' );
			foreach ( $terms as $term ): ?>
				<?php if ( ! lahar_has_parent_category( 'Rubriche', $term->term_id ) ): ?>
                    <li class="archive-grid__item">
                        <a href="<?php print get_category_link( $term ) ?>">
							<?php print wp_get_attachment_image( $term->image_id, 'medium' ); ?>
                        </a>
                    </li>
				<?php endif; ?>
			<?php endforeach; ?>
        </ul>
    </div>
<?php get_footer(); ?>