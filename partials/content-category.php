<div class="home-hero">
    <div class="home-hero__content">
        <div class="issue-cover">
		    <?php print apply_filters( 'taxonomy-images-queried-term-image', '', array(
			    'image_size' => 'full'
		    ) ); ?>
        </div>
    </div>
    <div class="home__current-category">
        <h1 class="home__issue-title">#<?php echo get_cat_name( $cat ) ?></h1>
    </div>
</div>