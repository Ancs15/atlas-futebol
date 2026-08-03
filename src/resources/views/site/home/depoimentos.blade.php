                    <!-- DEPOIMENTOS -->
                    <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 60px 0px;" data-skin="White Text">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('atlas/upload/glowing-stadium-light-effect.jpg')}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.8"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 700px ;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type="carousel" data-column="1" data-nav="navigation" data-vcenter-nav="1">
                                            <div class="gdlr-core-block-item-title-wrap  gdlr-core-center-align gdlr-core-item-mglr">
                                                <div class="gdlr-core-block-item-title-inner">
                                                    <h3 class="gdlr-core-block-item-title" style="font-size: 38px ;text-transform: none ;"><strong class="titulo-azul-strong">Veja o que nossos clientes dizem</strong></h3></div>
                                                <div class="gdlr-core-flexslider-nav gdlr-core-round-style gdlr-core-absolute-center gdlr-core-right"></div>
                                            </div>
                                            <ul class="slides">
                                                @foreach ($listaDepo as $linha)
                                                
                                                @php

                                                    //Responsável relacionado com depoimento
                                                    $responsavel = $linha->DepoResponsavel;
                                                @endphp

                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 34px;">{{ $linha->titulo_depoimentos }}</h3>
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px ;">
                                                                <p>{{ $linha->texto_depoimentos }}</p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #ffffff ;">&#8220;</div>
                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src="{{asset('atlas/upload/' . $linha->foto_depoimentos )}}" alt="" width="150" height="150" title="{{ $responsavel->nome_responsavel }}"></div>
                                                                <div class="gdlr-core-testimonial-author-content">
                                                                    <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"></div>
                                                                    <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px ;">{{ $linha->relacao_autor_depoimentos }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>