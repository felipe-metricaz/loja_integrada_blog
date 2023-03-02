<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_da_Loja_Integrada
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">

			<div class="row">
				<div class="col s6">
					<article>
						<div>
							<a href="">
								<div>

								</div>
							</a>
						</div>
						<div>
							<div class="post-category">
								<a href="">Categoria</a>
							</div>
							<div class="post-content">
								<h3>Como montar um E-commerce</h3>
								<div class="post-info">
									<div class="autor">
										<a href="">Ana</a>
									</div>
									<div class="data">
										<a href="">Data</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				

				<div class="col s4">
					<article>
						<h2>Teste</h2>
					</article>
					<article>
						<h2>Teste</h2>
					</article>
				</div>
			</div>
			
		</div>



	</main><!-- #main -->

<?php
get_footer();
