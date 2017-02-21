<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); bloginfo('name') ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<?php if( !is_front_page() ){
		echo '<style>body.custom-background{background-image:none !important;}</style>';
	}?>
    <?php wp_head();?>
  </head>

  <body <?php body_class(); ?>>
	<div class="container">
		<header>
            <?php get_template_part('template_parts/navi'); ?>
			<h1><a href="<?php echo home_url('/') ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
		</header>
