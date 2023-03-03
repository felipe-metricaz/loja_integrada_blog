<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_da_Loja_Integrada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'loja_integrada_blog' ); ?></a>

	<header id="masthead" class="site-header li-grey">
		<div class="row container no-margin-bottom">
			<div class="mobile-nav-icon col s2 hide-on-med-and-up"><a href="#" data-target="mobile-nav" class="sidenav-trigger li-roxo-text"><i class="material-icons">menu</i></a></div>
			<div class="site-branding col s8 m4 no-padding">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><?php the_custom_logo(); ?></h1>
					<?php
				else :
					?>
					<p class="site-title"><?php the_custom_logo(); ?></p>
					<?php
				endif;
				 ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="hide-on-small-only	main-navigation li-roxo-text col s7">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'loja_integrada_blog' ); ?></button>
				<div class="flex-me">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div>
						<a href="https://criar.lojaintegrada.com.br/tudo-sobre" target="_blank" class="btn white-text">Criar loja</a>
					</div>
				</div>
			</nav><!-- #site-navigation -->
			
			<div class="sidenav" id="mobile-nav">
				<div class="site-search-mobile">
					<form action="" method="get" class="search-form" target="top">
						<input name="s" class="browser-default" placeholder="Procurar..." type="search" value="" autocomplete="off">
						<button aria-label="Search Button" type="submit" class="search-form-button"><i class="material-icons">search</i></button>
					</form>
				</div>
				<div class="divider"></div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'mobile-nav-ul no-margin',
					)
				);
				?>
				<div class="footer-mobile-nav flex-me">
					<a class="li-roxo-text" target="_blank" href="https://pt-br.facebook.com/lojaintegrada/"><i class="fa fa-facebook-square"></i></a>
					<a class="li-roxo-text" target="_blank" href="https://twitter.com/lojaintegrada"><i class="fa fa-twitter"></i></a>
					<a class="li-roxo-text" target="_blank" href="https://www.instagram.com/lojaintegrada/"><i class="fa fa-instagram"></i></a>
					<a class="li-roxo-text" target="_blank" href="https://www.youtube.com/c/LojaIntegradaBR-loja-virtual"><i class="fa fa-youtube-play"></i></a>
					<a class="li-roxo-text" target="_blank" href="https://www.linkedin.com/company/loja-integrada/"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>

			<div class="site-search col s2 m1">
				<a class="li-roxo-text" href="#"><i class="material-icons">search</i></a>
				<form action="" method="get" class="search-form" target="top">
					<input name="s" class="browser-default" placeholder="Procurar..." type="search" value="" autocomplete="off">
					<button aria-label="Search Button" type="submit" class="search-form-button"><i class="material-icons">search</i></button>
				</form>
			</div>
		</div>
	</header><!-- #masthead -->
