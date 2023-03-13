<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blog_da_Loja_Integrada
 */

get_header();
?>
<div class="site-main container row">
	<main id="primary" class="col s12 m8 no-padding-left">
		<div id="breadcrumbs">
			<span class=""><a href="https://blog.lojaintegrada.com.br">Home</a></span>
			<i class="fa fa-angle-right"></i>
			<span class="breadcrumb_last_link"><a href="">Page Not Found</a></span>
    	</div>
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">Página não encontrada</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?</p>
				<?php get_search_form(); ?>
				<div>
				    <h2 class="title-label">Últimos Posts</h2>
				    <div class="divider"></div>
				    <div class="row">
				    	<div class="col s12 m6">
				    		<?php get_template_part( 'template-parts/content'); ?>
				    	</div>
				    	<div class="col s12 m6">
				    		<?php get_template_part( 'template-parts/content'); ?>
				    	</div>
				    	<div class="col s12 m6">
				    		<?php get_template_part( 'template-parts/content'); ?>
				    	</div>
				    	<div class="col s12 m6">
				    		<?php get_template_part( 'template-parts/content'); ?>
				    	</div>
				    	
				    </div>

				</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
	<div class="site-main col s12 m4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
