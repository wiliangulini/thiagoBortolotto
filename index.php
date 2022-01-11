<?php
    include "includes/header.php";
?>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-interval="4000" data-hover="pause" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source type="image/webp" srcset="img/socialmedia.webp"  />
                        <source type="image/png" srcset="img/socialmedia.png"  />
                        <img src="img/socialmedia.png" />
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source type="image/webp" srcset="img/amesorrir/amesorrir.webp"  />
                        <source type="image/jpg"  srcset="img/amesorrir/amesorrir.jpg" />
                        <img src="img/amesorrir/amesorrir.jpg" />
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source type="image/webp" srcset="img/extreme.webp" />
                        <source type="image/jpg"  srcset="img/extreme.jpg" />
                        <img src="img/extreme.jpg" />
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source type="image/webp" srcset="img/farmacia/farmacia.webp" />
                        <source type="image/jpg"  srcset="img/farmacia/farmacia.jpg"/>
                        <img src="img/farmacia/farmacia.jpg" />
                    </picture>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
    </section>
    <section class="black">
        <div class="container">
            <div class="row">
                <h2 class="h2"><strong>Projetos em Destaque</strong></h2>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <a href="amesorrir.php">
                        <div class="div_one" onmouseover="aplicar()" onmouseout="remover()">
                            <picture>
                                <source srcset="img/amesorrir/amesorrir-icon.webp" type="image/webp" />
                                <source srcset="img/amesorrir/amesorrir-icon.png" type="image/png" />
                                <img src="img/amesorrir/amesorrir-icon.png" />
                            </picture>
                            <div class="ID" id="id_one">
                                <h4>Identidade Visual -<br> Ame Sorrir</h4>
                            </div>
                        </div>
                    </a>
                    <a href="jireh.php">
                        <div class="div_two" onmouseover="aplicar2()" onmouseout="remover2()">
                            <picture>
                                <source srcset="img/jireh/jireh-icon.webp" type="image/webp" />
                                <source srcset="img/jireh/jireh-icon.png" type="image/png" />
                                <img src="img/jireh/jireh-icon.png" />
                            </picture>
                            <div class="ID" id="id_two">
                                <h4>Identidade Visual -<br> Jireh</h4>
                            </div>
                        </div>
                    </a>
                    <a href="pizzato.php">
                        <div class="div_three" onmouseover="aplicar3()" onmouseout="remover3()">
                            <picture>
                                <source type="image/webp" srcset="img/pizzato/riscoy-icon.webp" />
                                <source type="image/jpg" srcset="img/pizzato/riscoy-icon.jpg" />
                                <img src="img/pizzato/riscoy-icon.jpg" />
                            </picture>
                            <div class="ID" id="id_three">
                                <h4>Identidade Visual -<br> Marmoraria Pizzato</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    
                    <a href="duck.php">
                        <div class="div_one" onmouseover="aplicar4()" onmouseout="remover4()">
                            <picture>
                                <source srcset="img/duck/duck-icon.webp" type="image/webp" />
                                <source srcset="img/duck/duck-icon.jpg" type="image/jpg" />
                                <img src="img/duck/duck-icon.jpg" />
                            </picture>
                            <div class="ID" id="id_four">
                                <h4>Identidade Visual -<br> Duck Express</h4>
                            </div>
                        </div>
                    </a>
                    <a href="farmacia.php">
                        <div class="div_two" onmouseover="aplicar5()" onmouseout="remover5()">
                            <picture>
                                <source srcset="img/farmacia/farmacia-icon.webp" type="image/webp" />
                                <source srcset="img/farmacia/farmacia-icon.jpg" type="image/jpg" />
                                <img src="img/farmacia/farmacia-icon.jpg" />
                            </picture>
                            <div class="ID" id="id_five">
                                <h4>Identidade Visual -<br> Farmácia Mercúrio</h4>
                            </div>
                        </div>
                    </a>
                    <a href="elegance.php">
                        <div class="div_three" onmouseover="aplicar6()" onmouseout="remover6()">
                            <picture>
                                <source srcset="img/elegance/elegance-icon.webp" type="image/webp" />
                                <source srcset="img/elegance/elegance-icon.jpg" type="image/jpg" />
                                <img src="img/elegance/elegance-icon.jpg" />
                            </picture>
                            <div class="ID" id="id_six">
                                <h4>Identidade Visual -<br> Elegance</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h3><strong>O que faço?</strong></h3>
                    <p>
                        Talvez não tenhamos nos apresentado, mas meu nome é Thiago Bortolotto, e o prazer é todo meu!
                    </p>
                    <p>
                        Sou Cristão e Designer Gráfico em Coronel Vivida - PR (necessariamente nessa ordem).
                    </p>
                    <p>
                        Meu pai era proprietário de uma humilde gráfica local, e cresci percebendo a necessidade das empresas terem uma boa imagem para seus negócios, e com isso me especializei na área do Design Gráfico.
                    </p>
                    <p>
                        Hoje em dia trabalho principalmente com projetos de <strong>Identidade Visual</strong> (criação de marcas e logos profissionais), <strong>Social Media</strong> (posts para mídias sociais), e design de <strong>E-books</strong> (livros digitais).
                    </p>
                    <a href="servicos.php" class="btn">ACESSE MEU PORTIFÓLIO</a>
                </div>
            </div>
        </div>
    </section>
    
    
    <?php 
        include "includes/footer.php";
    ?>