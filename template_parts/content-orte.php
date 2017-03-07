
<?php
	$link_values = get_post_custom_values( 'Link' );
	foreach ( $link_values as $key => $value ) {
		
		?><a href="<?php echo $value; ?>">			
			<article>		
				<div class="page-orte-content">	
					<div><?php the_post_thumbnail( 'orte', array('aligncenter') ); ?>	</div>
					<h3 class=""><?php the_title();?></h3>
					<?php the_content();?>
				</div>
			</article>							
		</a>
		
	<?php } ?>

	
	

    
