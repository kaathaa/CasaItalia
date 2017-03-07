
<?php
	$link_values = get_post_custom_values( 'Link' );
	foreach ( $link_values as $key => $value ) {
		
		?>
		<div class="col-md-4">
		<a href="<?php echo $value; ?>" target="_blank">
			<div class="page-orte-content hvr-shadow">
																		
					<?php the_post_thumbnail( 'orte', array('aligncenter') ); ?>
					<h3><?php the_title();?></h3>
					<?php the_content();?>												
				
			</div>
		</a>
		</div>
	<?php } ?>

	
	

    
