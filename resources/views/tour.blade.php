<?php include('templates/header.php'); ?>

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="img/detail/bg_1.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="/">Inicio</a> /</li>
                        <li><a class="link-blue-2" href="/tour-details?{{ $tour->name }}">{{ $tour->name }}</a> </li>
                    </ul>
                    <h2 class="color-white">{{ $tour->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DETAIL WRAPPER -->
<div class="detail-wrapper">
    <div class="container">
        <div class="detail-header">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="detail-category color-grey-3">{{ strtoupper($tour->name) }} / {{ $tour->city }}</div>
                    <h2 class="detail-title color-dark-2">{{ $tour->name }}</h2>
                    <div class="detail-rate rate-wrap clearfix">
                        <div class="rate">
                            @for($i = 0; $i < $tour->rating; $i++)
                                <span class="fa fa-star color-yellow"></span>
                            @endfor
                        </div>
                        <i>{{ $tour->reviews }} votos</i>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="detail-price color-dark-2">precio desde <span class="color-blue"> ${{ $tour->price }}</span> por persona</div>
                </div>
            </div>
        </div>
        <div class="row padd-90">
            <div class="col-xs-12 col-lg-8">
                <div class="detail-content">
                    <div class="detail-top slider-wth-thumbs style-1 arrows">
                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide active" data-val="0">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="pagination pagination-hidden"></div>
                            <div class="arrow-wrapp arr-s-3">
                                <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                                <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                            </div>
                        </div>
                        <div class="swiper-container thumbnails" data-autoplay="0"
                             data-loop="0" data-speed="500" data-center="0"
                             data-slides-per-view="responsive" data-xs-slides="3"
                             data-sm-slides="5" data-md-slides="5" data-lg-slides="5"
                             data-add-slides="5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide current active" data-val="0">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_1s.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="1">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_2s.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="2">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_3s.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="3">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_4s.jpg" alt="">
                                </div>
                                <div class="swiper-slide" data-val="4">
                                    <img class="img-responsive img-full" src="img/detail/s_slide_5s.jpg" alt="">
                                </div>
                            </div>
                            <div class="pagination hidden"></div>
                        </div>
                    </div>

                    <div class="detail-content-block">
                        <h3>información general acerca del tour</h3>
                        <p>{{$tour->description}}</p>
                    </div>
                    <div class="detail-content-block">
                        <h3>Incluye:</h3>
                        <div class="table-responsive">
                            <table class="table style-1 type-1 table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Actividad</th>
                                    <th class="text-center">Descripción</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($includes  as $include)
                                    <tr>
                                        <td class="table-label color-dark-2">{{ $include->name }}</td>
                                        <td class="text-center">{{ $include->description }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="right-sidebar">
                    <div class="detail-block bg-blue-2">
                        <h4 class="color-white">details</h4>
                        <div class="details-desc">
                            <p class="color-blue-4">Categoría:  <span class="color-white">sea tour</span></p>
                            <p class="color-blue-4">Precio: <span class="color-white">${{$tour->price}} / persona</span></p>
                            <p class="color-blue-4">Localidad: <span class="color-white">{{ strtoupper($tour->name) }}, {{$tour->city}}</span></p>
                            <p class="color-blue-4">Fecha: <span class="color-white">{{ date("M", strtotime($tour->date)) }} <strong>{{ date("jS Y", strtotime($tour->date)) }}</span></p>
                            <p class="color-blue-4">Rating:
                                @for($i = 0; $i < $tour->rating; $i++)
                                    <span class="fa fa-star color-yellow"></span>
                                @endfor
                            </p>
                            <p class="color-blue-4">Descuento: <span class="color-white">{{ $tour->disccount }}% de descuento</span></p>
                        </div>
                        <div class="details-btn">
                            <a href="#" class="c-button b-40 bg-white hv-transparent"><span>Comprar ahora</span></a>
                        </div>
                    </div>

                    <div class="map-block">
                        <div id="map-canvas" class="style-3" data-lat="{{$tour->longitude}}" data-lng="{{ $tour->latitude }}" data-zoom="10" data-style="2"></div>
                        <div class="addresses-block">
                            <a data-lat="33.716813" data-lng="-117.191016" data-string="Santa Monica Hotel"></a>
                        </div>
                    </div>

                    <div class="popular-tours bg-grey-2">
                        <h4 class="color-dark-2">Destinos populares</h4>
                        <?php $acum1 = 0; ?>
                        @foreach($tours as $tourB)
                            @if($tourB->type == 0 && ($tourB->idTours != $tour->idTours) && $acum1 <= 2)
                                <div class="hotel-small style-2 clearfix">
                                    <a class="hotel-img black-hover" href="#">
                                        <img class="img-responsive radius-0" src="/img/myImg/{{ str_replace(' ', '_', $tourB->name) }}.jpg" alt="">
                                        <div class="tour-layer delay-1"></div>
                                    </a>
                                    <div class="hotel-desc">
                                        <h5><span class="color-dark-2">Desde  <strong>${{$tourB->price}}</strong> / per</span></h5>
                                        <h4>{{strtoupper($tourB->name)}}, {{$tourB->city}}</h4>
                                        <div class="hotel-loc tt">{{ date("M", strtotime($tourB->date)) }} <strong>{{ date("jS Y", strtotime($tourB->date)) }}</strong></div>
                                    </div>
                                </div>
                                <?php $acum1++; ?>
                            @endif
                        @endforeach
                    </div>

                    <div class="sidebar-text-label bg-blue-2 color-white">Información útil</div>

                    <div class="help-contact bg-grey-2">
                        <h4 class="color-dark-2">¿Necesitas ayuda?</h4>
                        <p class="color-grey">Natural Travel brinda el mejor servicio con el fin de lograr la plena satisfacción del cliente con nuestros paquetes turísticos a precios accesibles para que las personas puedan disfrutar el conocer las maravillas más importantes de cada ciudad en México y sus alrededores.</p>
                        <a class="help-phone color-dark-2 link-blue" href="tel:+529983015238"><img src="img/detail/phone24.png" alt="">+52 99 83 01 52 38</a>
                        <a class="help-mail color-dark-2 link-blue" href="mailto:contact@naturaltravel.com"><img src="img/detail/letter.png" alt="">contact@naturaltravel.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional-block padd-90">
            <h4 class="additional-title">algunos destinos que te podrían interesar</h4>
            <div class="may-interested">
                <div class="row">
                    <?php $acum = 0; ?>
                    @foreach($tours as $tourB)
                        @if($tourB->type == 0 && ($tourB->idTours != $tour->idTours) && $acum <= 3)
                            <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                                <div class="hotel-item style-11 bg-white">
                                    <div class="radius-top">
                                        <img src="/img/myImg/{{ str_replace(' ', '_', $tourB->name) }}.jpg" alt="">
                                    </div>
                                    <div class="title bg-grey-2">
                                        <div class="date list-hidden"> {{ date("M", strtotime($tourB->date)) }} <strong>{{ date("jS Y", strtotime($tourB->date)) }}</strong></div>
                                        <h4><b>{{$tourB->name}}</b></h4>
                                        <div class="rate-wrap">
                                            <div class="rate">
                                                @for($i = 0; $i < $tourB->rating; $i++)
                                                    <span class="fa fa-star color-yellow"></span>
                                                @endfor
                                            </div>
                                            <i>{{$tourB->reviews}} votos</i>
                                        </div>
                                        <div class="hotel-person color-dark-2">Desde <span>${{$tourB->price}}</span> por persona</div>
                                    </div>
                                </div>
                            </div>
                            <?php $acum++; ?>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('templates/footer.php'); ?>