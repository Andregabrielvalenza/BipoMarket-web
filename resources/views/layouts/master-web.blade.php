<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/flickity.css"/>
    <link rel="stylesheet" type="text/css" href="/assets-web/css/nike-select.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/jsCarousel-2.0.0.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<section class="position-relative">
		<div class="container-fluid px-md-3 px-lg-5 py-3 py-md-2">
			<div class="div_cuenta">
				<div class="div_reporte">
					<a href="">Reportar fraude</a>
				</div>
				<div class="div_linea"></div>
				<div class="div_perfil">
					<a href="">
						<i class="far fa-user mr-2"></i>
						Mi cuenta
					</a>
				</div>
			</div>
			<div class="d-flex d-md-none justify-content-end w-100">
				<button class="btn_menu">
					<i class="fas fa-bars icono_menu"></i>
				</button>
			</div>
		</div>
		<div class="div_menu_celular">
			<div class="menu_blanco_celular">
				<a href="">
					<img src="/assets-web/img/Grupo72.png" class="menu_img_celular mb-5 mt-4">
				</a>
				<div class="div_lsit_a py-2 text-left">
					<a href="" class="menu_a">
						<i class="fas fa-book-dead mr-2"></i>
						Reportar fraude
					</a>
				</div>
				<div class="div_lsit_a py-2 text-left">
					<a href="" class="menu_a">
						<i class="far fa-user mr-2"></i>
						Mi cuenta
					</a>
				</div>
				<div class="div_lsit_a py-2 text-left">
					<a href="" class="menu_a">
						<i class="fas fa-home mr-2"></i>
						Home
					</a>
				</div>
				<div class="div_lsit_a py-2 text-left">
					<a href="" class="menu_a">
						<i class="fa fa-question-circle mr-2"></i>
						Que es Bipo
					</a>
				</div>
				<div class="div_lsit_a py-2 text-left">
					<a href="" class="menu_a">
						<i class="fa fa-cog mr-2"></i>
						Como Funciona
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="seccion_menu">
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="menu">
				<a href=""><img src="/assets-web/img/Grupo72.png" class="img_logo"></a>
				<div class="list_carrito">
					<div class="list_menu">
						<a href="" class="mr-4">HOME</a>
						<a href="" class="mr-4">QUE ES BIPO</a>
						<a href="">COMO FUNCIONA</a>
					</div>
					<div class="carrito">
						<div class="carrito_circulo mr-3">
							<img src="/assets-web/img/a33ba71b14e7005fcc55b463ed275410.png" class="img_carrito">
							<div class="circulo_rojo">5</div>
						</div>
						<p class="mb-0 precio_font">S/. 612.00</p>
					</div>
				</div>
				<div class="carrito d-flex d-md-none">
					<div class="carrito_circulo mr-3">
						<img src="/assets-web/img/a33ba71b14e7005fcc55b463ed275410.png" class="img_carrito">
						<div class="circulo_rojo">5</div>
					</div>
					<p class="mb-0 precio_font">S/. 612.00</p>
				</div>
			</div>
		</div>
	</section>
	<!--fin del menu -->

	@yield('contenido')

	<!-- footer-->
	<footer>
		<section class="section_footer_1">
			<div class="container">
				<div class="row m-0 justify-content-center">
					<div class="col-sm-10 col-md-7 mb-3 mb-md-0">
						<div class="div_input_footer">
							<input type="text" placeholder="Ingresa tu dirección de correo electrónico" class="input_footer">
							<button class="btn_subs_footer">Suscribe</button>
						</div>
					</div>
					<div class="col-sm-9 col-md-5 text-center text-md-left">
						<h5 class="font_sub_h5 mb-0">Suscribe a nuestro boletín</h5>
						<p class="font_helregular_p mb-0">Recibe correos con ofertas especiales productos exclusivos</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid px-md-3 px-lg-5 py-4">
				<div class="row m-0 justify-content-center">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5 mb-lg-0">
						<p class="p_avenirmedium_footer">Mi cuenta</p>
						<ul style="list-style-type: none;" class="pl-0 mb-0">
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Mi perfil</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Editar intereses</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Mis pedidos y compras</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Otra cosa</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Una cosa mas</a></li>
						</ul>
					</div>
					<div class="col-sm-8 col-md-7 col-lg-5 mb-5 mb-lg-0 order-1 order-sm-0">
						<p class="p_avenirmedium_footer">Categorias</p>
						<div class="row m-0 justify-content-center">
							<div class="col-6 col-sm-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
								</ul>
							</div>
							<div class="col-6 col-sm-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
								</ul>
							</div>
							<div class="col-6 col-sm-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
									<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Categoria aaa</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-3 col-lg-2 mb-5 mb-lg-0">
						<p class="p_avenirmedium_footer">Tu marca y nosotros</p>
						<ul style="list-style-type: none;" class="pl-0 mb-0">
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Porque</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Como finciona</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Quiero asociarme</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Trabajando juntos</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">Sitio</a></li>
						</ul>
					</div>
					<div class="col-sm-4 col-md-3 mb-5 mb-lg-0">
						<p class="p_avenirmedium_footer">Contactanos</p>
						<p class="enlaces1_footer mb-0 carac_blanco_descr">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
						<ul style="list-style-type: none;" class="pl-0 mb-0">
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">info@bipomarket.com</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">clientes@bipomarket.com</a></li>
							<li><i class="fas fa-caret-right icon_footer mr-1"></i><a href="" class="enlaces1_footer">asociados@bipomarket.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="seccion_plomo_footer py-5">
			<div class="container-fluid px-md-3 px-lg-5">
				<div class="d-flex flex-wrap w-100 justify-content-center">
					<div class="div_plomo_footer text-center px-2 px-sm-4 mb-5 mb-lg-0">
						<i class="fas fa-thumbs-up icono_plomo mb-2"></i>
						<p class="p_descrip_plomo mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
					</div>
					<div class="div_plomo_footer text-center px-2 px-sm-4 mb-5 mb-lg-0">
						<i class="fas fa-phone-volume icono_plomo mb-2"></i>
						<p class="p_descrip_plomo mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
					</div>
					<div class="div_plomo_footer text-center px-2 px-sm-4 mb-5 mb-lg-0">
						<i class="fas fa-truck icono_plomo mb-2"></i>
						<p class="p_descrip_plomo mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
					</div>
					<div class="div_plomo_footer text-center px-2 px-sm-4 mb-5 mb-lg-0">
						<i class="fas fa-exchange-alt icono_plomo"></i>
						<p class="p_descrip_plomo mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
					</div>
					<div class="div_plomo_footer text-center px-2 px-sm-4 mb-5 mb-lg-0">
						<i class="fas fa-lock icono_plomo mb-2"></i>
						<p class="p_descrip_plomo mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
					</div>
				</div>
			</div>
		</section>
		<section class="seccion_footer_4 py-4">
			<div class="container-fluid px-md-3 px-lg-5">
				<div class="row m-0 justify-content-center">
					<div class="col-md-11 col-lg-9 text-center px-0">
						<p class="subtitulo_tag_footer">Tags mas buscados</p>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
						<span class="badge badge_footer">Lorem ipsum dolor</span>
					</div>
				</div>
			</div>
		</section>
		<section class="seccion_footer_rojo py-4 position-relative">
			<img src="/assets-web/img/Grupo153.png" class="img_logo_absolute">
			<div class="container-fluid px-md-3 px-lg-5">
				<div class="row m-0 justify-content-center">
					<div class="col-sm-9 col-md-8 col-lg-6 col-xl-5 text-center px-5">
						<img src="/assets-web/img/Grupo150.png" class="logo_footer">
						<div class="div_blanco_footer"></div>
						<p class="p_blanco_book mb-0">© Bipo Market, 2020. Todos los derechos reservados. Desarrollado y mantenido por <a href="https://puntopro.pe/" target="_blank" class="link_puntopro">PuntoPro</a></p>
					</div>
				</div>
			</div>
		</section>
	</footer>
<script src="/assets-web/js/jquery.min.js"></script>
<script src="/assets-web/js/bootstrap.min.js"></script>
<script src="/assets-web/js/propio.js"></script>
<script src="/assets-web/js/nice-select.js"></script>
<script src="/assets-web/js/jsCarousel-2.0.0.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
	$('.carousel-home').flickity({
                  groupCells:true,
                  autoPlay:true,
                  wrapAround:true,
                  pauseAutoPlayOnHover:true,
                  imagesLoaded: true,
                  pageDots: false,
                }); 
</script>
<script>
  AOS.init();
</script>
<script>
	$(document).ready(function() {
    $('select').niceSelect();
});
</script>
<script>
	$(document).ready(function()
	{
  		$('.toast').toast('show');
	});
</script>
<script>
	$('#carouselv').jsCarousel({ 
		onthumbnailclick: function(src) { 
			alert(src); 
		}, 
		autoscroll: true, 
		masked: false, 
		itemstodisplay: 4, 
		orientation: 'v' 
	});
</script>
</body>
</html>