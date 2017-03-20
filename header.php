<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); echo ' '; wp_title('') ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
	<?php 
	if( !is_front_page() ){
		echo '<style>body.custom-background{background-image:none !important;}</style>';
	} elseif(is_front_page()) {
		echo '<style>
				header{background:none !important;}
				.overlay {
    				background: rgba(0,0,0,0) !important;
				}
				body{
					padding-bottom: 0 !important;
					margin-bottom: 0;
				}
			</style>';
	}
	?>
	
	
	<style>
	header{		
		background:url(<?php header_image();?>) no-repeat;
		background-size: cover;
		min-height: <?php echo get_custom_header()->height; ?>px;
		width: <?php echo get_custom_header()->width; ?>
	}
	header p,
	header a,
	.navbar-nav > li > a{
		color: <?php $casaItalia_color = get_option('casaItalia_color'); echo $casaItalia_color; ?> !important;
	}
	.overlay{
		background: rgba(0,0,0,<?php $casaItalia_opacity = get_option('casaItalia_opacity'); echo $casaItalia_opacity ;?>);
	}
	.active > a{
		border-bottom: 2px solid <?php echo $casaItalia_color ;?>;
		background: transparent !important;
	}	
	footer{
		color: <?php $footer_color = get_option('casaItalia_color_footer'); echo $footer_color; ?>;
		background: <?php $footer_bg = get_option('casaItalia_background_footer'); echo $footer_bg; ?> !important;
	}
	</style>
	
	
  </head>

  <body <?php body_class(); ?>>
	<div class="container-fluid">
		<header>
			<div class="overlay">
	            <?php get_template_part('template_parts/navi'); ?>
				<div class="header-text">
					<h1><a href="<?php echo home_url('/') ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
			</div>	
		</header>