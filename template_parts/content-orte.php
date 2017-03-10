
<?php
	$link_values = get_post_custom_values( 'Link' );

	if(isset($link_values)) {
		foreach ( $link_values as $key => $value ) { ?>
			<div class="col-sm-4">
			<a href="<?php echo $value; ?>" target="_blank">
				<div class="page-orte-content">						
					<?php the_post_thumbnail( 'card', array('aligncenter') ); ?>
					<h3><?php the_title();?></h3>
					<?php the_content();?>									
				</div>
			</a>
			</div>
		<?php } 
	} else { ?>
		<div class="col-sm-4">
			<div class="page-orte-content">																	
				<?php the_post_thumbnail( 'card', array('aligncenter') ); ?>
				<h3><?php the_title();?></h3>
				<?php the_content();?>																
			</div>
		</div>
	<?php } ?>

	
	

    
