<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Tienda por producto')
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
									<h1 class="h1_titulo_producto mb-0">Tienda</h1>
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
			<h1 class="h1_celular">Tienda</h1>
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
					<div class="col-12 px-0">
						<div class="div_descrip_tienda">
							<div class="div_img_circular_tienda">
								<img src="/assets-web/img/ad04db2cc7ef98c0f17e40333120998c.png" class="img_blanco_tienda">
							</div>
							<div class="div_descrip_grande_tienda mt-3 mt-sm-0">
								<h5 class="titulo_producto">Equipos de computo SAC</h5>
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
								<p class="descri_grande_producto mt-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</p>
							</div>
						</div>
						<div class="d-flex mt-3 justify-content-center justify-content-sm-start">
							<button class="position-relative btn_pro_in id_btn_pro">PRODUCTOS
								<div class="linea_rojo linea_rojo1">
									<i><i class="fas fa-sort-down tirangulo_abajo"></i></i>
								</div>
							</button>
							<button class="btn_pro_in ml-3 position-relative id_btn_info">INFORMACION
								<div class="linea_rojo linea_rojo2">
									<i><i class="fas fa-sort-down tirangulo_abajo"></i></i>
								</div>
							</button>
						</div>
					</div>
					<div class="col-12 px-0 mt-4 preoductos">
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
								  	<button class="btn_list_cuadro cuadrado d-none d-sm-block"><i class="fab fa-microsoft icon_cuadro_list"></i></button>
									<button class="btn_list_cuadro btn_left_cua_list list d-none d-sm-block"><i class="fas fa-align-justify icon_cuadro_list"></i></button>
								</div>
							</div>
						</div>
						<div class="row m-0">
							<div class="col-12 px-0 my-3 d-block d-lg-none">
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
							<div class="col-12 px-0 cuadrado_productos">
								<div class="row m-0 animatedParent" data-sequence='100'>
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='1'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												  <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='2'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='3'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/70345557acbc2f257a06899fe79337a4.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='4'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/e2bb51b142c05adeaa1c3511a5f689a2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='5'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='6'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='7'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/70345557acbc2f257a06899fe79337a4.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='8'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/e2bb51b142c05adeaa1c3511a5f689a2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
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
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='9'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
												</div>
												<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
												<form>
												   <p class="clasificacion mb-0">
												     <input id="radio41" type="radio" name="estrellas" value="5"><!--
												     --><label for="radio41" class="mb-0">★</label><!--
												     --><input id="radio42" type="radio" name="estrellas" value="4"><!--
												     --><label for="radio42" class="mb-0">★</label><!--
												     --><input id="radio43" type="radio" name="estrellas" value="3"><!--
												     --><label for="radio43" class="mb-0">★</label><!--
												     --><input id="radio44" type="radio" name="estrellas" value="2"><!--
												     --><label for="radio44" class="mb-0">★</label><!--
												     --><input id="radio45" type="radio" name="estrellas" value="1"><!--
												     --><label for="radio45" class="mb-0">★</label>
												   </p>
											    </form>
												<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='10'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
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
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='11'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/70345557acbc2f257a06899fe79337a4.png" class="img_producto_todos img_card_zoom">
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
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
									<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='12'>
										<div class="card card_border_radius">
											<div class="card-body text-center padding_left_rig_genreal_grande">
												<div class="div_img_azul">
													<p class="dov_azul_p_porcentaje">32%</p>
												</div>
												<div class="div_img_producto overflow-hidden">
													<img src="/assets-web/img/e2bb51b142c05adeaa1c3511a5f689a2.png" class="img_producto_todos img_card_zoom">
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
												<div class="row m-0 justify-content-center hover_animation">
													<div class="col-8 px-0 position-relative d-flex col_animacion" >
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
							<div class="col-12 px-0 lista_productos mt-2">
								<div class="row m-0">
									<div class="col-12 px-1">
										<div class="card_list_general mb-2">
											<div class="div_img_azul">
												<p class="dov_azul_p_porcentaje">32%</p>
											</div>
											<div class="card_list_img mt-md-2 mt-lg-4 overflow-hidden">
												<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_list img_card_zoom">
											</div>
											<div class="card_list_descrip mt-3 mt-sm-0">
												<form>
												   <p class="clasificacion mb-0 clasificacion_center_list">
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
												<p class="p_descrip line_hei mt-2">Este es un nombre de producto</p>
												<p class="mb-0 mt-2"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<p class="card_p_descrip_list">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
												<div class="d-flex mt-4">
													<button class="btn_agregar_list">AGREGAR</button>
													<div class="d-flex div_cora_balanca_list ml-2">
														<button class="btn_cora_blance_list cora_list mr-1">
															<i class="far fa-heart icono_corazon_balance_list corazon_list"></i>
														</button>
														<button class="btn_cora_blance_list btn_balance_list ml-1">
															<i class="fas fa-balance-scale-right icono_corazon_balance_list balance_list"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 px-1">
										<div class="card_list_general mb-2">
											<div class="div_img_azul">
												<p class="dov_azul_p_porcentaje">32%</p>
											</div>
											<div class="card_list_img mt-md-2 mt-lg-4 overflow-hidden">
												<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_list img_card_zoom">
											</div>
											<div class="card_list_descrip mt-3 mt-sm-0">
												<form>
												   <p class="clasificacion mb-0 clasificacion_center_list">
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
												<p class="p_descrip line_hei mt-2">Este es un nombre de producto</p>
												<p class="mb-0 mt-2"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
												<p class="card_p_descrip_list">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
												<div class="d-flex mt-4 overflow-hidden">
													<button class="btn_agregar_list">AGREGAR</button>
													<div class="d-flex div_cora_balanca_list ml-2">
														<button class="btn_cora_blance_list cora_list">
															<i class="far fa-heart icono_corazon_balance_list corazon_list"></i>
														</button>
														<button class="btn_cora_blance_list btn_balance_list">
															<i class="fas fa-balance-scale-right icono_corazon_balance_list balance_list"></i>
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
					<div class="col-12 px-0 informacion mt-4">
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
						     		<p class="mb-0 w-100"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto float-right">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio71" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio71" class="mb-0">★</label><!--
										    --><input id="radio72" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio72" class="mb-0">★</label><!--
										    --><input id="radio73" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio73" class="mb-0">★</label><!--
										    --><input id="radio74" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio74" class="mb-0">★</label><!--
										    --><input id="radio75" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio75" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    	<div class="d-flex align-items-center">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Precio</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio76" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio76" class="mb-0">★</label><!--
										    --><input id="radio77" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio77" class="mb-0">★</label><!--
										    --><input id="radio78" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio78" class="mb-0">★</label><!--
										    --><input id="radio79" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio79" class="mb-0">★</label><!--
										    --><input id="radio80" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio80" class="mb-0">★</label>
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
						     		<p class="mb-0 w-100"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto float-right">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio81" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio81" class="mb-0">★</label><!--
										    --><input id="radio82" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio82" class="mb-0">★</label><!--
										    --><input id="radio83" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio83" class="mb-0">★</label><!--
										    --><input id="radio84" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio84" class="mb-0">★</label><!--
										    --><input id="radio85" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio85" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    	<div class="d-flex align-items-center">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Precio</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio86" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio86" class="mb-0">★</label><!--
										    --><input id="radio87" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio87" class="mb-0">★</label><!--
										    --><input id="radio88" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio88" class="mb-0">★</label><!--
										    --><input id="radio89" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio89" class="mb-0">★</label><!--
										    --><input id="radio90" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio90" class="mb-0">★</label>
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
						     		<p class="mb-0 w-100"><span class="p_avenir_black_producto">Ignacio Mateo Casto Cario</span> <span class="p_avenir_book_desc_producto float-right">l Hace 2 meses</span></p>
						    	</div>
						    	<p class="p_font_buen_pro mb-0 mt-2">Muy Buen producto</p>
							    <div class="d-flex">
							    	<div class="d-flex align-items-center mr-4">
							    		<p class="font_p mb-0">
							    		<span class="span_avenir_book ">Calidad</span>
										</p>
										<form class="form_strellas_producto">
										  <p class="clasificacion mb-0 clasificacion_center_list ml-1">
										    <input id="radio91" type="radio" name="estrellas" value="5"><!--
										    --><label for="radio91" class="mb-0">★</label><!--
										    --><input id="radio92" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio92" class="mb-0">★</label><!--
										    --><input id="radio93" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio93" class="mb-0">★</label><!--
										    --><input id="radio94" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio94" class="mb-0">★</label><!--
										    --><input id="radio95" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio95" class="mb-0">★</label>
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
										    --><label for="radio96" class="mb-0">★</label><!--
										    --><input id="radio97" type="radio" name="estrellas" value="4"><!--
										    --><label for="radio97" class="mb-0">★</label><!--
										    --><input id="radio98" type="radio" name="estrellas" value="3"><!--
										    --><label for="radio98" class="mb-0">★</label><!--
										    --><input id="radio99" type="radio" name="estrellas" value="2"><!--
										    --><label for="radio99" class="mb-0">★</label><!--
										    --><input id="radio100" type="radio" name="estrellas" value="1"><!--
										    --><label for="radio100" class="mb-0">★</label>
										  </p>
									    </form>
							    	</div>
							    </div>
							    <p class="descrip_comentario mb-0 mt-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

