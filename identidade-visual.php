<?php 
    include "includes/headerservicos.php";
?>

<section class="idvisual" >
    <a href="servicos.php" class="btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar ao Portfólio
    </a>
    <div class="container">
        <div class="id">
            <h2>Identidade Visual</h2>
            <p>
                Eis aqui alguns dos trabalhos realizados por mim no desenvolvimento de Identidade Visual, Marcas, Logotipos, "Logomarcas"!
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="div_one" onmouseover="aplicar()" onmouseout="remover()">
                        <picture>
                            <source srcset="img/duck/duck-icon.webp" type="image/webp" />
                            <source srcset="img/duck/duck-icon.jpg" type="image/jpg" />
                            <img src="img/duck/duck-icon.jpg" />
                        </picture>
                        <div class="ID" id="id_one">
                            <h4>Identidade Visual -<br> Duck Express</h4>
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar2()" onmouseout="remover2()">
                        <picture>
                            <source srcset="img/farmacia/farmacia-icon.webp" type="image/webp" />
                            <source srcset="img/farmacia/farmacia-icon.jpg" type="image/jpg" />
                            <img src="img/farmacia/farmacia-icon.jpg" />
                        </picture>
                        <div class="ID" id="id_two">
                            <h4>Identidade Visual -<br> Farmácia Mercúrio</h4>
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar3()" onmouseout="remover3()">
                        <picture>
                            <source srcset="img/amesorrir/amesorrir-icon.webp" type="image/webp" />
                            <source srcset="img/amesorrir/amesorrir-icon.png" type="image/png" />
                            <img src="img/amesorrir/amesorrir-icon.png" />
                        </picture>
                        <div class="ID" id="id_three">
                            <h4>Identidade Visual -<br> Ame Sorrir</h4>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="div_one" onmouseover="aplicar4()" onmouseout="remover4()">
                        <picture>
                            <source type="image/webp" src="img/debora-identidade-visual.webp" />
                            <source type="image/jpg" src="img/debora-identidade-visual.jpg" />
                            <img src="img/debora-identidade-visual.jpg" />
                        </picture>
                        <div class="ID" id="id_four">
                            <h4>Identidade Visual -<br> Deborah Goes</h4>
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar5()" onmouseout="remover5()">
                        <picture>
                            <source type="image/webp" src="img/jireh/Capa.webp" />
                            <source type="image/png" src="img/jireh/Capa.png" />
                            <img src="img/jireh/Capa.png" />
                        </picture>
                        <div class="ID" id="id_five">
                            <h4>Identidade Visual -<br> Jireh </h4>
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar6()" onmouseout="remover6()">
                        <picture>
                            <source type="image/webp" srcset="img/elegance/elegance-identidade-visual.webp"  />
                            <source type="image/jpg"  srcset="img/elegance/elegance-identidade-visual.jpg"  />
                            <img src="img/elegance/elegance-identidade-visual.jpg" />
                        </picture>
                        <div class="ID" id="id_six">
                            <h4>Identidade Visual -<br> Elegance</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 last">
                <div class="div_one" onmouseover="aplicar7()" onmouseout="remover7()">
                    <picture>
                        <source type="image/webp" srcset="img/pizzato/riscoy-icon.webp" />
                        <source type="image/jpg" srcset="img/pizzato/riscoy-icon.jpg" />
                        <img src="img/pizzato/riscoy-icon.jpg" />
                    </picture>
                    <div class="ID" id="id_seven">
                        <h4>Identidade Visual -<br> Pizzatto Marmoraria </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    include "includes/footer.php";
?>