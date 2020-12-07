<?php session_start(); ?> 
<!doctype html>
<html>
  <head>
    <title><?php echo wp_title() ?></title>
     <?php wp_head(); ?>
	  <!--<link rel="shortcut icon" href="./assets/images/logo_archenis_small.png" type="image/x-icon">-->
	  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
  </head>
<body>
  <?php get_template_part('menu'); ?>  