<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Browser status bar's color-->
    <meta name="theme-color" content="#333">
    <meta name="apple-mobile-web-app-status-bar-style" content="#333">
    <title><?php print lahar_get_site_title() ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="header__logo">
		<?php the_custom_logo(); ?>
    </div>
    <div class="header__menu">
		<?php
		wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
    </div>
    <button class="hamburger hamburger--spin" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="header__search">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
			<path d="M19.769,18.408l-5.408-5.357c1.109-1.364,1.777-3.095,1.777-4.979c0-4.388-3.604-7.958-8.033-7.958
				c-4.429,0-8.032,3.57-8.032,7.958s3.604,7.958,8.032,7.958c1.805,0,3.468-0.601,4.811-1.6l5.435,5.384
				c0.196,0.194,0.453,0.29,0.71,0.29c0.256,0,0.513-0.096,0.709-0.29C20.16,19.426,20.16,18.796,19.769,18.408z M2.079,8.072
				c0-3.292,2.703-5.97,6.025-5.97s6.026,2.678,6.026,5.97c0,3.292-2.704,5.969-6.026,5.969S2.079,11.364,2.079,8.072z"></path>
	</svg>
    </div>
</div>