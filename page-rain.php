<?php
 /**
 * Template Name: Half-Card
 */
?>
<?php get_header(); ?>
		<!-- Seiteninhalt -->
		
		<main>  
			<div class="row">
				<div class="page-content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>	
					<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>	
			</div>	

			
			<?php         
			$args = array(
				post_type => 'rain',
				posts_per_page => 3
			);
			
			$loopRain = new WP_Query($args);
			
			if ( $loopRain->have_posts() ) : while ( $loopRain->have_posts() ) : $loopRain->the_post(); ?>

				<div class="row divider">
					<?php get_template_part('template_parts/content', 'half-card');?>
				</div>	

			<?php endwhile; ?>			    
			<?php else : ?>
				<?php get_template_part('template_parts/content','error');?>
			<?php endif; wp_reset_postdata(); ?>
	
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>

