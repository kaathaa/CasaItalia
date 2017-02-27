<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="page-header">
				<h2><?php the_title(); ?></h2>
			</div>
		
				<?php the_content(); ?>		
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			
		</div>
	</div><!--/.container-->
<?php get_footer(); ?>



