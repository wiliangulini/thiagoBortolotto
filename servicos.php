<?php 
    include "includes/headerservicos.php";
?>
    <section class="servicos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 texto">
                    <h2 class="h2">Conheça meu <strong>trabalho</strong></h2>
                    <p>Abaixo alguns dos serviços que presto aos meus clientes.</p>
                </div>
               
                <div class="col-sm-12 col-md-12 col-lg-12 img">
                    <a href="identidade-visual.php">
                        <div class="div_one" onmouseover="aplicar()" onmouseout="remover()">
                            <picture>
                                <source type="img/webp" src="img/idvisual.webp" />
                                <source type="img/jpg" src="img/idvisual.jpg" />
                                <img src="img/idvisual.jpg" />
                            </picture>
                            <div class="ID" id="id_one">
                                
                            </div>
                        </div>
                    </a>
                    <a href="social-media.php">
                        <div class="div_two" onmouseover="aplicar2()" onmouseout="remover2()">
                            <picture>
                                <source type="image/webp" srcset="img/social.webp" />
                                <source type="image/jpg" srcset="img/social.jpg" />
                                <img src="img/social.jpg" />
                            </picture>
                            <div class="ID" id="id_two">
                                
                            </div>
                        </div>
                    </a>
                    <a href="impressos.php">
                        <div class="div_three" onmouseover="aplicar3()" onmouseout="remover3()">
                            <picture>
                                <source type="image/webp" srcset="img/impressos.webp" />
                                <source type="image/jpg" srcset="img/impressos.jpg" />
                                <img src="img/impressos.jpg" />
                            </picture>
                            <div class="ID" id="id_three">
                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </div>

   <?php 
    include "includes/footer.php";
   ?>