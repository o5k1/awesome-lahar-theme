<?php
get_header();
?>

<?php
while ( have_posts() ) : the_post();

	get_template_part( 'partials/content-page', 'page' );

endwhile; // End of the loop.
?>

<?php
get_footer();