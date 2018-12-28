<div class="footer">
	<?php get_template_part( 'partials/support-subscriber' ); ?>
	<?php
	get_template_part( 'partials/newsletter-subscriber' );
	wp_nav_menu( array( 'theme_location' => 'social-menu' ) );
	?>
    <div class="footer__signature">
        This site was made with <i class="fas fa-heart"></i> by
        <a href="https://www.linkedin.com/in/andreatombolato/">Andrea Tombolato</a>
    </div>
</div>
<?php wp_footer() ?>
</body>
</html>
