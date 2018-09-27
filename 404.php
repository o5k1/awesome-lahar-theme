<?php get_header(); ?>
<?php
global $posts;
$args  = array( 'post_type' => 'attachment', 'tag' => '404_wall' );
$posts = get_posts( $args );
shuffle( $posts );
$backgroundSrc = wp_get_attachment_url($posts[0]->ID);
?>
    <div class="body" style="background-image: url('<?php echo( $backgroundSrc ) ?>')">
		<?php get_search_form(); ?>
        <div class="menu--mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
        </div>
        <div class="body-error">
            <h1 class="body-error__title">Oops...la pagina che stai cercando non esiste</h1>
            <div class="body-error__content">
                <p class="body-error__quote">"C'è una meta, ma non una via; ciò che chiamiamo via è un indugiare."</p>
                <p class="body-error__quote-author">Franz Kafka</p>
                <a href="<?php print get_home_url() ?>" class="go-home-action wpcf7-form-control wpcf7-submit">Torna alla home</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>