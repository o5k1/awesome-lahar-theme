<div class="single-post__wrapper">
    <div class="single-attachment__title-wrapper">
	    <?php if ( ! empty( get_the_category() ) ):
		    $current_category_id = get_theme_mod( 'current_mood_id' );
		    $parent_link = ( get_the_category()[0]->term_id == $current_category_id ) ? get_home_url() : get_term_link( get_the_category()[0] ); ?>
            <a href="<?php echo $parent_link; ?>" class="single-post__category">
			    <?php echo get_the_category()[0]->name; ?>
            </a>
	    <?php endif; ?>
        <div class="single-attachment__title">
			<?php the_title(); ?>
        </div>
		<?php if ( get_the_tags()[0] ): ?>
            <div class="single-post__author-wrapper">
                <span>di </span>
                <a href="<?php echo get_term_link( get_the_tags()[0] ); ?>" class="single-post__author">
					<?php echo get_the_tags()[0]->name; ?>
                </a>
            </div>
		<?php endif; ?>
    </div>
    <div class="single-attachment__content"><?php the_attachment_link( $post->id, true ); ?></div>
</div>
