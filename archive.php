<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_da_Loja_Integrada
 */

get_header();
?>

	<main id="primary" class="site-main">

		
		<section class="container section-hero">
			<h2 class="title-label">Mais recentes</h2>
			<div class="divider"></div>
			<div class="row">
				
			<div class="col s12 m6 no-padding-left">
					<article>
						<div class="gallery-thumbnail shadow">
							<a href="#">
								<img class="run" src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2023/03/assistente-ecommerce-auxiliar-750x592.webp" alt="">
							</a>
							<div class="over-legend">
								<div class="post-category">
									<a href="#">Category</a>
								</div>
								<h2><a class="white-text" href="#">Como montar um ecommerce: Dicas para 2023</a></h2>
								<div class="post-meta">
									 <a href="#">7 DE MARÇO DE 2023</a>
								</div>
							</div>
						</div>
					</article>
				</div>
		
				
			<div class="col s12 m6 no-padding-right">
					<article>
						<div class="gallery-thumbnail shadow">
							<a href="#">
								<img class="run" src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2023/03/assistente-ecommerce-auxiliar-750x592.webp" alt="">
							</a>
							<div class="over-legend">
								<div class="post-category">
									<a href="#">Category</a>
								</div>
								<h2><a class="white-text" href="#">Como montar um ecommerce: Dicas para 2023</a></h2>
								<div class="post-meta">
									<a href="#">7 DE MARÇO DE 2023</a>
								</div>
							</div>
						</div>
					</article>
				</div>
		
			</div>

		</section>


		<section class="container section-como-vender">
				<div class="row">
					<nav>
						<div class="nav-wrapper">
							<div class="col s12 no-padding">
								<a href="#!" class="breadcrumb">Home</a>
								<a href="#!" class="breadcrumb">Categoria</a>
								<a href="#!" class="breadcrumb">Marketing e Vendas</a>
								<a href="#!" class="breadcrumb">Como vender nas redes sociais</a>
							</div>
						</div>
					</nav>
				
				<h2 class="li-roxo-text">Jornadas de aprendizado especiais para você</h2>
				<p>Tudo o que você precisa saber para conquistar sucesso com sua loja virtual e vender 
					muito na internet. Redes sociais, anúncios, fotografia, descrição de produtos e muito mais! 
					Conteúdos para te ajudar a não perder nenhuma venda no seu ecommerce! Leia sem moderação 😉</p>
				
				</div>
		</section>


<style>
	.section-como-vender nav{
		background-color: #ffffff;
	}

	.section-como-vender nav .breadcrumb{
		font-size: 14px;
		color: black;
	}

	.section-como-vender nav .breadcrumb::before{
		font-size: 16px;
		color: #a0a0a0;
		vertical-align: middle;
		margin: 0 5px 0 0px;
	}

	.section-como-vender nav .breadcrumb:last-child{
		color: #a0a0a0;
	}



</style>


	</main><!-- #main -->

<?php
get_footer();
