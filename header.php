<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="page-container">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="logo" alt="quotes on Dev logo" src='<?php echo get_template_directory_uri() . '/logo/qod-logo.svg' ?>'>
				</a>
				</div><!-- .site-branding -->
				<!-- <?php var_dump (get_template_directory_uri() . '/logo/qod-logo.svg'); ?>; -->
				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
				<div class="leftquote"> 
					<h1> <i class="fa fa-quote-left"></i></h1>
				</div>
				<div class="quote-content"> 

				</div>
				<div class="rightquote">
					<h1> <i class="fa fa-quote-right"></i> </h1> 
				</div>