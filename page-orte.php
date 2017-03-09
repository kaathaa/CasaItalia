<?php
 /**
 * Template Name: Page-Orte
 */
?>
<?php get_header(); ?>
		<!-- Seiteninhalt -->
		
		<main class="orte-content">  
			<div class="page-header">
				<h2 class="text-center"><?php echo wp_title('');?></h2>
			</div>	

			<div class="row guestbook_comments">
				<?php $i = 0; ?>
				
				<?php         
				$args = array(
					post_type => 'orte',
					posts_per_page => 3
				);
				
				$loopOrte = new WP_Query($args);
				
				if ( $loopOrte->have_posts() ) : while ( $loopOrte->have_posts() ) : $loopOrte->the_post(); ?>
				   <?php get_template_part('template_parts/content', 'orte');?>
			   
			<?php			   
			$i++;	
			if($i % 3 == 0){
				echo '</div><div class="row guestbook_comments">';
			} 			   
			endwhile; ?>			   
			</div>				   
			   
			<?php else : ?>
				<?php get_template_part('template_parts/content','error');?>
			<?php endif; wp_reset_postdata(); ?>
	
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>