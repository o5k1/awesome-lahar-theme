<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="header__logo">
	        <?php the_custom_logo();?>
        </div>
        <div class="header__menu">
	        <?php
	        wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <div class="header__search">
	        <?php get_search_form();?>
        </div>
    </div>