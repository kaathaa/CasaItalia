<?php get_header(); ?>
		<!-- Seiteninhalt -->
		page
		<main class="page-content">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('template_parts/content', 'content'); ?>
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>					
		</main>

	</div><!--/.container-->
<?php get_footer(); ?>



