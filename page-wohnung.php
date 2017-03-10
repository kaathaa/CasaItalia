<?php
 /**
 * Template Name: Page-Wohnung
 */
?>

<?php get_header(); ?>
		<!-- Seiteninhalt -->

		<main>		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('template_parts/content', 'wohnung'); ?>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>					
		</main>

	</div><!--/.container-->
<?php get_footer(); ?>