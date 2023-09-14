<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thème_Perso
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<header>
	<nav>
		<img src="<?= get_site_icon_url()?>" alt="Logo du site">
		<!-- menu -->
		<?php
		 wp_nav_menu(
			array(
				'menu' => 'primary-menu'
			)
			);
		?>

	</nav>
	<?php feur_post_thumbnail();?>

</header><!-- #masthead -->