<?php get_header(); ?>
<?php
global $posts;
$args  = array( 'post_type' => 'attachment', 'tag' => 'collab_wall' );
$posts = get_posts( $args );
shuffle( $posts );
?>
    <div class="body collaborate" style="background-image: url('<?php echo( $posts[0]->guid ) ?>')">
		<?php wp_reset_query(); ?>
		<?php get_search_form(); ?>
        <div class="collaborate-content">
			<?php echo the_content() ?>
        </div>
    </div>
<?php get_footer(); ?>