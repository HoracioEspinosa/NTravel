<?php include('templates/header.php'); ?>
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="img/inner/bg_3.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
		  			<ul class="banner-breadcrumb color-white clearfix">
		  				<li><a class="link-blue-2" href="#">home</a> /</li>
		  				<li><a class="link-blue-2" href="#">pages</a> /</li>
		  				<li><span>contacto</span></li>
		  			</ul>
		  			<h2 class="color-white">get in touch</h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<div class="detail-wrapper">
<!-- CONTACT-FORM -->
<div class="main-wraper padd-40">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<form class="contact-form js-contact-form" action="http://demo.nrgthemes.com/projects/travel/mail.php" method="POST">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" name="fields[name]" required="" placeholder="Ingresa tu nombre">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="email" name="fields[email]" required="" placeholder="Ingresa tu correo electrónico">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" name="fields[subject]" required="" placeholder="Ingresa tus apellidos">
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6">
							<div class="drop-wrap drop-wrap-s-3 color-2">
							  	<div class="drop">
								 	<b>Departmento</b>
									<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
									<span>
									    <a href="#">01 niños</a>
										<a href="#">02 niños</a>
										<a href="#">03 niños</a>
										<a href="#">04 niños</a>
										<a href="#">05 niños</a>
									</span>
							   	</div>
							</div>						
						</div>
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" name="fields[text]" required="" placeholder="Ingresa tu comentario"></textarea>
							<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>enviar comentario</span></button>
						</div>
						<input type="hidden" name="fields[code]" value="56345678safs_">
					</div>					
				</form>
				<div class="ajax-result">
                  <div class="success"></div>
                  <div class="error"></div>
                </div>
                <div class="ajax-loader"></div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="contact-about">
					<h4 class="color-dark-2"><strong>Informacion de contácto</strong></h4>
					<p class="color-grey-3">Donec gravida euismod felis, quis dictum justo scelerisque in. Aenean nec lacus ipsum. Suspendisse vel lobortis libero, eu imperdiet purus.  Aenean nec lacus ipsum.</p>					
				</div>
				<div class="contact-info">
					<h4 class="color-dark-2"><strong>Información de contacto</strong></h4>
					<div class="contact-line color-grey-3"><img src="img/phone_icon_2_dark.png" alt="">Teléfono: <a class="color-dark-2" href="tel:93123456789">+93 123 456 789</a></div>					
					<div class="contact-line color-grey-3"><img src="img/mail_icon_b_dark.png" alt="">Escribenos: <a class="color-dark-2 tt" href="#">natural_travel@world.com</a></div>					
					<div class="contact-line color-grey-3"><img src="img/loc_icon_dark.png" alt="">Dirección: <span class="color-dark-2 tt">Aenean vulputate porttitor</span></div>
				</div>
				<div class="contact-socail">
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-facebook"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-twitter"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-skype"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-instagram"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- MAP BLOCK -->
<div class="map-block">
	<div id="map-canvas" class="style-2" data-lat="21.190297" data-lng="-86.8212097" data-zoom="10" data-style="2"></div>
    <div class="addresses-block">
        <a data-lat="33.664467" data-lng="-117.601586" data-string="Santa Monica Hotel"></a>
    </div>
</div>
<input type="hidden" id="tabactivo" value="5">
<?php include('templates/footer.php'); ?>