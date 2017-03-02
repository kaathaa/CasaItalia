<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<main class="index-content">

		<mark>page-19.php</mark>
		<?php comments_template(); ?>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="index-header">
				<h2><?php the_title(); ?></h2>
			</div>
		
				<?php the_content(); ?>		
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>	
				
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>
