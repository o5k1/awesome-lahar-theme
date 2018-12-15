<?php get_header(); ?>
    <div class="body contacts">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
		<?php if ( function_exists( 'gmwd_map' ) ) {
			gmwd_map( 1, 1 );
		} ?>
        <div class="contatti__content">
            <div class="subsection">
                <h1 class="subsection-title">Contatti</h1>
                <div class="idea-editors">
                    <div class="contatti-content">
                        <ul id="menu-social-menu" class="menu">
                            <li id="menu-item-6949"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6949"><a
                                        href="http://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li id="menu-item-6950"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6950"><a
                                        href="http://instagram.com"><i class="fab fa-instagram"></i></a></li>
                            <li id="menu-item-6964"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6964"><a
                                        href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                            <li id="menu-item-6965"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6965"><a
                                        href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                        <div class="contact-form">
							<?php print do_shortcode( '[contact-form-7 id="6966" title="Contatti"]' ); ?>
                        </div>
                        <p class="contatti-footer">
                            Ti sei abbonato e hai delle domande? Scrivi a
                            <a href="mailto:spedizioni@laharmagazine.com">spedizioni@laharmagazine.com</a>
                            che sistemiamo tutto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>