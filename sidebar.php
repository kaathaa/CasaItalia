		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div class="well well-lg">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		<?php endif; ?>
		
		
		
		
			<?php 
			
			$args = array(
				post_type => 'post',
				posts_per_page => 1,
				);
			
			$loop_front_page = new WP_Query($args);
			
			
			if ( $loop_front_page->have_posts() ) : while ( $loop_front_page->have_posts() ) : $loop_front_page->the_post(); ?>
				<div class="well well-lg">
					<div class="home-header">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="home-content">
						<?php the_content(); ?>								
						<a href="<?php echo get_page_link(20); ?>">ID auswechseln!!!!!!!!!!!</a>
						<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					</div>

				</div>
			<?php endif; wp_reset_postdata(); ?>
			