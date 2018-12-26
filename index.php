<?php get_header(); ?>
    <div class="body">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <img class="lahar-loader" src="<?php echo get_template_directory_uri(); ?>/img/loading.gif">
        <div class="loadable-content">
			<?php get_template_part( 'partials/content-home' ) ?>
        </div>
    </div>
<?php get_footer(); ?>