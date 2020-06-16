<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Producto Compuesto')
@section('contenido')
    <link rel="stylesheet" type="text/css" href="/assets-web/css/nike-select.css">
	<section>
		<div class="container-fluid px-0 px-sm-3 px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0">
					<div class="div_fondo_azul">
						<div class="row m-0">
							<div class="col-12 col-sm-5 col-md-4 col-lg-3 px-0 order-2 order-sm-0 mt-3 mt-sm-0 d-none d-sm-block py-sm-2">
								<div class="div_colapse pl-3">
									<h1 class="h1_titulo_producto mb-0">Laptop Lenovo Y740- 15.6” Intel i7</h1>
								</div>
							</div>
							<div class="col-12 col-sm-7 col-md-8 col-lg-9 pr-0 pl-md-3 pl-lg-4 py-2">
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
				<div class="col-12 px-md-0">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb px-0">
					    <li class="breadcrumb-item mr-1"><a href="#" class="link_bread_desac">Inicio</a></li>
					    <li class="breadcrumb-item mr-1"><a href="#" class="link_bread_desac">Computación</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Laptops</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="d-block d-sm-none">
		<div class="container-fluid text-center">
			<h1 class="h1_celular">Producto</h1>
		</div>
	</section>
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0  justify-content-center">
				<div class="col-md-12 col-lg-6 col-xl-6 pl-0 pr-sm-0 pr-lg-2">
					<div class="row m-0">
						<div class="col-4 col-lg-3 col-xl-2 pl-0">
	                        <div id="carouselv">
	                            <div>
	                                <img alt="" src="/assets-web/img/4567f4170b53f379c63c667658749d66.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/49c8e64ec7ea970b9d3eea4680ae0659.png "><br />	 
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/87e992683c9aebfd1034a48a8b20dca4.png"><br />	 
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/4567f4170b53f379c63c667658749d66.png "><br />	
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/49c8e64ec7ea970b9d3eea4680ae0659.png "><br />	 
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/87e992683c9aebfd1034a48a8b20dca4.png"><br />	 
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                            <div>
	                                <img alt="" src="/assets-web/img/48507f0efb8da52331413af7b87fae9a.png "><br />
	                            </div>
	                        </div>
						</div>
						<div class="col-8 col-lg-9 col-xl-10 pr-0">
							<div class="card card_producto">
								<div class="car_porcentaje_fondo">
									<p class="p_porcentaje_producto">38%</p>
								</div>
								<div class="img_producto">
									<img src="/assets-web/img/1c4f82be2fe96bb3af957f3b11eb62c1.png">
								</div>
							</div>
							<span class="badge badge_colores border_right_badge">Computadoras </span>
							<span class="badge badge_colores border_right_badge">Laptops </span>
							<span class="badge badge_colores border_right_badge">Asus </span>
							<span class="badge badge_colores border_right_badge">Core i7</span>
							<span class="badge badge_colores border_right_badge">Otro tag</span>
							<span class="badge badge_colores">Un tag mas</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6 pr-0 pl-0 mt-3 mt-lg-0">
					<div class="row m-0 justify-content-center justify-content-md-start">
						<div class="col-sm-7 col-md-9 col-lg-9 col-xl-8 pl-0 pl-md-2 pr-0 pr-lg-2 pr-0">
							<h4 class="h4_titulo">Este es un nombre de producto</h4>
							<div class="d-flex align-items-center">
								<form class="form_strellas_producto">
								  <p class="clasificacion mb-0 clasificacion_center_list">
								    <input id="radio1" type="radio" name="estrellas" value="5"><!--
								    --><label for="radio1" class="mb-0">★</label><!--
								    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
								    --><label for="radio2" class="mb-0">★</label><!--
								    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
								    --><label for="radio3" class="mb-0">★</label><!--
								    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
								    --><label for="radio4" class="mb-0">★</label><!--
								    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
								    --><label for="radio5" class="mb-0">★</label>
								  </p>
							    </form>
							    <p class="font_p mb-1"><span>
								</span><span class="border_right_badge font_subtitulo_producto ml-2 pr-2">2 comentarios</span><span class="ml-2"><a href="" class="font_subtitulo_producto"><ins>Escribe tu comentaio</ins></a></span></p>
							</div>
							<p class="font_p mb-1"><span class="span_avenir_book">Disponibilidad:</span><span class="span_avenir_medium">En stock</span></p>
							<div class="d-flex align-items-center">
								<p class="font_p mb-0"><span class="span_avenir_book">Vendedor</span><span class="ml-2"><a href="/tienda-vendedor-productos" class="font_subtitulo_producto"><ins>Equipos de computo SAC</ins></a></span></p>
								<form class="form_strellas_producto">
								  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
								  	(
								    <input id="radio6" type="radio" name="estrellas" value="5"><!--
								    --><label for="radio6" class="mb-0">★</label><!--
								    --><input id="radio7" type="radio" name="estrellas" value="4"><!--
								    --><label for="radio7" class="mb-0">★</label><!--
								    --><input id="radio8" type="radio" name="estrellas" value="3"><!--
								    --><label for="radio8" class="mb-0">★</label><!--
								    --><input id="radio9" type="radio" name="estrellas" value="2"><!--
								    --><label for="radio9" class="mb-0">★</label><!--
								    --><input id="radio10" type="radio" name="estrellas" value="1"><!--
								    --><label for="radio10" class="mb-0">★</label>
								    )
								  </p>
							    </form>
							</div>
						</div>
						<div class="col-6 col-sm-5 col-md-3 col-lg-3 col-xl-3 text-center text-sm-right px-0 my-3 my-sm-0">
							<h3 class="font_precio_igual mb-0 size_precio_mayor">S/. 120.00</h3>
							<h6 class="font_precio_igual size_precio_menor"><s>S/. 165.00</s></h6>
						</div>
						<div class="col-12 pl-0 pl-md-2 pr-0 pr-lg-2 pr-0">
							<p class="p_avenir_black_producto mb-1">Personaliza tu pedido</p>
							<div class="row m-0">
								<div class="col-sm-9 col-md-9 col-xl-8 pl-0 pr-0 pr-sm-3">
									<select class="mb-2">
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
									</select>
									<select class="mb-2">
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
									</select>
									<select class="mb-2">
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
										<option>Elige el tamaño de pantalla</option>
									</select>
								</div>
								<div class="col-sm-3 col-md-3 col-xl-3 pl-0 pl-xl-2 pr-0">
									<div class="div_sumar_restar">
										<button class="btn_menos_mas mr-1">-</button>
										<div class="div_number">1</div>
										<button class="btn_menos_mas ml-1">+</button>
									</div>
								</div>	
							</div>
						</div>
						<div class="col-md-9 col-lg-12 pl-0 pl-md-2 pr-lg-2 pr-0">
							<p class="p_avenir_book_producto mb-2">Descripción</p>
							<p class="p_avenir_book_desc_producto mb-2 desc_3_carac">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te</p>
						</div>
						<div class="div_enlces pl-md-3">
							<button type="button" class="btn btn_like">
								<i class="fas fa-thumbs-up"></i>
								Like <span class="badge badge-light">4</span>
							</button>
							<div class="div_btn_sociales ml-2">
								<button class="btn_compartir color_plomo_compar">
									<i class="fas fa-share-alt"></i>
								</button>
								<div class="div_resdes_sociales">
									<a href="" class="link_sociales mr-3">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="" class="link_sociales mr-3">
										<i class="fab fa-facebook-square"></i>
									</a>
									<a href="" class="link_sociales mr-3">
										<i class="fab fa-google-plus-square"></i>
									</a>
									<a href="" class="link_sociales mr-3">
										<i class="fab fa-invision"></i>
									</a>
									<a href="" class="link_sociales mr-3">
										<i class="fab fa-pinterest"></i>
									</a>
									<a href="" class="link_sociales">
										<i class="fas fa-envelope"></i>
									</a>
								</div>
								<p class="p_avenir_book_desc_producto mb-0 ml-2 p_ocultar">Compartir producto</p>
							</div>
							<div class="div_btn_productos">
								<div class="div_corazon_balence mr-2">
									<button class="btn_iguales_producto btn_cambio"><i class="far fa-heart color_plomo_icon cambio_icon"></i></button>
									<button class="btn_iguales_producto btn_cambio_balance">
										<i class="fas fa-balance-scale-right color_plomo_icon balance_cmbio"></i>
									</button>
								</div>
								<button class="btn_agregar_producto color_plomo_agregar">
									AGREGAR
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mt-5" data-aos="zoom-in-down" data-aos-duration="3000">
		<div class="container">
			<div class="row m-0">
				<div class="col-sm-6 col-lg-3 px-0 px-sm-3 mb-3">
					<div class="div_img_compuesto">
						<img src="/assets-web/img/1c4f82be2fe96bb3af957f3b11eb62c1.png" class="img_compuesto">
					</div>
					<p class="text-center text-sm-left p_nombre_pro_com mb-0 mt-4">Este es un nombre<br> de producto</p>
					<p class="text-center text-sm-right p_hel_bol_pre_com mb-1">S/. 100.00</p>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
					<select class="mb-2">
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
					</select>
					<select class="mb-2">
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
					</select>
				</div>
				<div class="col-sm-6 col-lg-3 px-0 px-sm-3 mb-3">
					<div class="div_img_compuesto">
						<img src="/assets-web/img/049df0064b6a8aa59bb2cf8a385772e5.png" class="img_compuesto">
					</div>
					<p class="text-center text-sm-left p_nombre_pro_com mb-0 mt-4">Este es un nombre<br> de producto</p>
					<p class="text-center text-sm-right p_hel_bol_pre_com mb-1">S/. 100.00</p>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
					<select class="mb-2">
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
					</select>
					<select class="mb-2">
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
					</select>
				</div>
				<div class="col-sm-6 col-lg-3 px-0 px-sm-3 mb-3">
					<div class="div_img_compuesto">
						<img src="/assets-web/img/de9aa797ae68b15916f051ac582e3e8c.png" class="img_compuesto">
					</div>
					<p class="text-center text-sm-left p_nombre_pro_com mb-0 mt-4">Este es un nombre<br> de producto</p>
					<p class="text-center text-sm-right p_hel_bol_pre_com mb-1">S/. 100.00</p>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
					<select class="mb-2">
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
						<option>Elige el color</option>
					</select>
					<select class="mb-2">
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
						<option>Elige otra cosa</option>
					</select>
				</div>
				<div class="col-sm-6 col-lg-3 px-0 px-sm-3 mb-3">
					<div class="div_img_compuesto">
						<img src="/assets-web/img/f23cbaf4bdfb8b40f90a89226318ebe6.png" class="img_compuesto">
					</div>
					<p class="text-center text-sm-left p_nombre_pro_com mb-0 mt-4">Este es un nombre<br> de producto</p>
					<p class="text-center text-sm-right p_hel_bol_pre_com mb-1">S/. 100.00</p>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
					<select class="mb-2">
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
						<option>Elige el tamaño de pantalla</option>
					</select>
				</div>
			</div>
		</div>
	</section>
	<section class="mt-5">
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0 justify-content-center">
				<div class="col-md-10 col-lg-7 col-xl-8 pl-0 pr-0 pr-lg-3">
					<p class="p_avenir_book_producto">FICHA TECNICA</p>
					<table class="table table-striped">
					  <tbody>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Precio</th>
					      <td class="py-1 font_avnir_black_table">S/ 7,999.00</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Marca</th>
					      <td class="py-1 font_avnir_black_table">LENOVO</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Modelo</th>
					      <td class="py-1 font_avnir_black_table">Y740-15ICHG#81HE003VLM</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tipo de Pantalla</th>
					      <td class="py-1 font_avnir_black_table">IPS</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Definición de Pantalla</th>
					      <td class="py-1 font_avnir_black_table">FHD</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Resolución de Pantalla</th>
					      <td class="py-1 font_avnir_black_table">1920x1080 px</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Núcleos del procesador</th>
					      <td class="py-1 font_avnir_black_table">Hexa Core</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Disco duro</th>
					      <td class="py-1 font_avnir_black_table">1 TB</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Velocidad del disco dur</th>
					      <td class="py-1 font_avnir_black_table">Velocidad del disco duro 7200 RPM </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Memoria RAM</th>
					      <td class="py-1 font_avnir_black_table">Memoria RAM 16 GB</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tipo de memoria RAM</th>
					      <td class="py-1 font_avnir_black_table">DDR4</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Velocidad de memoria RAM</th>
					      <td class="py-1 font_avnir_black_table">2666 MHz</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Bahía de almacenamiento expandible</th>
					      <td class="py-1 font_avnir_black_table">No</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Memoria RAM máxima soportada Hasta</th>
					      <td class="py-1 font_avnir_black_table">Hasta 32 GB</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Almacenamiento total </th>
					      <td class="py-1 font_avnir_black_table">1 TB 256 GB </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tipo de almacenamiento</th>
					      <td class="py-1 font_avnir_black_table">Mecánico y SSD</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Sistema Operativo Windows 10 </th>
					      <td class="py-1 font_avnir_black_table">Windows 10 Home</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tipo de gráficos </th>
					      <td class="py-1 font_avnir_black_table">Dedicada | Integrada</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Memoria tarjeta gráfica </th>
					      <td class="py-1 font_avnir_black_table">8 GB</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tasa de refresco</th>
					      <td class="py-1 font_avnir_black_table">144Hz</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Entradas HDMI </th>
					      <td class="py-1 font_avnir_black_table">1</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Entradas USB 3.1 </th>
					      <td class="py-1 font_avnir_black_table">3</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Entradas USB tipo C </th>
					      <td class="py-1 font_avnir_black_table">1</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Puertos RJ45</th>
					      <td class="py-1 font_avnir_black_table">1</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Thunderbolt</th>
					      <td class="py-1 font_avnir_black_table">1</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Entrada de audio</th>
					      <td class="py-1 font_avnir_black_table">Jack 3.5 mm </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Wifi integrado </th>
					      <td class="py-1 font_avnir_black_table">Sí</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Bluetooth</th>
					      <td class="py-1 font_avnir_black_table">Si</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Pantalla touch</th>
					      <td class="py-1 font_avnir_black_table">No</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Webcam HD</th>
					      <td class="py-1 font_avnir_black_table">1280x720 px</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Bloqueo de seguridad </th>
					      <td class="py-1 font_avnir_black_table">Sí</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Micrófono integrado </th>
					      <td class="py-1 font_avnir_black_table">Sí</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Cantidad de parlantes</th>
					      <td class="py-1 font_avnir_black_table">2</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Lector de huella digital</th>
					      <td class="py-1 font_avnir_black_table">No</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Teclado numérico </th>
					      <td class="py-1 font_avnir_black_table">No</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Teclado retroiluminado</th>
					      <td class="py-1 font_avnir_black_table">Sí</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Tipo de Batería Batería</th>
					      <td class="py-1 font_avnir_black_table">3 celdas </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Consumo </th>
					      <td class="py-1 font_avnir_black_table">En operación: 230 Wh|En modo espera:</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Alto</th>
					      <td class="py-1 font_avnir_black_table">0.875Wh</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Ancho</th>
					      <td class="py-1 font_avnir_black_table">2.6 cm</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Profundidad</th>
					      <td class="py-1 font_avnir_black_table">36.3 cm</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Peso </th>
					      <td class="py-1 font_avnir_black_table">27 cm </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Alto empaque</th>
					      <td class="py-1 font_avnir_black_table">2.2kg</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Ancho empaque</th>
					      <td class="py-1 font_avnir_black_table">43 cm</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Profundidad empaque</th>
					      <td class="py-1 font_avnir_black_table">58.5 cm</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Peso con empaque</th>
					      <td class="py-1 font_avnir_black_table">8 cm </td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Incluye lápiz táctil</th>
					      <td class="py-1 font_avnir_black_table">4.61 kg</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Incluye</th>
					      <td class="py-1 font_avnir_black_table">No</td>
					    </tr>
					    <tr>
					      <th scope="row" class="text-right font_ligoblique_table py-1">Garantía del proveedor</th>
					      <td class="py-1 font_avnir_black_table">Manual de usuario 1 año</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<div class="col-md-10 col-lg-5 col-xl-4 pl-0 pl-lg-2 pr-0">
					<p class="p_avenir_book_producto">INFORMACION</p>
					  <div class="set">
					    <a href="#nogo" class="mb-2">Datos de envio<i class="fas fa-angle-right"></i></a>
					    <div class="content px-3 pt-1">
					      <p class="mb-0"><span class="p_avenir_black_producto">Tiempo de entrega:</span> <span class="span_avenir_medium">3 dias habiles</span></p>
					      <p class="mb-0"><span class="p_avenir_black_producto">Zona de delivery:</span> <span class="span_avenir_medium">Peru</span></p>
					      <p class="mb-0 p_avenir_black_producto">Restricciones:</p>
					      <p class="p_avenir_book_desc_producto desc_3_carac">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					    </div>
					  </div>
					  <div class="set">
					    <a href="#nogo" class="mb-2">Política de cancelación y / o devolución<i class="fas fa-angle-right"></i></a>
					    <div class="content px-3 pt-1">
					      <p class="mb-0"><span class="p_avenir_black_producto">Tiempo de entrega:</span> <span class="span_avenir_medium">3 dias habiles</span></p>
					      <p class="mb-0"><span class="p_avenir_black_producto">Zona de delivery:</span> <span class="span_avenir_medium">Peru</span></p>
					      <p class="mb-0 p_avenir_black_producto">Restricciones:</p>
					      <p class="p_avenir_book_desc_producto desc_3_carac">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					    </div>
					  </div>
					  <div class="set">
					    <a href="#nogo" class="mb-2">Comentarios<i class="fas fa-angle-right"></i></a>
					    <div class="content px-0 px-sm-3 pt-1">
					    	<div class="mb-3">
					    		<div class="perfil_descri">
							     	<div class="div_perfil_producto mr-1">
							     		<img src="/assets-web/img/12cdf8ea3aebe82a6089d1a78b1be822.png" class="img_perfil_producto">
							     	</div>
						     		<p class="mb-0"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto ml_span_meses">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio11" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio11" class="mb-0">★</label><!--
										    --><input id="radio12" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio12" class="mb-0">★</label><!--
										    --><input id="radio13" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio13" class="mb-0">★</label><!--
										    --><input id="radio14" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio14" class="mb-0">★</label><!--
										    --><input id="radio15" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio15" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    	<div class="d-flex align-items-center">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Precio</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio16" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio16" class="mb-0">★</label><!--
										    --><input id="radio17" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio17" class="mb-0">★</label><!--
										    --><input id="radio18" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio18" class="mb-0">★</label><!--
										    --><input id="radio19" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio19" class="mb-0">★</label><!--
										    --><input id="radio20" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio20" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    </div>
							    <p class="descrip_comentario mb-0 mt-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					    	</div>
					    	<div class="mb-3">
					    		<div class="perfil_descri">
							     	<div class="div_perfil_producto mr-1">
							     		<img src="/assets-web/img/4aafbc461aff559f6de3910e385f8675.png" class="img_perfil_producto">
							     	</div>
						     		<p class="mb-0"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto ml_span_meses">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio21" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio21" class="mb-0">★</label><!--
										    --><input id="radio22" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio22" class="mb-0">★</label><!--
										    --><input id="radio23" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio23" class="mb-0">★</label><!--
										    --><input id="radio24" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio24" class="mb-0">★</label><!--
										    --><input id="radio25" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio25" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    	<div class="d-flex align-items-center">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Precio</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio26" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio26" class="mb-0">★</label><!--
										    --><input id="radio27" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio27" class="mb-0">★</label><!--
										    --><input id="radio28" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio28" class="mb-0">★</label><!--
										    --><input id="radio29" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio29" class="mb-0">★</label><!--
										    --><input id="radio30" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio30" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    </div>
							    <p class="descrip_comentario mb-0 mt-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					    	</div>
					    	<div class="mb-3">
					    		<div class="perfil_descri">
							     	<div class="div_perfil_producto mr-1">
							     		<img src="/assets-web/img/12cdf8ea3aebe82a6089d1a78b1be822.png" class="img_perfil_producto">
							     	</div>
						     		<p class="mb-0"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto ml_span_meses">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio31" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio31" class="mb-0">★</label><!--
										    --><input id="radio32" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio32" class="mb-0">★</label><!--
										    --><input id="radio33" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio33" class="mb-0">★</label><!--
										    --><input id="radio34" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio34" class="mb-0">★</label><!--
										    --><input id="radio35" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio35" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    	<div class="d-flex align-items-center">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Precio</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio36" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio36" class="mb-0">★</label><!--
										    --><input id="radio37" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio37" class="mb-0">★</label><!--
										    --><input id="radio38" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio38" class="mb-0">★</label><!--
										    --><input id="radio39" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio39" class="mb-0">★</label><!--
										    --><input id="radio40" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio40" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    </div>
							    <p class="descrip_comentario mb-0 mt-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					    	</div>
					    	<a href="" class="btn btn_comentarios">Ver todos</a>
					    </div>
					  </div>
				</div>
			</div>
		</div>
	</section>
	<section class="mb-4">
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0">
					<div class="div_cabezera">
						<div class="img_fondo_rojo cabezera_grande1 cabezera_grande_completo1"></div>
						<div class="fondo_plomo_cabezera cabezera_grande2 cabezera_grande_completo2">
							<p class="p_titulo_cabezera">PRODUCTOS RELECIONADOS</p>
						</div>
					</div>
					<div class="div_card_5" data-aos="fade-right" data-aos-duration="3000">
						<div class="px-1 card_5">
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto_maquinas overflow-hidden">
										<img src="/assets-web/img/794af69a6f5a85ddc8521c9bdeaf5911.png" class="img_producto_todos_maquinas img_card_zoom">
									</div>
									<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
									<form>
									   <p class="clasificacion mb-0">
									     <input id="radio46" type="radio" name="estrellas" value="5"><!--
									     --><label for="radio46" class="mb-0">★</label><!--
									     --><input id="radio47" type="radio" name="estrellas" value="4"><!--
									     --><label for="radio47" class="mb-0">★</label><!--
									     --><input id="radio48" type="radio" name="estrellas" value="3"><!--
									     --><label for="radio48" class="mb-0">★</label><!--
									     --><input id="radio49" type="radio" name="estrellas" value="2"><!--
									     --><label for="radio49" class="mb-0">★</label><!--
									     --><input id="radio50" type="radio" name="estrellas" value="1"><!--
									     --><label for="radio50" class="mb-0">★</label>
									   </p>
								    </form>
									<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
									<div class="row m-0 justify-content-center">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion" >
											<button class="btn_corazon_balance derecha">
												<i class="far fa-heart icono_corazon_balance  color_plomo_icon corazon"></i>
											</button>
											<button class="btn_agregar_general">AGREGAR</button>
											<button class="btn_corazon_balance izquierda">
												<i class="fas fa-balance-scale-right icono_corazon_balance color_plomo_icon balnace"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="px-1 card_5">
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto_maquinas overflow-hidden">
										<img src="/assets-web/img/74fd46338a130a651f0caf08ded5b3fa.png" class="img_producto_todos_maquinas img_card_zoom">
									</div>
									<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
									<form>
									   <p class="clasificacion mb-0">
									     <input id="radio51" type="radio" name="estrellas" value="5"><!--
									     --><label for="radio51" class="mb-0">★</label><!--
									     --><input id="radio52" type="radio" name="estrellas" value="4"><!--
									     --><label for="radio52" class="mb-0">★</label><!--
									     --><input id="radio53" type="radio" name="estrellas" value="3"><!--
									     --><label for="radio53" class="mb-0">★</label><!--
									     --><input id="radio54" type="radio" name="estrellas" value="2"><!--
									     --><label for="radio54" class="mb-0">★</label><!--
									     --><input id="radio55" type="radio" name="estrellas" value="1"><!--
									     --><label for="radio55" class="mb-0">★</label>
									   </p>
								    </form>
									<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
									<div class="row m-0 justify-content-center">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion" >
											<button class="btn_corazon_balance derecha">
												<i class="far fa-heart icono_corazon_balance  color_plomo_icon corazon"></i>
											</button>
											<button class="btn_agregar_general">AGREGAR</button>
											<button class="btn_corazon_balance izquierda">
												<i class="fas fa-balance-scale-right icono_corazon_balance color_plomo_icon balnace"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="px-1 card_5">
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto_maquinas overflow-hidden">
										<img src="/assets-web/img/959dcf7fc37bbb4b53e3b59dbbc99e7e.png" class="img_producto_todos_maquinas img_card_zoom">
									</div>
									<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
									<form>
									   <p class="clasificacion mb-0">
									     <input id="radio56" type="radio" name="estrellas" value="5"><!--
									     --><label for="radio56" class="mb-0">★</label><!--
									     --><input id="radio57" type="radio" name="estrellas" value="4"><!--
									     --><label for="radio57" class="mb-0">★</label><!--
									     --><input id="radio58" type="radio" name="estrellas" value="3"><!--
									     --><label for="radio58" class="mb-0">★</label><!--
									     --><input id="radio59" type="radio" name="estrellas" value="2"><!--
									     --><label for="radio59" class="mb-0">★</label><!--
									     --><input id="radio60" type="radio" name="estrellas" value="1"><!--
									     --><label for="radio60" class="mb-0">★</label>
									   </p>
								    </form>
									<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
									<div class="row m-0 justify-content-center">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion" >
											<button class="btn_corazon_balance derecha">
												<i class="far fa-heart icono_corazon_balance  color_plomo_icon corazon"></i>
											</button>
											<button class="btn_agregar_general">AGREGAR</button>
											<button class="btn_corazon_balance izquierda">
												<i class="fas fa-balance-scale-right icono_corazon_balance color_plomo_icon balnace"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="px-1 card_5">
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto_maquinas overflow-hidden">
										<img src="/assets-web/img/92e98b1ac37af9e9a73e8b26f4dea00b.png" class="img_producto_todos_maquinas img_card_zoom">
									</div>
									<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
									<form>
									   <p class="clasificacion mb-0">
									     <input id="radio61" type="radio" name="estrellas" value="5"><!--
									     --><label for="radio61" class="mb-0">★</label><!--
									     --><input id="radio62" type="radio" name="estrellas" value="4"><!--
									     --><label for="radio62" class="mb-0">★</label><!--
									     --><input id="radio63" type="radio" name="estrellas" value="3"><!--
									     --><label for="radio63" class="mb-0">★</label><!--
									     --><input id="radio64" type="radio" name="estrellas" value="2"><!--
									     --><label for="radio64" class="mb-0">★</label><!--
									     --><input id="radio65" type="radio" name="estrellas" value="1"><!--
									     --><label for="radio65" class="mb-0">★</label>
									   </p>
								    </form>
									<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
									<div class="row m-0 justify-content-center">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion" >
											<button class="btn_corazon_balance derecha">
												<i class="far fa-heart icono_corazon_balance  color_plomo_icon corazon"></i>
											</button>
											<button class="btn_agregar_general">AGREGAR</button>
											<button class="btn_corazon_balance izquierda">
												<i class="fas fa-balance-scale-right icono_corazon_balance color_plomo_icon balnace"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="px-1 card_5">
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto_maquinas overflow-hidden">
										<img src="/assets-web/img/794a6216b42bf500f5b8a8726d9b57d5.png" class="img_producto_todos_maquinas img_card_zoom">
									</div>
									<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
									<form>
									   <p class="clasificacion mb-0">
									     <input id="radio66" type="radio" name="estrellas" value="5"><!--
									     --><label for="radio66" class="mb-0">★</label><!--
									     --><input id="radio67" type="radio" name="estrellas" value="4"><!--
									     --><label for="radio67" class="mb-0">★</label><!--
									     --><input id="radio68" type="radio" name="estrellas" value="3"><!--
									     --><label for="radio68" class="mb-0">★</label><!--
									     --><input id="radio69" type="radio" name="estrellas" value="2"><!--
									     --><label for="radio69" class="mb-0">★</label><!--
									     --><input id="radio70" type="radio" name="estrellas" value="1"><!--
									     --><label for="radio70" class="mb-0">★</label>
									   </p>
								    </form>
									<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
									<div class="row m-0 justify-content-center">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion" >
											<button class="btn_corazon_balance derecha">
												<i class="far fa-heart icono_corazon_balance  color_plomo_icon corazon"></i>
											</button>
											<button class="btn_agregar_general">AGREGAR</button>
											<button class="btn_corazon_balance izquierda">
												<i class="fas fa-balance-scale-right icono_corazon_balance color_plomo_icon balnace"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
