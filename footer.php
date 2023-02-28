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

	<footer id="colophon" class="site-footer">

<div class="container">
 <div class="row">
  	<div class="col s4">
		<h3>Teste</h3>
		<img src="https://blog.lojaintegrada.com.br/wp-content/uploads/2022/03/Logo_Blog_Fundo-Branco-1-1-1024x124.png.webp" alt="">
	</div>
  <div class="col s2"><h3>Teste</h3></div>
  <div class="col s2"><h3>Teste</h3></div>
  <div class="col s2"><h3>Teste</h3></div>
  <div class="col s2"><h3>Teste</h3></div>

 </div>
</div>

<style>

/* Footer styles */


@media only screen and (max-width: 768px){
	
	footer .row{
		display: grid;
	}
	
	footer .row .s4{
		display: grid;
		width: 100% !important;
		margin: 0px;
		justify-items: center;
	}

	

}

/* End footer Styles */

</style>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
