<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Sobre nosotros')
@section('contenido')
	<section>
		<div class="container-fluid px-0 px-sm-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0">
					<div class="div_fondo_azul">
						<div class="row m-0">
							<div class="col-12 col-sm-5 col-md-4 col-lg-3 px-0 order-2 order-sm-0 mt-3 mt-sm-0 d-none d-sm-block">
								<div class="div_colapse pl-3 pt-2">
									<h1 class="h1_titulo_producto mb-0">Laptop</h1>
								</div>
							</div>
							<div class="col-12 col-sm-7 col-md-8 col-lg-9 pr-0 pl-md-3 pl-lg-4">
								<div class="div_input">
									<input type="text" placeholder="¿Qué estas buscando?" class="input_buscardor">
									<button class="btn_ico">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 px-sm-0">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb px-0">
					    <li class="breadcrumb-item mr-1"><a href="#" class="link_bread_desac">Inicio</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Sobre nosotros</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="fondo_nosotros position-relative py-lg-5">
		<img src="/assets-web/img/About bipo.png" class="img_absolute_nosotros">
		<div class="container-fluid px-0 px-md-3 px-lg-5">
			<div class="row m-0 justify-content-end">
				<div class="col-12 px-0 d-block d-md-none position-relative">
					<h1 class="w-100 position-absolute text-center d-block d-sm-none mt-3 h1_celular">Sobre nosotros</h1>
					<img src="/assets-web/img/sobre-nostros-celular.png" width="100%">
				</div>
				<div class="col-md-6 col-xl-6 px-0 px-xl-1">
					<div class="div_fondo_plomo_sobre px-4 px-sm-5 px-xl-5 py-5 text-center text-md-left">
						<h1 class="titulo_nosotros">Yo soy Bipo</h1>
						<p class="descrip_nosotros">Presentamos al mercado empresarial y público en general de forma sencilla y amigable un <span class="span_nosotros">sin número de ofertas</span> y promociones de productos y servicios en nuestra plataforma, con los precios y porcentajes de descuentos más atractivos, que cubran sus expectativas y necesidades de información en diferentes rubros, tales como: supermercados, tiendas, restaurantes, universidades, institutos, colegios, clínicas, tiendas de ropa, gasolineras, tiendas de repuestos vehiculares y accesorios, hoteles, agencias de viajes, cines, centros de recreación, entre otros. Todo en una sola plataforma.</p>
						<div class="row m-0 justify-content-sm-center justify-content-md-end mt-5">
							<div class="col-12 col-sm-4 col-md-6 col-lg-5 col-xl-3 px-4 px-sm-1 mb-1 mb-sm-0">
								<a href="" class="btn btn_nostros_blanco py-3 py-md-2">Quiero ser Bipo</a>
							</div>
							<div class="col-12 col-sm-4 col-md-6 col-lg-5 col-xl-3 px-4 px-sm-1 mt-1 mt-sm-0">
								<a href="" class="btn btn_nostros_blanco py-3 py-md-2">Contactanos</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mt-5">
		<div class="container px-0">
			<div class="row m-0">
				<div class="col-sm-6 text-center px-lg-5">
					<h5 class="h5_sobre_nosotros mb-0">Nuestra Visión</h5>
					<p class="subtitulo_sobre_nosotros mb-2">Nuestra Visión</p>
					<p class="descrip_sobre_nosotros desc_carac_sobre_nosotros mb-sm-0">BIPOmarket, es la primera plataforma web en el Perú donde personas naturales y personas jurídicas nacionales o extranjeras pueden encontrar las mejores ofertas y promociones en todos los productos y servicios que ofertan nuestros socios estratégicos a nivel nacional.</p>
				</div>
				<div class="col-sm-6 text-center px-lg-5">
					<h5 class="h5_sobre_nosotros mb-0">Que quereos lograr</h5>
					<p class="subtitulo_sobre_nosotros mb-2">Nuestra Visión</p>
					<p class="descrip_sobre_nosotros  desc_carac_sobre_nosotros">
						BIPOmarket, es la primera plataforma web en el Perú donde personas naturales y personas jurídicas nacionales o extranjeras pueden encontrar las mejores ofertas y promociones en todos los productos y servicios que ofertan nuestros socios estratégicos a nivel nacional.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="mt-5">
		<div class="container px-0 px-md-5">
			<div class="row mx-0">
				<div class="col-12 text-center">
					<h5 class="h5_sobre_nosotros mb-0">Creemos que</h5>
					<p class="subtitulo_sobre_nosotros mb-5">Nuestra Visión</p>
				</div>	
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/Grupo211.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						Creemos en la igualdad de los derechos del hombre y la mujer.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/Grupo205.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						La transparencia en nuestras relaciones comerciales (SE) y con nuestros suscriptores.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/EvyDKa.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						El respeto hacia nuestros colaboradores, suscriptores y socios estratégicos.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/Grupo207.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						La honestidad y confianza recíproca.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/PHZpt6.tif.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						La entrega veraz en la información.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/Grupo209.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						En el aprendizaje, y nuestra capacidad de autocrítica.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/FKDfJw.tif.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						La adaptabilidad en un mundo globalizado.
					</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-3 text-center px-xl-5">
					<div class="icono_creemos mb-3">
						<img src="/assets-web/img/Trazado96.png" class="img_icno_creemos">
					</div>
					<p class="descrip_sobre_nosotros desc_carac_iconos mb-5">
						En la búsqueda constante de oportunidades que beneficien a nuestros suscriptores y socios estratégicos.
					</p>
				</div>
				<div class="col-12 px-0">
					<div class="row m-0 justify-content-center">
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<button class="btn_nosotros">Quiero ser Bipo</button>
						</div>
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<button class="btn_nosotros">Contactanos</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
