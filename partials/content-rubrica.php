<?php
global $cat;
$coverImage = apply_filters( 'taxonomy-images-queried-term-image-object', '' );
?>
<div class="rubrica-cover" style="background-image: url('<?php if ( ! empty( $coverImage ) )
	print $coverImage->guid ?>')">
    <div class="rubrica__description">
		<?php print category_description( $cat ) ?>
    </div>
</div>
<div class="home__current-category">
    <a href="<?php print get_permalink( get_page_by_path( 'rubriche' ) ); ?>" class="lahar-button single-post__category">
		<span>Rubriche</span>
    </a>
    <h1 class="home__current-category-name">
		<?php echo get_cat_name( $cat ) ?>
    </h1>
</div>