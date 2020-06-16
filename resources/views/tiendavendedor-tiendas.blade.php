<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Tienda por tiendas')
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
									<h1 class="h1_titulo_producto mb-0">Laptop</h1>
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
			<h1 class="h1_celular">Laptop</h1>
		</div>
	</section>
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-sm-3 col-md-4 col-lg-3 pl-0 pr-0 pr-md-2 pr-xl-4 mb-3">
					<select class="mb-4">
						<option>Ordenar por</option>
						<option>Ordenar por</option>
						<option>Ordenar por</option>
						<option>Ordenar por</option>
						<option>Ordenar por</option>
					</select>
					<button class="accordion">Tipo
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Marca
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Precio
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">% de descuento
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Color
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Tamaño de pantalla
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Precesador
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Memoria RAM
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Sistema operativo
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>

					<button class="accordion">Disco duro
						<i class="fas fa-chevron-right icono_acordion"></i>
					</button>
					<div class="panel">
					  <button class="btn_acordion_pnael">Intel Core i3</button>
					  <button class="btn_acordion_pnael">Intel Core i5</button>
					  <button class="btn_acordion_pnael">Intel Core i7</button>
					  <button class="btn_acordion_pnael">Intel Celeron</button>
					  <button class="btn_acordion_pnael">Pentium Gold</button>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-9 pr-0 pl-0 pl-sm-3 pl-lg-4 mb-3">
					<div class="div_cabezera">
						<div class="img_fondo_rojo cabezera_grande1"></div>
						<div class="fondo_plomo_cabezera cabezera_grande2 d-flex align-items-center flex-wrap justify-content-between">
							<p class="p_titulo_cabezera">ELECTRONICA</p>
							<div class="d-flex align-items-center justify-content-end div_toast_button flex-wrap">
								<div class="d-none d-lg-flex">
									<div class="toast d-flex" data-autohide="false">
									    <div class="toast-header">
									      <small class="text-muted">ASUS</small>
									      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
									    </div>
								  	</div>
								  	<div class="toast d-flex" data-autohide="false">
									    <div class="toast-header">
									      <small class="text-muted">16 GB</small>
									      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
									    </div>
								  	</div>
								  	<div class="toast d-flex" data-autohide="false">
									    <div class="toast-header">
									      <small class="text-muted">Intel Core i7</small>
									      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
									    </div>
								  	</div>
								</div>
							  	<!--<button class="btn_list_cuadro cuadrado"><i class="fab fa-microsoft icon_cuadro_list"></i></button>
								<button class="btn_list_cuadro btn_left_cua_list list"><i class="fas fa-align-justify icon_cuadro_list"></i></button>-->
							</div>
						</div>
					</div>
					<div class="row m-0 animatedParent" data-sequence='100'>
						<div class="col-12 px-0 mt-3 d-block d-lg-none">
							<div class="d-flex justify-content-center">
								<div class="toast d-flex" data-autohide="false">
								    <div class="toast-header">
								      <small class="text-muted">ASUS</small>
								      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
								    </div>
							  	</div>
							  	<div class="toast d-flex" data-autohide="false">
								    <div class="toast-header">
								      <small class="text-muted">16 GB</small>
								      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
								    </div>
							  	</div>
							  	<div class="toast d-flex" data-autohide="false">
								    <div class="toast-header">
								      <small class="text-muted">Intel Core i7</small>
								      <button type="button" class="ml-2 close" data-dismiss="toast">&times;</button>
								    </div>
							  	</div>
							</div>
						</div>
						<div class="col-12 px-0 my-3">
							<input type="text" name="" placeholder="¿Qué estas buscando?" class="input_bucardor_tiendas">
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='1'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-0 mb-lg-1 ml-md-0 ml-lg-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-0 mb-lg-1 ml-md-0 ml-lg-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-md-0 ml-lg-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='2'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									  </p>
								    </form>
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='3'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='4'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='5'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='6'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-4 px-1 animated fadeInUp" data-id='7'>
							<div class="card card_tiendas mb-2">
								<div class="fondo_img_tienda">
									<h5 class="titulo_h5_tiendas mb-0">Equipos de computo SAC</h5>
									<form class="form_strellas_vendedor">
									  <p class="clasificacion mb-0 clasificacion_center_list ml-md-0 ml-lg-1">
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
									<p class="font_p font_subtitulo_producto ml-md-0 ml-lg-2">2 comentarios</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">Calle Brazil 1234, Santa Beatriz, Lima</p>
									<p class="font_p font_subtitulo_producto mb-1 ml-2">(01) 2342341 / 990 090 987</p>
									<p class="font_p font_subtitulo_producto mb-0 ml-2">info@equiposdecomputo.com.pe</p>
								</div>
								<div class="div_plomo_tiendas">
									<button class="btn_ver_tienda">Ver tienda</button>
									<div class="div_img_perfil_tienda"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

