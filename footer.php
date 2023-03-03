<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_da_Loja_Integrada
 */

?>

	<footer id="colophon" class="site-footer li-grey">

<div class="container">
 <div class="row flex-me">
  	<div class="col s12 m3">
		<img class="logo-footer" src="https://blog.lojaintegrada.com.br/wp-content/uploads/2022/03/Logo_Blog_Fundo-Branco-1-1-1024x124.png.webp" alt="Logo Loja Integrada">
		<p>Feita por quem ama tecnologia, gente e lojas virtuais 💚</p>
		<div class="footer-selos">
			<img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2022/03/ebit.webp" alt="E-bit - Melhor plataforma de e-commerce">
			<img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2022/03/selo-premio-ecommercebrasil_2.png" alt="Prêmio e-commerce Brasil">
		</div>
	</div>
	<div class="col s12 m2">
		<h6>Institucional</h6>
		<ul>
			<li>
				<a href="">Planos</a>
			</li>
			<li>
				<a href="">Quem somos</a>
			</li>
			<li>
				<a href="">Casos de sucesso</a>
			</li>
			<li>
				<a href="">Como migrar</a>
			</li>
		</ul>
		<h6>Segmentos</h6>
		<ul>
			<li>
				<a href="">Casa e Decoração</a>
			</li>
		</ul>
	</div>
	<div class="col s12 m2">
		<h6>Aprenda</h6>
		<ul>
			<li>
				<a href="">Materiais</a>
			</li>
			<li>
				<a href="">Blog</a>
			</li>
			<li>
				<a href="">Comunidade</a>
			</li>
			<li>
				<a href="">Escola Bora Vender</a>
			</li>
			<li>
				<a href="">Ajuda L.I.</a>
			</li>
		</ul>
	</div>
	<div class="col s12 m2">
		<h6>Serviços</h6>
		<ul>
			<li>
				<a href="">Loja de aplicativos</a>
			</li>
			<li>
				<a href="">Loja de temas</a>
			</li>
			<li>
				<a href="">Loja de serviços e soluções</a>
			</li>
			<li>
				<a href="">Parceiros de destaque</a>
			</li>
		</ul>

	</div>
	<div class="col s12 m2">
		<h6>Carreiras</h6>
		<ul>
			<li>
				<a href="">Trabalhe Conosco</a>
			</li>
		</ul>
		<h6>Parceria</h6>
		<ul>
			<li>
				<a href="">Seja um parceiro</a>
			</li>
		</ul>

	</div>

 </div>
</div>

<style>

/* Footer styles */

footer .row{
	padding-top: 54px;
    margin: 0px;
}

.site-footer::before{
	content: "";
    width: 100%;
    height: 7px;
    position: absolute;
    z-index: 2;
    left: 0;
    background: linear-gradient(180deg,rgba(0,0,0,.15) 0,transparent);
}

	.footer-selos{
		display: flex;
  	    justify-content: space-evenly;
	}

	.footer-selos img{
		max-width: 100px;
	}

	footer .s2{
		width: 15% !important;
	}

	footer h6,
	footer li{
		margin: 0px 0px 24px 0px;
	}

	footer ul{
		padding: 0px 0px 1px 0px;
		margin: 0px 0px 20px 0px;
	}

	footer h6{
		color: #371e56;
		font-size: 18px;
    	font-weight: 600;
	}

	footer a,
	footer p{
		color: #463758 !important;
		font-size: 14px;
		-webkit-transition: all .3s;
		-o-transition: all .3s;
		transition: all .3s;
	}

	

@media only screen and (max-width: 767px){
	
	footer .row, 
	footer .col{
		display: grid;
	}

	footer .s4{
		justify-items: center;
	}

	.footer-selos{
		display: grid;
		justify-items: center;
		margin-bottom: 50px;
	}

	.footer-selos img{
		margin: 10px;
	}

	.logo-footer{
		margin: 20px;
		max-width: 70%;
	}

	footer .s4 p{
		margin: 35px 10px;
  	    text-align: center;
	}

}

/* End footer Styles */

</style>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
