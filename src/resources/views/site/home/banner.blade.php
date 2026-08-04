                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #191919 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                        <!-- START Soccer 03 REVOLUTION SLIDER 6.1.5 -->
                                        <p class="rs-p-wp-fix"></p>
                                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                            <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.5">
                                                <rs-slides>
                                                    
                                                    <!-- Índice identifica cada slide individualmente -->
                                                    @foreach($listaBanners as $indice => $linha)

                                                        <!-- Cada slide do banner é o valor de índice, adicionando 1 para que o primeiro slide seja 1, o segundo seja 2 e assim por diante -->
                                                        @php($slide = $indice + 1)

                                                        <rs-slide data-key="rs-{{ $slide }}" data-title="Slide" data-thumb="#" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                                            <img src="{{asset('atlas/upload/' . $linha->link_banner)}}" title="{{ $linha->nome_img_bannner }}" width="1920" height="850" class="rev-slidebg" data-no-retina="">
                                                            <!--
                                                            -->
                                                            <rs-layer id="slider-1-slide-{{ $slide }}-layer-3" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:c;xo:-3px,-3px,-3px,0;yo:369px,369px,369px,131px;" data-text="s:93,93,93,45;l:92,92,92,42;fw:500;a:center;" data-frame_0="tp:600;" data-frame_1="tp:600;" data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:8;font-family:Jost;text-transform:uppercase;"><span class="titulo-banner">{{ $linha->titulo_banner }}</span></rs-layer>
                                                            <!--

                                                            -->
                                                            <rs-layer id="slider-1-slide-{{ $slide }}-layer-5" class="jost-font" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:531px,531px,531px,240px;" data-text="w:nowrap,nowrap,nowrap,normal;s:22,22,22,19;l:22,22,22,25;a:center;" data-dim="w:auto,auto,auto,350px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:530;sR:530;" data-frame_999="o:0;tp:600;st:w;sR:8170;" style="z-index:10;font-family:Jost;">{{ $linha->subtitulo_banner }}
                                                            </rs-layer>
                                                            <!--

                                                            -->
                                                            <rs-layer id="slider-1-slide-{{ $slide }}-layer-6" class="rev-btn" data-type="button" data-color="#0054a6" data-xy="x:r;xo:731px,626px,626px,255px;yo:606px,606px,606px,327px;" data-text="s:13;l:17;fw:700;a:center;" data-rsp_bd="off" data-padding="t:15,15,15,12;r:36,36,36,28;b:15,15,15,12;l:36,36,36,28;" data-border="bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:850;sR:850;" data-frame_999="o:0;tp:600;st:w;sR:7850;" data-frame_hover="c:#fff;bgc:#0054a6;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:150;" style="z-index:11;background-color:#ffffff;font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;text-transform:uppercase;">{{ $linha->texto_botao1_banner }}

                                                            </rs-layer>
                                                            <!--

                                                            -->
                                                            <rs-layer id="slider-1-slide-{{ $slide }}-layer-7" class="rev-btn" data-type="button" data-actions="o:click;a:simplelink; target:_self;url:{{route('contato')}}" data-color="#0054a6" data-xy="xo:733px,628px,628px,242px;yo:606px,606px,606px,327px;" data-text="s:13;l:17;fw:700;a:center;" data-rsp_bd="off" data-padding="t:15,15,15,12;r:36,36,36,28;b:15,15,15,12;l:36,36,36,28;" data-border="bor:30px,30px,30px,30px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:1170;sR:1170;" data-frame_999="o:0;tp:600;st:w;sR:7530;" data-frame_hover="c:#fff;bgc:#0054a6;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:150;" style="z-index:12;background-color:#ffffff;font-family:Jost;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;text-transform:uppercase;">{{ $linha->texto_botao2_banner }}
                                                            </rs-layer>
                                                            <!--

                                                            -->px','10px','10px','10px';" data-frame_1="st:300;sR:300;" data-frame_999="o:0;st:w;sR:8400;" style="z-index:9;"><img src="{{asset('atlas/upload/dot-blue.png')}}" width="71" height="10" data-no-retina="">
                                                            </rs-layer>
                                                            <!---->
                                                        </rs-slide>
                                                        
                                                    @endforeach
                                                </rs-slides>
                                                <rs-static-layers>
                                                    <!--                    -->
                                                </rs-static-layers>
                                                <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                                            </rs-module>

                                        </rs-module-wrap>
                                        <!-- END REVOLUTION SLIDER -->
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first gdlr-core-hide-in-mobile" id="gdlr-core-column-88993" style="z-index: 9 ;">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-shape-divider-item" id="gdlr-core-shape-divider-49194">
                                                    <div class="gdlr-core-shape-divider-wrap  gdlr-core-pos-bottom gdlr-core-inverted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
                                                            <path d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>