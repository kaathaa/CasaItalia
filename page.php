<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<section class="page-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="page-header">
				<h2><?php the_title(); ?></h2>
			</div>
		
				<?php the_content(); ?>		
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			
		</section>
	</div><!--/.container-->
<?php get_footer(); ?>



