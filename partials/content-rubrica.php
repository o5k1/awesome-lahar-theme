<div class="rubrica-cover">
	<?php print apply_filters( 'taxonomy-images-queried-term-image', '', array(
		'image_size' => 'full'
	) ); ?>
    <div class="rubrica__description">
        <?php print category_description($cat)?>
    </div>
</div>
<div class="home__current-category">
    <a href="<?php print get_permalink(get_page_by_path('rubriche'))?>" class="category__parent-name">
        rubriche
    </a>
	<h1 class="home__current-category-name">
		<?php echo get_cat_name( $cat ) ?>
	</h1>
</div>