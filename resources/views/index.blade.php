<?php include('templates/header.php'); ?>
<div class="top-baner swiper-animate arrows">
	<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0"
		 data-slides-per-view="1">
		<div class="swiper-wrapper">
			<div class="swiper-slide" data-val="1">
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url(img/home_9/slide_1.jpg)">
					</div>
				</div>
				<div class="vertical-align">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-title style-1 vert-title">
									<div class="top-weather-info delay-1">
										<img src="img/home_9/slide_icon.png" alt="">
									</div>
									<h1 class="color-white delay-1">Natural Travel</h1>
									<h3 class="person_price color-white delay-1">Experiencias
										<strong>inolvidables</strong></h3>
									<p class="color-white-op delay-2">Explore nuestros itinerarios de viajes ecológicos
										y aventuras.</p>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<a href="/our-tours" class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img src="img/loc_icon.png" alt=""><span>Ver nuestros tours</span></a>
										</div>
										<div class="col-xs-12 col-sm-6">
											<a href="#" class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>Ver nuestras promociones</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination pagination-hidden poin-style-1"></div>
	</div>
	<div class="arrow-wrapp m-200 arr-s-7">
		<div class="cont-1170">
			<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
			<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
		</div>
	</div>

	<div class="baner-tabs style-2">
		<div class="text-center">
			<div class="drop-tabs">
				<b>hotels</b>
				<a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
				<ul class="nav-tabs tpl-tabs tabs-style-1">

					<li class="click-tabs"><a href="#two" data-toggle="tab" aria-expanded="false">VUELOS</a></li>

					<li class="click-tabs"><a href="#four" data-toggle="tab" aria-expanded="false">CRUCEROS</a></li>
					<li class="click-tabs"><a href="#five" data-toggle="tab" aria-expanded="false">ACTIVIDADES</a></li>
				</ul>
			</div>
		</div>
		<div class="tab-content tpl-tabs-cont section-text t-con-style-1">
			<form action="/tour-details" method="post" id="searchTourForm">
				<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
				<div class="tab-pane active in" id="one">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<div class="tabs-block">
									<h5>Tu destino</h5>
									<div class="input-style-1">
										<img src="img/loc_icon_small.png" alt="">
										<input type="text" placeholder="Teclea tu proximo destino" id="inputDestinos" name="destino">
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="tabs-block">
									<h5>Entrada</h5>
									<div class="input-style-1">
										<img src="img/calendar_icon.png" alt="">
										<input type="text" placeholder="Mm/Dd/Aa" class="datepicker" name="entrada">
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="tabs-block">
									<h5>Salida</h5>
									<div class="input-style-1">
										<img src="img/calendar_icon.png" alt="">
										<input type="text" placeholder="Mm/Dd/Aa" class="datepicker" name="salida">
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
								<div class="tabs-block">
									<h5>Niños</h5>
									<div class="drop-wrap drop-wrap-s-3">
										<div class="drop">
											<b>01</b>
											<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
											<span>
												<a href="#">01</a>
												<a href="#">02</a>
												<a href="#">03</a>
												<a href="#">04</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
								<div class="tabs-block">
									<h5>Adultos</h5>
									<div class="drop-wrap drop-wrap-s-3">
										<div class="drop">
											<b>01</b>
											<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
											<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
								<a href="#" class="c-button b-60 bg-white submitSearchTour"><i class="fa fa-search"></i><span>Buscar ahora</span></a>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="tab-pane" id="two">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="tabs-block">
								<h5>Tu destino</h5>
								<div class="input-style-1">
									<img src="img/loc_icon_small.png" alt="">
									<input type="text" placeholder="Enter a destination or flight name">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Entrada</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Aa" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Salida</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Niños</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Adultos</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Rooms</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<a href="#" class="c-button b-60 bg-white"><i
										class="fa fa-search"></i><span>search now</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="three">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="tabs-block">
								<h5>Your Destinationss</h5>
								<div class="input-style-1">
									<img src="img/loc_icon_small.png" alt="">
									<input type="text" placeholder="Enter a destination or car name">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check In</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check Out</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Kids</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Adults</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Rooms</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<a href="#" class="c-button b-60 bg-white"><i
										class="fa fa-search"></i><span>search now</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="four">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="tabs-block">
								<h5>Your Destinationss</h5>
								<div class="input-style-1">
									<img src="img/loc_icon_small.png" alt="">
									<input type="text" placeholder="Enter a destination or cruise name">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check In</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check Out</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Kids</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Adults</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Rooms</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<a href="#" class="c-button b-60 bg-white"><i
										class="fa fa-search"></i><span>search now</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="five">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="tabs-block">
								<h5>Your Destinationss</h5>
								<div class="input-style-1">
									<img src="img/loc_icon_small.png" alt="">
									<input type="text" placeholder="Enter a destination or activities name">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check In</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
							<div class="tabs-block">
								<h5>Check Out</h5>
								<div class="input-style-1">
									<img src="img/calendar_icon.png" alt="">
									<input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Kids</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Adults</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
							<div class="tabs-block">
								<h5>Rooms</h5>
								<div class="drop-wrap drop-wrap-s-3">
									<div class="drop">
										<b>01</b>
										<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
										<span>
															<a href="#">01</a>
															<a href="#">02</a>
															<a href="#">03</a>
															<a href="#">04</a>
														</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
							<a href="#" class="c-button b-60 bg-white"><i
										class="fa fa-search"></i><span>search now</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- HOTEL-ITEM-->
<div class="main-wraper padd-90" style="padding-bottom: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2">DESTINOS POPULARES</h4>
					<h2 class="color-dark-2">LOS MEJORES DESTINOS</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="swiper-container pad-15" data-autoplay="0" data-loop="0" data-speed="1000"
				 data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
				 data-md-slides="3" data-lg-slides="4" data-add-slides="4">
				<div class="swiper-wrapper">
                    @foreach($tours as $tour)
						@if($tour->type == 0)
							<div class="swiper-slide">
								<div class="hotel-item style-6">
									<div class="radius-top">
										<img src="img/myImg/{{ str_replace(' ', '_', $tour->name) }}.jpg" alt="">
									</div>
									<div class="title">
										<div class="tour-info-line clearfix">
											<div class="tour-info fl">
												<img src="img/calendar_icon_grey.png" alt="">
												<span class="font-style-2 color-grey-3"> {{ date("M", strtotime($tour->date)) }} <strong>{{ date("jS Y", strtotime($tour->date)) }}</strong></span>
											</div>
											<div class="tour-info fl">
												<img src="img/loc_icon_small_grey.png" alt="">
												<span class="font-style-2 color-grey-3">{{ $tour->city }}</span>
											</div>
										</div>
										<h4><b>{{ $tour->name }}</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												@for($i = 0; $i < $tour->rating; $i++)
													<span class="fa fa-star color-yellow"></span>
												@endfor
											</div>
											<i>{{ $tour->reviews }} votos</i>
										</div>
										<h5>desde <strong>${{ $tour->price }}</strong> / persona</h5>
										<p class="f-14 color-grey-3">{{ $tour->description }}</p>
										<a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detalles</a>
										<a href="/tour-details?tour={{$tour->name}}" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">¡reserva ya!</a>
									</div>
								</div>
							</div>
						@endif
                    @endforeach
				</div>
				<div class="pagination poin-style-2"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="second-title" style="padding-top: 20px;">
				<h4 class="subtitle color-dr-blue-2">LOS MAS VISITADOS</h4>
				<h2 class="color-dark-2">NUESTROS MEJORES TOURS</h2>
			</div>
		</div>
	</div>
</div>


<!-- TOP PREVIEW-->

<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xcaret-plus-8.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-white-light"></span>
				</div>
				<i>485 votos</i>
				<div class="tp_price">$159 <small>USD</small></div>
			</div>
			<h4><b>x-caret plus</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xplor-tour.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$169 <small>USD</small></div>
			</div>
			<h4><b>xplor</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xenses-parque.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$80 <small>USD</small></div>
			</div>
			<h4><b>xenses park's tour</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xelha-tour.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$119 <small>USD</small></div>
			</div>
			<h4><b>xelha</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xoximilco-trajineras.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$1200</div>
			</div>
			<h4><b>xoximilco cancun</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/xenotes.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$119 <small>USD</small></div>
			</div>
			<h4><b>xenotes</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/chichen.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$79 <small>USD</small></div>
			</div>
			<h4><b>chichen itza</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
	<div class="tp_entry style-2">
		<div class="tp_image">
			<img class="center-image" src="img/myImg/jungle-tour.jpg" alt="">
		</div>
		<div class="tp_content">
			<div class="rate-wrap clearfix">
				<div class="rate">
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
					<span class="fa fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i>
				<div class="tp_price">$70 <small>USD</small></div>
			</div>
			<h4><b>jungle tour</b></h4>
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<img src="img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">Julio <strong>19 del 2016</strong></span>
				</div>
				<div class="tour-info fl">
					<img src="img/loc_icon_small_grey.png" alt="">
					<span class="font-style-2 color-grey-3">mexico</span>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- HOTEL-ITEM-->
<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2">SUGERENCIAS INTERNACIONALES</h4>
					<h2 class="color-dark-2">Los mejores destinos alrededor del mundo</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-city black-hover">
					<div class="tour-layer delay-1"></div>
					<img class="center-image" src="img/myImg/paris.jpg" alt="">
					<div class="vertical-align">
						<h3 class="world-title color-white">francia</h3>
						<h4 class="world-price color-white">desde <b>$860 <small style="color: white">USD</small> </b></h4>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<p class="color-white-light">Maravillarse con íconos como la torre Eiffel y el Arco del
							Triunfo…</p>
						<a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>ver más</span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-country">
					<img class="center-image" src="img/home_9/country_1.png" alt="">
					<div class="vertical-align">
						<h4>destinos en francia</h4>
						<ul class="color-grey-3">
							<li>Musée d'Orsay</li>
							<li>Puente Alexandre</li>
							<li>Santa Capilla</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-city black-hover">
					<div class="tour-layer delay-1"></div>
					<img class="center-image" src="img/myImg/rome.jpg" alt="">
					<div class="vertical-align">
						<h3 class="world-title color-white">roma</h3>
						<h4 class="world-price color-white">desde <b>$655 <small style="color: white">USD</small> </b></h4>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<p class="color-white-light">Roma tampoco se puede recorrer en un sólo día.</p>
						<a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>ver más</span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-country">
					<img class="center-image" src="img/home_9/country_2.png" alt="">
					<div class="vertical-align">
						<h4>destinos en roma</h4>
						<ul class="color-grey-3">
							<li>La Domus Romana del Palacio Valentini</li>
							<li>Coliseo</li>
							<li>Galería Borghese</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-city black-hover">
					<div class="tour-layer delay-1"></div>
					<img class="center-image" src="img/myImg/nuevayork.jpg" alt="">
					<div class="vertical-align">
						<h3 class="world-title color-white">nueva york</h3>
						<h4 class="world-price color-white">desde <b>$700 <small style="color: white">USD</small> </b></h4>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<p class="color-white-light">Conquistar Nueva York en una visita es imposible. Por eso, visita
							lo imperdible: el edificio Empire State...</p>
						<a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>ver más</span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-country">
					<img class="center-image" src="img/home_9/country_3.png" alt="">
					<div class="vertical-align">
						<h4>destinos en nueva york</h4>
						<ul class="color-grey-3">
							<li>Colección Frick</li>
							<li>High Line</li>
							<li>Broadway</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-city black-hover">
					<div class="tour-layer delay-1"></div>
					<img class="center-image" src="img/myImg/barcelona.jpg" alt="">
					<div class="vertical-align">
						<h3 class="world-title color-white">españa</h3>
						<h4 class="world-price color-white">desde <b>$550 <small style="color: white">USD</small> </b></h4>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<p class="color-white-light">Salvador Dalí pasó un tiempo aquí y el arquitecto catalán Antoni
							Gaudí diseñó varios de los edificios de la ciudad. </p>
						<a href="#" class="c-button b-40 bg-blue-3 hv-blue-3-o"><span>ver más</span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="world-country">
					<img class="center-image" src="img/home_9/country_4.png" alt="">
					<div class="vertical-align">
						<h4>destinos de españa</h4>
						<ul class="color-grey-3">
							<li>Basílica de la Sagrada Familia</li>
							<li>Casa Batlló</li>
							<li>Barrio Gótico</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="top-baner arrows">
	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0"
		 data-slides-per-view="1" id="tour-slide-2">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img class="center-image" src="img/home_9/bg_1.jpg" alt="">
				<div class="slider-tour style-2 padd-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1">
								<h3><strong>desde $6999 MXN</strong> / persona</h3>
								<div class="rate-wrap clearfix">
									<div class="rate">
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
									</div>
									<i>786 Rewies</i>
								</div>
								<h2>CRUCERO ROYAL CARIBBEAN</h2>
								<div class="tour-info-line clearfix">
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-white">NOVIEMBRE <strong>20 del 2016</strong></span>
									</div>
									<div class="tour-info">
										<img src="img/loc_icon_small.png" alt="">
										<span class="font-style-2 color-white">cancun</span>
									</div>
								</div>
								<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>VER MAS</span></a>
								<h4>El mejor servicio</h4>
								<p class="color-white-light">“Royal Caribbean navega para algunos de los destinos y ciudades más populares en todo el mundo. Su creciente flota de innovadores buques elegantes son relajados y lujosos con gran atractivo para todos, desde los recién casados, las familias, a las parejas celebrando aniversarios de oro.”</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<img class="center-image" src="img/home_9/bg_2.jpg" alt="">
				<div class="slider-tour style-2 padd-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1">
								<h3><strong>from $5999 MXN</strong> / persona</h3>
								<div class="rate-wrap clearfix">
									<div class="rate">
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
									</div>
									<i>679 Rewies</i>
								</div>
								<h2>CRUCERO AZAMARA CLUB</h2>
								<div class="tour-info-line clearfix">
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-white">NOVIEMBRE <strong>20 del 2016</strong></span>
									</div>
									<div class="tour-info">
										<img src="img/loc_icon_small.png" alt="">
										<span class="font-style-2 color-white">mexico</span>
									</div>
								</div>
								<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>ver mas</span></a>
								<h4>El mejor servicio</h4>
								<p class="color-white-light">“Azamara te ofrece destinos sorprendentes alrededor del mundo con estadías más prolongadas que las de otros cruceros, así podrás disfrutar de su Destination Immersion®, con más tiempo para conocer la cultura, la cocina y la gente de los lugares que visitarás, Una vez que nos conozcas, volveras.”</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<img class="center-image" src="img/home_9/bg_3.jpg" alt="">
				<div class="slider-tour style-2 padd-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-sm-offset-1">
								<h3><strong>desde $7699 MXN</strong> / persona</h3>
								<div class="rate-wrap clearfix">
									<div class="rate">
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
										<span class="fa fa-star color-yellow"></span>
									</div>
									<i>537 Rewies</i>
								</div>
								<h2>Princess World Cruise vacation</h2>
								<div class="tour-info-line clearfix">
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-white">Noviembre <strong>20 del 2016</strong></span>
									</div>
									<div class="tour-info">
										<img src="img/loc_icon_small.png" alt="">
										<span class="font-style-2 color-white">cancun</span>
									</div>
								</div>
								<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view more</span></a>
								<h4>CRUCERO CELEBRITY</h4>
								<p class="color-white-light">“Lujo y modernidad son las palabras que definen a Celebrity Cruises, sin pasar por alto sus súper barcos y el servicio 5 estrellas catalogado como uno de los mejores en un crucero al contar con un miembro de tripulación por cada 2 pasajeros. En Celebrity Cruises puede esperar lo mejor de lo mejor.”</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination pagination-hidden poin-style-1"></div>
	</div>
	<div class="arrow-wrapp arr-s-7">
		<div class="cont-1170">
			<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
			<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
		</div>
	</div>
</div>

<input type="hidden" data-tours="@foreach($tours as $tour){{$tour->name}}_ @endforeach" id="toursList">
<input type="hidden" id="tabactivo" value="1">
<?php include('templates/footer.php'); ?>