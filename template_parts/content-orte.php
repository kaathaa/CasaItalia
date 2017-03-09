
<?php
	$link_values = get_post_custom_values( 'Link' );
<<<<<<< HEAD
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
=======

	if(isset($link_values)) {
		foreach ( $link_values as $key => $value ) { ?>
			<div class="col-sm-4">
			<a href="<?php echo $value; ?>" target="_blank">
				<div class="page-orte-content hvr-shadow">						
					<?php the_post_thumbnail( 'card', array('aligncenter') ); ?>
					<h3><?php the_title();?></h3>
					<?php the_content();?>									
				</div>
			</a>
			</div>
		<?php } 
	} else { ?>
		<div class="col-sm-4">
			<div class="page-orte-content hvr-shadow">																	
				<?php the_post_thumbnail( 'card', array('aligncenter') ); ?>
				<h3><?php the_title();?></h3>
				<?php the_content();?>																
			</div>
>>>>>>> 98143105bee40ea8559bc9f0a6ace015851ef13e
		</div>
	<?php } ?>

	
	

    
