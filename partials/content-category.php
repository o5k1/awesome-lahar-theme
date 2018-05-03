<div class="issue-cover">
	<?php print apply_filters( 'taxonomy-images-queried-term-image', '', array(
		'image_size' => 'full'
	) ); ?>
</div>
<div class="home__current-category">
	<h1 class="home__current-category-name">#
		<?php echo get_cat_name( $cat ) ?></h1>
</div>