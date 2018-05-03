<?php get_header(); ?>
<div class="body">
	<?php get_search_form(); ?>
	<div class="home-other">
		<div class="home-other-grid">
			<?php
			// Recupera tutte le categorie che rappresentano rubriche
			$categories = get_categories(
				array( 'parent' => get_cat_ID( 'Rubriche' ) )
			);

			foreach ( $categories as $index => $category ): if ( $index === 0 ): ?>
			<a href="<?php print get_category_link( $category ) ?>" class="home-other-grid__item  home-other-grid__item--first">
				<?php else: ?>
				<a href="<?php print get_category_link( $category ) ?>" class="home-other-grid__item">
					<?php endif; ?>
					<div class="home-other__item-title"><?php print $category->name ?></div>
					<?php $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
						'term_args' => [ 'term_taxonomy_id' => $category->term_id ]
					) );
					print wp_get_attachment_image( $terms[0]->image_id, 'full' );
					?>
					<div class="home-other-grid__item-film"></div>
				</a>
				<?php endforeach; ?>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>