<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="main-header" role="banner">
		<ul class="main-header-parts">
			<li class="main-header-part logo">
				<!-- LOGO -->
				<img src="http://lorempicsum.com/futurama/500/500/4" />

			</li>
			<li class="main-header-part navigation">
				<!-- SITE TITLE & DESCRIPTION -->
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
				<!-- NAVIGATION -->
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</li>
			<li class="main-header-part information">
				<!-- CONNEXION -->
				<div class="connexion">

				</div>
				<!-- RESEARCH -->
				<div class="research">
					<?php get_search_form(); ?>
				</div>
			</li>
		</ul><!-- .main-header-parts -->
	</header><!-- .main-header -->
