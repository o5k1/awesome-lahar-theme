<div class="single-post__wrapper">
    <div class="single-post__title">
		<?php the_title(); ?>
    </div>
    <div class="single-post__author-wrapper">
		<?php if ( get_the_tags() ): ?>
            <span>di </span>
            <a href="<?php echo get_term_link( get_the_tags()[0] ); ?>" class="single-post__author">
				<?php echo get_the_tags()[0]->name; ?>
            </a>
		<?php endif; ?>
    </div>
    <div class="single-post__content"><?php the_content(); ?></div>
</div>