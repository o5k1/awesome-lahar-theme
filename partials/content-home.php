<div class="issue-cover">
	<?php $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
		'term_args' => [ 'term_taxonomy_id' => 505 ]
	) );
	print wp_get_attachment_image( $terms[0]->image_id, 'medium' );
	?>
</div>
<div class="home__current-category">
    <h1 class="home__current-category-name">#39 - Roberto Baggio</h1>
</div>
<div class="home-grid">
	<?php
	global $post;
	$args = array( 'category' => 505, 'posts_per_page' => - 1 );

	$articles = get_posts( $args );
	$images   = get_posts( array( 'category' => 505, 'posts_per_page' => - 1, 'post_type' => 'attachment' ) );
	$myposts  = array_merge( $articles, $images );
	shuffle( $myposts );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<?php if ( $post->post_type === 'attachment' ) { ?>
            <a href="<?php the_permalink() ?>" class="home-grid__cell">
                <div class="home-grid__cell-post">
                    <div class="home-post__content--attachment">
                        <img src="<?php echo wp_get_attachment_image_src( $post->id, 'full' )[0] ?>"/>
                    </div>
                </div>
            </a>
		<?php } else { ?>
            <a href="<?php the_permalink() ?>" class="home-grid__cell">
                <div class="home-grid__cell-shadow"></div>
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
<div class="home-other">
    <h1 class="home-other__title">rubriche</h1>
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