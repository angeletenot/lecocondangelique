<?php get_header(); ?>

	<div class="wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
