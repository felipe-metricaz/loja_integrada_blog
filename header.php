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
			<div class="site-branding col s4">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><?php the_custom_logo(); ?></h1>
					<?php
				else :
					?>
					<p class="site-title no-margin"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a></p>
					<?php
				endif;
				 ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation li-roxo-text col s8">
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
						<a href="#" class="btn">Criar loja</a>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
