                    <!-- EQUIPE -->
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-sp-player-item gdlr-core-item-pdb clearfix ">
                                    <div class="gdlr-core-sp-player-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                        @foreach($listaEquipe as $linha)
                                            <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-15">
                                                <div class="gdlr-core-sp-player-grid">
                                                    <div class="gdlr-core-sp-player-thumbnail gdlr-core-media-image gdlr-core-zoom-on-hover">
                                                        <!-- gdlr-core-column-first -->
                                                        <a href="{{ route('equipe')}}"><img src="{{ asset('atlas/upload/' . $linha->foto_professores)}}" alt="{{ $linha->nome_professores }}" width="600" height="577" title="{{ $linha->nome_professores }}"></a>
                                                    </div>
                                                    <h3 class="gdlr-core-sp-player-title gdlr-core-skin-title"><a href="{{ route('equipe')}}">{{ $linha->tipo_professores }} {{ $linha->nome_professores }}</a></h3></div>
                                            </div>                                        
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>