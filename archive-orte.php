<?php
 /**
 * Template Name: Archive Orte Template
 */
?>

<?php get_header(); ?>
		<!-- Seiteninhalt -->
		


			<main class="orte-content">  
			<div class="page-header">
				<h2 class="text-center"><?php echo wp_title('');?></h2>
				<h2 class="text-center"><?php echo the_archive_title();?></h2>
			</div>		
			<?php         
			$args = array(
				post_type => 'orte',
				posts_per_page => 3
			);
			
			$loopOrte = new WP_Query($args);
			
			if ( $loopOrte->have_posts() ) : while ( $loopOrte->have_posts() ) : $loopOrte->the_post(); ?>
			   <?php get_template_part('template_parts/content', 'orte');?>
			<?php endwhile; else : ?>
				<?php get_template_part('template_parts/content','error');?>
			<?php endif; wp_reset_postdata(); ?>
	
		</main>
	</div><!--/.container-fluid-->
<?php get_footer(); ?>
