<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
		<?php
		while ( have_posts() ) : the_post();?>
        <h1><?php the_title()?></h1>
        <div><?php the_tags()?></div>
        <div><?php the_content()?></div>
		<?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer();?>