<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Galeria-Producto')
@section('contenido')
	<section>
		<div class="container-fluid px-0 px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0">
					<div class="div_fondo_azul">
						<div class="row m-0">
							<div class="col-12 col-sm-5 col-md-4 col-lg-3 px-0 order-2 order-sm-0 mt-3 mt-sm-0 d-none d-sm-block">
								<div class="div_colapse pl-3 pt-2">
									<h1 class="h1_titulo_producto mb-0">Galeria de productos</h1>
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
			<h1 class="h1_celular">Galeria de productos</h1>
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
							<div class="row m-0" data-aos="zoom-in-down" data-aos-duration="3000">
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
								<div class="col-sm-6 col-lg-4 col-xl-3 px-1">
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
											<div class="row m-0 justify-content-center">
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
			</div>
		</div>
	</section>
@endsection
