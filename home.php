<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<main class="index-content">
			<h2><?php wp_title(''); ?></h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="home-article">
				<div class="home-header">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="home-content">
					<?php the_content(); ?>	
					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				</div>
			</article>
				<?php endif; ?>	
				
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>