
<?php
	$link_values = get_post_custom_values( 'Link' );
	foreach ( $link_values as $key => $value ) {
		?><a href="<?php echo $value; ?>">	
		
			<article>

		
				<div class="page-orte-content">	
					<div class=""><?php the_post_thumbnail( 'orte' ); ?>	</div>
					<h3 class=""><?php the_title();?></h3>
					<p class="content-orte-content"><?php the_content('Weiterlesen...');?></p>	
				</div>
			</article>			
				
		</a>
	<?php } ?>

	
	

    
