<?php include('templates/header.php'); ?>

<div class="inner-banner">
    <img class="center-image" src="img/tour_list/inner_banner_1.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <ul class="banner-breadcrumb color-white clearfix">
                <li><a class="link-blue-2" href="#">Inicio</a> /</li>
                <li><a class="link-blue-2" href="#">tours</a> /</li>
                <li><span class="color-blue-2">lista de tours</span></li>
            </ul>
            <h2 class="color-white">¡todos los tours que tenemos para ti!</h2>
            <h4 class="color-white">encontramos: <span>{{ sizeof($tours) }}</span> tours</h4>
        </div>
    </div>
</div>

<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="sidebar bg-white clearfix">
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Buscar</h4>
                        <div class="search-inputs">
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="img/loc_icon_small_grey.png" alt="">
                                    <input type="text" placeholder="¿Qué estás buscando?">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="img/calendar_icon_grey.png" alt="">
                                    <input type="text" placeholder="Entrada" class="datepicker">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="img/calendar_icon_grey.png" alt="">
                                    <input type="text" placeholder="Salida" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="buscar">
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Categorias</h4>
                        <ul class="sidebar-category color-1">
                            <li class="active">
                                <a class="cat-drop" href="#">tours <span class="fr">( {{sizeof($tours)}} )</span></a>
                                <ul>
                                    <li><a href="#">sea tours (785)</a></li>
                                    <li><a href="#">food tours (85)</a></li>
                                    <li><a href="#">romantic tours (125)</a></li>
                                    <li><a href="#">honeymoon tours (70)</a></li>
                                    <li><a href="#">mountain tours (159)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="cat-drop" href="#">destinos <span class="fr">( {{sizeof($tours)}} )</span></a>
                                <ul>
                                    <li><a href="#">sea tours (785)</a></li>
                                    <li><a href="#">food tours (85)</a></li>
                                    <li><a href="#">romantic tours (125)</a></li>
                                    <li><a href="#">honeymoon tours (70)</a></li>
                                    <li><a href="#">mountain tours (159)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Precios</h4>
                        <div class="slider-range color-1 clearfix" data-counter="$" data-position="start" data-from="0" data-to="1500" data-min="0" data-max="2000">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="$0">
                            <input type="text" class="amount-end" readonly value="$1500">
                        </div>
                        <input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
                    </div>

                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Votaciones </h4>
                        <div class="sidebar-score">
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-5" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-5" >
										<span class="checkbox-text">
											5
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-4" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-4" >
										<span class="checkbox-text">
											4
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-3" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-3" >
										<span class="checkbox-text">
											3
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-2" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-2" >
										<span class="checkbox-text">
											2
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                            <div class="input-entry type-2 color-2">
                                <input class="checkbox-form" id="score-1" type="checkbox" name="checkbox" value="climat control">
                                <label class="clearfix" for="score-1" >
										<span class="checkbox-text">
											1
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="list-header clearfix">
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Precio</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
                        </div>
                    </div>
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>calificación</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
                        </div>
                    </div>
                    <div class="list-view-change">
                        <div class="change-grid color-1 fr"><i class="fa fa-th"></i></div>
                        <div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div>
                        <div class="change-to-label fr color-grey-8">Vista:</div>
                    </div>
                </div>
                <div class="list-content clearfix">
                    @foreach($tours as $tour)
                        <div class="list-item-entry">
                            <div class="hotel-item style-3 bg-white">
                                <div class="table-view">
                                    <div class="radius-top cell-view">
                                        <img src="img/myImg/{{ str_replace(' ', '_', $tour->name) }}.jpg" alt="{{$tour->name}}">
                                    </div>
                                    <div class="title hotel-middle clearfix cell-view">
                                        <div class="date list-hidden">{{ date("M", strtotime($tour->date)) }} <strong>{{ date("jS Y", strtotime($tour->date)) }}</strong></div>
                                        <h4><b>Tour en {{$tour->name}}</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                @for($i = 0; $i < $tour->rating; $i++)
                                                    <span class="fa fa-star color-yellow"></span>
                                                @endfor
                                            </div>
                                            <i>485 rewies</i>
                                        </div>
                                        <p class="f-14 grid-hidden">{{$tour->description}}</p>
                                    </div>
                                    <div class="title hotel-right clearfix cell-view">
                                        <div class="hotel-person color-dark-2">desde <span class="color-blue">${{$tour->price}}</span> por persona</div>
                                        <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="/tour-details?tour={{$tour->name}}">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="c_pagination clearfix padd-120">
                    <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fl">Página anterior</a>
                    <a href="#" class="c-button b-40 bg-blue-2 hv-blue-2-o fr">página siguiente</a>
                    <ul class="cp_content color-1">
                        <li class="active"><a href="#">1</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="tabactivo" value="3">
<?php include('templates/footer.php'); ?>
