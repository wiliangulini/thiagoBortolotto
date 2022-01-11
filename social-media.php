<?php 
    include "includes/headerservicos.php";
?>
<style>
    .gray {
        display: block !important;
    }
    .removegray {
        display: none !important;
    }
</style>
<section class="social" >
    <a href="servicos.php" class="btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar ao Portfólio
    </a>
    <div class="container">
        <div class="id">
            <h2>Social Media</h2>
            <p>
                Listei alguns dos trabalhos envolvendo Social Media que desenvolvi nos últimos meses.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="div_one" onmouseover="aplicar()" onmouseout="remover()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/mulher-malhando.webp" />
                            <source type="image/jpg"  srcset="img/social-media/mulher-malhando.jpg"/>
                            <img src="img/social-media/mulher-malhando.jpg" />
                        </picture>
                        <div class="ID" id="id_one">
                        
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar2()" onmouseout="remover2()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/homem-malhando.webp" />
                            <source type="image/jpg"  srcset="img/social-media/homem-malhando.jpg"/>
                            <img src="img/social-media/homem-malhando.jpg" />
                        </picture>
                        <div class="ID" id="id_two">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar3()" onmouseout="remover3()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/homem-na-academia.webp" />
                            <source type="image/jpg"  srcset="img/social-media/homem-na-academia.jpg"/>
                            <img src="img/social-media/homem-na-academia.jpg" />
                        </picture>
                        <div class="ID" id="id_three">

                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="div_one" onmouseover="aplicar4()" onmouseout="remover4()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/promoção-maquiagem.webp" />
                            <source type="image/png"  srcset="img/social-media/promoção-maquiagem.png"/>
                            <img src="img/social-media/promoção-maquiagem.png" />
                        </picture>
                        <div class="ID" id="id_four">

                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar5()" onmouseout="remover5()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/promoção-maquiagem-p2.webp" />
                            <source type="image/png"  srcset="img/social-media/promoção-maquiagem-p2.png"/>
                            <img src="img/social-media/promoção-maquiagem-p2.png" />
                        </picture>
                        <div class="ID" id="id_five">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar6()" onmouseout="remover6()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/promoção-maquiagem-p3.webp" />
                            <source type="image/png"  srcset="img/social-media/promoção-maquiagem-p3.png"/>
                            <img src="img/social-media/promoção-maquiagem-p3.png" />
                        </picture>
                        <div class="ID" id="id_six">
                           
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 last-social">
                <div class="div_one" onmouseover="aplicar7()" onmouseout="remover7()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/Plano-Personalizado.webp" />
                        <source type="image/png" srcset="img/social-media/Plano-Personalizado.png" />
                        <img src="img/social-media/Plano-Personalizado.png" />
                    </picture>
                    <div class="ID" id="id_seven">
                    </div>
                </div>
                <div class="div_two" onmouseover="aplicar8()" onmouseout="remover8()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/Plano-Intermediário.webp" />
                        <source type="image/jpg" srcset="img/social-media/Plano-Intermediário.jpg" />
                        <img src="img/social-media/Plano-Intermediário.jpg" />
                    </picture>
                    <div class="ID" id="id_eight">
                       
                    </div>
                </div>
                <div class="div_three" onmouseover="aplicar9()" onmouseout="remover9()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/Plano-Básico.webp" />
                        <source type="image/jpg" srcset="img/social-media/Plano-Básico.jpg" />
                        <img src="img/social-media/Plano-Básico.jpg" />
                    </picture>
                    <div class="ID" id="id_nine">
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="div_one" onmouseover="aplicar10()" onmouseout="remover10()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/faca-do-chefe.webp" />
                            <source type="image/jpg"  srcset="img/social-media/faca-do-chefe.jpg"/>
                            <img src="img/social-media/faca-do-chefe.jpg" />
                        </picture>
                        <div class="ID" id="id_ten">
                        
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar11()" onmouseout="remover11()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/amolador-de-facas.webp" />
                            <source type="image/jpg"  srcset="img/social-media/amolador-de-facas.jpg"/>
                            <img src="img/social-media/amolador-de-facas.jpg" />
                        </picture>
                        <div class="ID" id="id_eleven">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar12()" onmouseout="remover12()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/estojo-de-facas.webp" />
                            <source type="image/jpg"  srcset="img/social-media/estojo-de-facas.jpg"/>
                            <img src="img/social-media/estojo-de-facas.jpg" />
                        </picture>
                        <div class="ID" id="id_twelve">
                            
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="div_one" onmouseover="aplicar13()" onmouseout="remover13()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/homem-deprimido.webp" />
                            <source type="image/jpg"  srcset="img/social-media/homem-deprimido.jpg"/>
                            <img src="img/social-media/homem-deprimido.jpg" />
                        </picture>
                        <div class="ID" id="id_thirteen">

                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar14()" onmouseout="remover14()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/simbolo-do-luto.webp" />
                            <source type="image/jpg"  srcset="img/social-media/simbolo-do-luto.jpg"/>
                            <img src="img/social-media/simbolo-do-luto.jpg" />
                        </picture>
                        <div class="ID" id="id_fourteen">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar15()" onmouseout="remover15()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/simbolo-do-luto-amarelo.webp" />
                            <source type="image/jpg"  srcset="img/social-media/simbolo-do-luto-amarelo.jpg"/>
                            <img src="img/social-media/simbolo-do-luto-amarelo.jpg" />
                        </picture>
                        <div class="ID" id="id_fifteen">
                           
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="div_one" onmouseover="aplicar16()" onmouseout="remover16()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/mulher-comendo.webp" />
                            <source type="image/png"  srcset="img/social-media/mulher-comendo.png"/>
                            <img src="img/social-media/mulher-comendo.png" />
                        </picture>
                        <div class="ID" id="id_sixteen">
                        
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar17()" onmouseout="remover17()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/refeicao-e-legumes.webp" />
                            <source type="image/jpg"  srcset="img/social-media/refeicao-e-legumes.jpg"/>
                            <img src="img/social-media/refeicao-e-legumes.jpg" />
                        </picture>
                        <div class="ID" id="id_seventeen">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar18()" onmouseout="remover18()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/macarronada.webp" />
                            <source type="image/jpg"  srcset="img/social-media/macarronada.jpg"/>
                            <img src="img/social-media/macarronada.jpg" />
                        </picture>
                        <div class="ID" id="id_eighteen">
                            
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="div_one" onmouseover="aplicar19()" onmouseout="remover19()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/Modelo-2-Novo-Curso.webp" />
                            <source type="image/png"  srcset="img/social-media/Modelo-2-Novo-Curso.png"/>
                            <img src="img/social-media/Modelo-2-Novo-Curso.png" />
                        </picture>
                        <div class="ID" id="id_nineteen">

                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar20()" onmouseout="remover20()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/mulher-contraindo-abdomen.webp" />
                            <source type="image/jpg"  srcset="img/social-media/mulher-contraindo-abdomen.jpg"/>
                            <img src="img/social-media/mulher-contraindo-abdomen.jpg" />
                        </picture>
                        <div class="ID" id="id_twenty">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar21()" onmouseout="remover21()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/mulher-contrai-abdomen.webp" />
                            <source type="image/jpg"  srcset="img/social-media/mulher-contrai-abdomen.jpg"/>
                            <img src="img/social-media/mulher-contrai-abdomen.jpg" />
                        </picture>
                        <div class="ID" id="id_t-one">
                           
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="div_one" onmouseover="aplicar22()" onmouseout="remover22()">
                        <picture>
                            <source type="image/webp" srcset="img/amesorrir/Post-1.webp" />
                            <source type="image/jpg"  srcset="img/amesorrir/Post-1.png"/>
                            <img src="img/amesorrir/Post-1.png" />
                        </picture>
                        <div class="ID" id="id_t-two">
                        
                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar23()" onmouseout="remover23()">
                        <picture>
                            <source type="image/webp" srcset="img/amesorrir/Post-2.webp" />
                            <source type="image/jpg"  srcset="img/amesorrir/Post-2.png"/>
                            <img src="img/amesorrir/Post-2.png" />
                        </picture>
                        <div class="ID" id="id_t-three">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar24()" onmouseout="remover24()">
                        <picture>
                            <source type="image/webp" srcset="img/amesorrir/Post-4.webp" />
                            <source type="image/jpg"  srcset="img/amesorrir/Post-4.png"/>
                            <img src="img/amesorrir/Post-4.png" />
                        </picture>
                        <div class="ID" id="id_t-four">
                            
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="div_one" onmouseover="aplicar25()" onmouseout="remover25()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/Setembro-amarelo.webp" />
                            <source type="image/png"  srcset="img/social-media/Setembro-amarelo.png"/>
                            <img src="img/social-media/Setembro-amarelo.png" />
                        </picture>
                        <div class="ID" id="id_t-five">

                        </div>
                    </div>
                    <div class="div_two" onmouseover="aplicar26()" onmouseout="remover26()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/ovelha-no-trigo.webp" />
                            <source type="image/png"  srcset="img/social-media/ovelha-no-trigo.png"/>
                            <img src="img/social-media/ovelha-no-trigo.png" />
                        </picture>
                        <div class="ID" id="id_t-six">
                           
                        </div>
                    </div>
                    <div class="div_three" onmouseover="aplicar27()" onmouseout="remover27()">
                        <picture>
                            <source type="image/webp" srcset="img/social-media/homem-no-trigo.webp" />
                            <source type="image/png"  srcset="img/social-media/homem-no-trigo.png"/>
                            <img src="img/social-media/homem-no-trigo.png" />
                        </picture>
                        <div class="ID" id="id_t-seven">
                           
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="div_one" onmouseover="aplicar28()" onmouseout="remover28()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/9.webp" />
                        <source type="image/png"  srcset="img/social-media/9.png"/>
                        <img src="img/social-media/9.png" />
                    </picture>
                    <div class="ID" id="id_t-eight">
                    
                    </div>
                </div>
                <div class="div_two" onmouseover="aplicar29()" onmouseout="remover29()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/homem-e-filha.webp" />
                        <source type="image/jpg"  srcset="img/social-media/homem-e-filha.jpg"/>
                        <img src="img/social-media/homem-e-filha.jpg" />
                    </picture>
                    <div class="ID" id="id_t-nine">
                       
                    </div>
                </div>
                <div class="div_three" onmouseover="aplicar30()" onmouseout="remover30()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/mulher-na-fonte-d'agua.webp" />
                        <source type="image/jpg"  srcset="img/social-media/mulher-na-fonte-d'agua.jpg"/>
                        <img src="img/social-media/mulher-na-fonte-d'agua.jpg" />
                    </picture>
                    <div class="ID" id="id_thirty">
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12"> 
                <div class="div_one" onmouseover="aplicar31()" onmouseout="remover31()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/8.webp" />
                        <source type="image/png"  srcset="img/social-media/8.png"/>
                        <img src="img/social-media/8.png" />
                    </picture>
                    <div class="ID" id="id_thirty-one">
                    </div>
                </div>
                <div class="div_two" onmouseover="aplicar32()" onmouseout="remover32()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/dunas-no-deserto.webp" />
                        <source type="image/png"  srcset="img/social-media/dunas-no-deserto.png"/>
                        <img src="img/social-media/dunas-no-deserto.png" />
                    </picture>
                    <div class="ID" id="id_thirty-two">
                       
                    </div>
                </div>
                <div class="div_three" onmouseover="aplicar33()" onmouseout="remover33()">
                    <picture>
                        <source type="image/webp" srcset="img/social-media/estatua-de-cesar.webp" />
                        <source type="image/png"  srcset="img/social-media/estatua-de-cesar.png"/>
                        <img src="img/social-media/estatua-de-cesar.png" />
                    </picture>
                    <div class="ID" id="id_thirty-three">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    include "includes/footer.php";
?>