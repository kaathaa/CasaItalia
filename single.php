<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<main class="single-content">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>		
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>			
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>
