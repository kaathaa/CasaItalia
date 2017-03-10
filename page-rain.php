<?php
 /**
 * Template Name: Page-Schlechtwetter
 */
?>
<?php get_header(); ?>
		<!-- Seiteninhalt -->
		
		<main class="
		-content">  
			<div class="page-header">
				<h2 class="text-center"><?php echo wp_title('');?></h2>
			</div>	

			
				
				
				<?php         
				$args = array(
					post_type => 'rain',
					posts_per_page => 3
				);
				
				$loopRain = new WP_Query($args);
				
				if ( $loopRain->have_posts() ) : while ( $loopRain->have_posts() ) : $loopRain->the_post(); ?>

					<div class="row">
				   		<?php get_template_part('template_parts/content', 'rain');?>
			   		</div>	

				<?php endwhile; ?>			    
				<?php else : ?>
					<?php get_template_part('template_parts/content','error');?>
				<?php endif; wp_reset_postdata(); ?>
	
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>
