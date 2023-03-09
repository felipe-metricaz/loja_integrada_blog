<section class="container-fluid section-materiais">
        <div class="container">
            <h2 class="title-label">Materiais mais baixados</h2>
            <div class="row">
                <div class="carousel">
                    <article class="carousel-item">
                        <div class="gallery-thumbnail">
                            <a href="#">
                                <img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2023/03/assistente-ecommerce-auxiliar-350x250.webp" alt="">
                            </a>
                            <div class="over-legend">
                                <div class="post-category">
                                    <a href="#">Category</a>
                                </div>
                                <h2><a class="white-text" href="#">Como montar um ecommerce: Dicas para 2023</a></h2>
                                <div class="post-meta">
                                    <i class="material-icons">access_time</i> <a href="#">7 DE MARÇO DE 2023</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item">
                        <div class="gallery-thumbnail">
                            <a href="#">
                                <img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2023/03/assistente-ecommerce-auxiliar-350x250.webp" alt="">
                            </a>
                            <div class="over-legend">
                                <div class="post-category">
                                    <a href="#">Category</a>
                                </div>
                                <h2><a class="white-text" href="#">Como montar um ecommerce: Dicas para 2023</a></h2>
                                <div class="post-meta">
                                   <i class="material-icons">access_time</i> <a href="#">7 DE MARÇO DE 2023</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="carousel-item">
                        <div class="gallery-thumbnail">
                            <a href="#">
                                <img src="https://lojaintegrada.wpenginepowered.com/wp-content/uploads/2023/03/assistente-ecommerce-auxiliar-350x250.webp" alt="">
                            </a>
                            <div class="over-legend">
                                <div class="post-category">
                                    <a href="#">Category</a>
                                </div>
                                <h2><a class="white-text" href="#">Como montar um ecommerce: Dicas para 2023</a></h2>
                                <div class="post-meta">
                                   <i class="material-icons">access_time</i> <a href="#">7 DE MARÇO DE 2023</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="carousel-nav flex-me space-between"><i id="prev-materiais" class="material-icons">chevron_left</i><i id="next-materiais" class="material-icons">chevron_right</i> </div>
            </div>

        </div>
</section>


<style>

    .section-materiais .container{
        position: relative;
    }
  
    .section-materiais{
        background-color: #f0f3f4;
    }

    .section-materiais .carousel .carousel-item {
        width: 360px;
        height: 257px;
    }


    .section-materiais article .gallery-thumbnail:before {
    content: "";
    display: block;
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    background: linear-gradient(180deg,transparent 0,#000 65%,#000);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000",endColorstr="#000000",GradientType=0);
    opacity: .6;
    z-index: 2;
}

    .carousel-nav{
        position: absolute;
        bottom: 95px;
        width: 100%;
        padding: 0px 15px;
    }

    .section-materiais .carousel-item{
        opacity: 1 !important;
    }

    .section-materiais article img{
        width: 100%;
    }

    .section-materiais article .over-legend{
        bottom: 60px;
        text-align: center;
    }

    .section-materiais .carousel-nav i{
        cursor: pointer;
        color: #fff;
        border: 2px solid #fff;
    }

</style>



