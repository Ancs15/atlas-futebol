                    <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 70px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 38px ;text-transform: none ; margin-bottom: 30px;"><strong class="titulo-azul-strong">Categorias</strong> de Base<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px ;">Treinamentos organizados por faixa etária para garantir o desenvolvimento adequado de cada atleta.</span>
                                        </div>
                                    </div>
                                </div>

                                @foreach($listaCategorias as $linha)
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align categoria-box">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-none" data-sync-height="boxes-1" data-sync-height-center="">
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 19px ;">{{ $linha->nome_categoria }}</h3>
                                                                <i class="gdlr-core-feature-box-item-icon fa5 fa5-futbol" style="font-size: 48px ;"></i>
                                                                <div class="gdlr-core-feature-box-item-caption gdlr-core-title-font"><strong>{{ $linha->faixa_etaria_categoria }}</strong></div>
                                                                <div class="gdlr-core-feature-box-item-content categoria-info" style="font-size: 14px ;">
                                                                    <p>{{ $linha->descricao_foco_categoria }}</p>
                                                                    <p><i class="fa5 fa5-running"></i>TREINOS: <strong>Terça-Feira</strong> e <strong>Quinta-Feira</strong>.</p>
                                                                    <p><i class="fa5 fa5-clock"></i>HORÁRIO: <strong>{{ $linha->horario_inicio_categoria }}</strong> às <strong>{{ $linha->horario_fim_categoria }}</strong></p>
                                                                    <div class="gdlr-core-sync-height-offset" style="height: 25px;"></div>
                                                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-center-align btn-saiba-mais" data-sync-height-offset><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="{{route('home')}}" id="gdlr-core-button-id-51465"><span class="gdlr-core-content">Saiba Mais</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                @endforeach
                            </div>
                        </div>
                    </div>