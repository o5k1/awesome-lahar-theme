<?php get_header(); ?>
<div class="body">
	<?php get_search_form(); ?>
    <ul class="archive-grid">
		<?php $terms = apply_filters( 'taxonomy-images-get-terms', '' );
		foreach ( $terms as $term ):?>
            <li class="archive-grid__item">
                <a href="<?php print get_category_link($term)?>">
	                <?php print wp_get_attachment_image( $term->image_id, 'medium' );?>
                </a>
            </li>
		<?php endforeach; ?>
    </ul>
</div>
<?php get_footer(); ?>