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
    <h1 class="home__current-category-name">
		<?php echo get_cat_name( $cat ) ?>
    </h1>
</div>