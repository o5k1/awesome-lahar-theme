<?php
$args = array(
	'posts_per_page' => - 1,
	'tax_query'      => array(
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => str_replace( ' ', '-', strtolower( single_tag_title( '', false ) ) )
		)
	)
);

$postslist = get_posts( $args );
?>

<?php get_header(); ?>
<div class="body">
	<?php get_search_form(); ?>
    <div class="tag-title">
        <div class="tag-title__name"><?php single_tag_title() ?></div>
        <div class="tag-title__separator">x</div>
        <div class="tag-title__magazine">lahar magazine</div>
    </div>
    <div class="home-grid">
		<?php
		$tagSlug = lahar_get_tag_slug(single_tag_title( '', false ));
		$articles = lahar_get_posts_by_tag($tagSlug);
		$images   = lahar_get_attachments_by_tag($tagSlug);
		$myposts  = array_merge( $articles, $images );
		shuffle( $myposts );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<?php if ( $post->post_type === 'attachment' ) { ?>
                <a href="<?php the_permalink() ?>" class="home-grid__cell">
                    <div class="home-grid__cell-shadow"></div>
                    <div class="home-grid__cell-post">
                        <div class="home-post__content">
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
</div>
<?php get_footer(); ?>
