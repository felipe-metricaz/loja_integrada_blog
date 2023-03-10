<?php /* Template Name: Categoria Especial */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_da_Loja_Integrada
 */

get_header();
?>

	<main id="primary" class="site-main">
		<header class="container">
			<h1> <?php echo get_the_title() ?></h1>
		</header>
		<?php get_template_part( 'template-parts/section', 'hero-page'); ?>

		<?php //get_template_part( 'template-parts/section', 'acessados-page'); ?>

	</main><!-- #main -->

<?php
get_footer();
