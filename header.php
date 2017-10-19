<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Poseidon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/poseidon-dlss/custom/particles.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'poseidon' ); ?></a>

		<?php do_action( 'poseidon_header_bar' ); ?>

		<header id="masthead" class="site-header clearfix" role="banner" style="z-index: 9999;">

			<div class="header-main container clearfix">

				<div id="logo" class="site-branding clearfix" style="display: -ms-flexbox; display: -webkit-flex;
				    display: flex; -ms-flex-align: center; -webkit-align-items: center; -webkit-box-align: center;
				    align-items: center;">

					<?php poseidon_site_logo(); ?>
					<?php poseidon_site_title(); ?>
					<?php poseidon_site_description(); ?>

				</div><!-- .site-branding -->

				<nav id="main-navigation" class="primary-navigation navigation clearfix" role="navigation"
                    style="margin: 32px 0 0 0;">
					<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'main-navigation-menu',
							'echo' => true,
							'fallback_cb' => 'poseidon_default_menu',
							)
						);
					?>
				</nav><!-- #main-navigation -->

			</div><!-- .header-main -->

		</header><!-- #masthead -->

		<?php poseidon_header_image(); ?>

		<?php poseidon_slider(); ?>

		<?php poseidon_breadcrumbs(); ?>

		<div id="content" style="position: relative; top: -72px;" class="site-content container clearfix">
