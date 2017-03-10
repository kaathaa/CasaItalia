<?php
 /**
 * Template Name: Page-Strände
 */
?>
<?php get_header(); ?>
		<!-- Seiteninhalt -->
		
		<main>  

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row"><?php the_content(); ?></div>	
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>	
			
			<div class="row">
				<?php $i = 0; ?>
				
				<?php         
				$args = array(
					post_type => 'beach',
				);				
				$loopBeach = new WP_Query($args);
				
				if ( $loopBeach->have_posts() ) : while ( $loopBeach->have_posts() ) : $loopBeach->the_post(); ?>
				   <?php get_template_part('template_parts/content');?>
			   
			<?php			   
			$i++;	
			if($i % 3 == 0){
				echo '</div><div class="row">';
			} 			   
			endwhile; ?>			   
			</div>				   
			   
			<?php else : ?>
				<?php get_template_part('template_parts/content','error');?>
			<?php endif; wp_reset_postdata(); ?>
	
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>
