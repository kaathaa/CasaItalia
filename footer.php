<footer class="footer">
    <div class="container">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'weather_widget' ) ) : ?>
			<?php dynamic_sidebar( 'weather_widget' ); ?>
		<?php endif; ?>

   </div>
</footer>




<!-- Bootstrap-JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<?php wp_footer();?>

<script>
	jQuery(function( $ ){
	 jQuery('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').attr('data-lightbox','roadtrip');
	});
</script>
</body>
</html>

