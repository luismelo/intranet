<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>					
	<div class="wrapper" id="top">
    <div id="push_panel" class="single-page-nav panel" role="navigation">	
	<div class="left_panal">	
	<div class="logo">
	<h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
    </div> 	
		<div id="MainNav">		  
		<?php if (is_front_page()) { ?>
		<?php blackwell_frontpage_nav() ?>
		<?php } else { ?>
		<?php blackwell_nav(); ?>
		<?php } ?> 
		</div>
		</div>
		<button class="menu-link"></button>
    </div>   
	<div class="wrap push">