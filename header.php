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
		<link rel="stylesheet" id="font-awesome-cdn-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.0" type="text/css" media="all">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<div class="page-container">
		<div id="page" class="hfeed site">
			

			<div class="logo">
				<a href="http://localhost:8888/QuotesOnDev/">
					<img class="logo-svg" src="<?php echo get_template_directory_uri() ?>/assets/qod-logo.svg">
				</a>
			</div>

			<!-- #masthead -->

			<div id="content" class="site-content">
