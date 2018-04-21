<?php get_header(); ?>
	<div class="body">
		<?php get_search_form(); ?>
		<div class="archive-grid">
			<?php if ( get_cat_icon() ) : while ( have_posts() ) :
			the_post(); ?>
			<div class="home__current-category">
				<h1 class="home__current-category-name"><?php the_title()?></h1>
			</div>
			<a href="<?php the_permalink() ?>" class="home-grid__cell">
				<div class="home-grid__cell-shadow"></div>
				<div class="home-grid__cell-post">
					<div class="home-post__content">
						<div class="home-post__title"><?php the_title(); ?></div>
						<div class="home-post__excerpt"><?php the_excerpt(); ?></div>
					</div>
				</div>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</a>
		</div>
	</div>
<?php get_footer(); ?>