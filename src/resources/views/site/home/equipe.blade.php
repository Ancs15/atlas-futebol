                    <!-- EQUIPE -->
                    <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 80px 0px;" id="gdlr-core-wrapper-1">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{asset('atlas/upload/blue-abstract-background.jpg')}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="White Text" id="gdlr-core-column-85499">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 50px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 34px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;">Nossa <strong>Equipe</strong><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-9271">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -90px 0px 0px 0px;padding: 0px 0px 30px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-sp-player-item gdlr-core-item-pdb clearfix  gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="3" data-nav="navigation-top" data-nav-parent="self">
                                                        <div class="gdlr-core-flexslider-custom-nav  gdlr-core-style-navigation-top gdlr-core-right-align" style="margin-bottom: 50px ;"><i class="fa5s fa5-arrow-left flex-prev" style="color: #9b9b9b ;background-color: #ffffff ;padding: 17px;border-radius: 40px;-moz-border-radius: 40px;-webkit-border-radius: 40px;font-size: 17px ;margin-right: 8px ;"></i><i class="fa5s fa5-arrow-right flex-next" style="color: #9b9b9b ;background-color: #ffffff ;padding: 17px;border-radius: 40px;-moz-border-radius: 40px;-webkit-border-radius: 40px;font-size: 17px ;"></i></div>
                                                        <ul class="slides">
                                                            @foreach($listaEquipe as $linha)
                                                                <li class="gdlr-core-item-mglr">
                                                                    <div class="gdlr-core-sp-player-grid-3 gdlr-core-item-mgb">
                                                                        <div class="gdlr-core-sp-player-thumbnail gdlr-core-media-image gdlr-core-zoom-on-hover">
                                                                            <a class="gdlr-core-sp-player-link" href="{{route('equipe')}}"><img src="{{asset('atlas/upload/' . $linha->foto_professores )}}" alt="{{ $linha->nome_professores }}" width="700" height="577" title="{{ $linha->nome_professores }}"></a>
                                                                        </div>
                                                                        <div class="gdlr-core-sp-player-content-wrap  gdlr-core-skin-e-background clearfix">
                                                                            <!-- <div class="gdlr-core-sp-player-number gdlr-core-title-font gdlr-core-skin-e-content">10</div> -->
                                                                            <div class="gdlr-core-sp-player-content">
                                                                                <h3 class="gdlr-core-sp-player-title gdlr-core-skin-title"><a class="gdlr-core-sp-player-link" href="{{route('equipe')}}">{{ $linha->nome_professores }}</a></h3>
                                                                                <div class="gdlr-core-sp-player-position gdlr-core-skin-caption">{{ $linha->tipo_professores }}</div>
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
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="{{ route('equipe')}}" style="font-size: 17px ;font-weight: 500 ;letter-spacing: 0px ;color: #ffffff ;padding: 0px 0px 0px 0px;text-transform: none ;"><span class="gdlr-core-content">Ver Toda a Equipe</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #ffffff ;"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>