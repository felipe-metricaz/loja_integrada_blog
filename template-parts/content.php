<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_da_Loja_Integrada
 */

?>
<article>
    <div class="gallery-thumbnail">
        <a href="">
                <img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2022/11/Ideias-criativas-de-nomes-para-loja-de-roupas-360x180.webp" alt="">
        </a> 
        <div class="over-legend">
            <div class="post-category">
                <a href="">Category</a>
            </div>
        </div>
    </div>
    <div class="gallery-post-info">
        <h4>
            <a href="">Ideias criativas de nomes para loja de roupas</a>
        </h4>
        <div class="gallery-post-data">
           <a href="https://blog.lojaintegrada.com.br/ideias-criativas-de-nomes-para-loja-de-roupas/"><i class="tiny material-icons">access_time</i> 1 de dezembro de 2022</a>
        </div>
    </div>
    <?php if (is_search() or is_404()): ?>
    <div class="entry-content">
    	<p>
    		Se você possui um ecommerce, provavelmente já deve ter ouvido falar sobre o tópico acima. Esse serviço é oferecido por...
    	</p>
	</div><!-- .entry-content -->
    <?php endif ?>
</article>
