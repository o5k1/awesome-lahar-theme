<?php get_header(); ?>
<div class="body">
	<?php get_search_form() ?>
    <div class="tag-title">
        <div class="tag-title__name">Risultati trovati per</div>
        <div class="tag-title__magazine">"<?php echo get_search_query(); ?>"</div>
    </div>
    <div class="home-grid">
		<?php
		while ( have_posts() ) : the_post(); ?>
			<?php if ( ! is_page() ): ?>
				<?php if ( $post->post_type === 'attachment' ) { ?>
                    <a href="<?php the_permalink() ?>" class="home-grid__cell">
						<?php print $post->type ?>
                        <div class="home-grid__cell-post">
                            <div class="home-post__content--attachment">
                                <img src="<?php echo wp_get_attachment_image_src( $post->id, 'full' )[0] ?>"/>
                            </div>
                        </div>
                    </a>
				<?php } else { ?>
                    <a href="<?php the_permalink() ?>" class="home-grid__cell">
                        <div class="home-grid__cell-post">
                            <div class="home-post__content">
                                <div class="home-post__title"><?php the_title(); ?></div>
                                <div class="home-post__excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    </a>
				<?php } ?>
			<?php endif; ?>
		<?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
