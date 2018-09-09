<?php get_header(); ?>
    <div class="body">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
		<?php get_template_part( 'partials/content-home' ) ?>
    </div>
<?php get_footer(); ?>