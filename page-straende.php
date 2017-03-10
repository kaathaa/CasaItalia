<?php
 /**
 * Template Name: Page-Strände
 */
?>
<?php get_header(); ?>
		<!-- Seiteninhalt -->
		
		<main class="orte-content">  
			<div class="page-header">
				<h2 class="text-center"><?php echo wp_title('');?></h2>
			</div>	

			<div class="row">
				<?php $i = 0; ?>
				
				<?php         
				$args = array(
					post_type => 'beach',
					posts_per_page => 3
				);
				
				$loopBeach = new WP_Query($args);
				
				if ( $loopBeach->have_posts() ) : while ( $loopBeach->have_posts() ) : $loopBeach->the_post(); ?>
				   <?php get_template_part('template_parts/content', 'straende');?>
			   
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
