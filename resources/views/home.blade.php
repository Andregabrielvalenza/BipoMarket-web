<?php use App\Http\Librerias\CaracteresEspeciales;?>
@extends('layouts.master-web')
@section('title','Bipo Market')
@section('contenido')
	<link rel="stylesheet" type="text/css" href="/assets-web/css/select-home.css">
	<section>
		<div class="container-fluid px-0 px-sm-3 px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0">
					<div class="div_fondo_azul">
						<div class="row m-0">
							<div class="col-12 col-sm-5 col-md-4 col-lg-3 px-0 order-2 order-sm-0 mt-2 mt-sm-0 mb-2 mb-sm-0 d-none d-sm-block">
								<select>
									<option>Categorias</option>
									<option>Categorias A</option>
									<option>Categorias B</option>
									<option>Categorias C</option>
									<option>Categorias D</option>
									<option>Categorias E</option>
									<option>Categorias F</option>
								</select>
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
				<div class="col-12 d-block d-sm-none my-3">
					<select>
						<option>Categorias</option>
						<option>Categorias A</option>
						<option>Categorias B</option>
						<option>Categorias C</option>
						<option>Categorias D</option>
						<option>Categorias E</option>
						<option>Categorias F</option>
					</select>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-sm-12 col-md-4 col-lg-3 px-0 position-relative">
					<div class="celular">
						<i class="fas fa-times close_categoria"></i>
						<div class="row m-0">
							<div class="col-6">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><a class="btn btn_categorias mb-2">Productos hasta…</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><a class="btn btn_categorias mb-2">Productos hasta…</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-12 py-3 border_col mb-3">
							<ul style="list-style-type: none;" class="pl-0 mb-0">
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Productos hasta…</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
								<li><a class="btn btn_categorias mb-2"><i class="fa fa-angle-right mr-3 icono_rojo"></i>Categoría aaa</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-9 pr-0 pl-0 pl-md-3 pl-lg-4 pt-0 pt-md-3 pt-lg-4 position-relative">
					<div class="div_categorias">
						<button class="btn_close_categorias"><i class="fas fa-times icono_categorias"></i></button>
						<div class="row m-0">
							<div class="col-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><a class="btn btn_categorias mb-2 px-0">Productos hasta…</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2 px-0">Categoría aaa</a></li>
								</ul>
							</div>
							<div class="col-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><a class="btn btn_categorias mb-2">Productos hasta…</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
								</ul>
							</div>
							<div class="col-4">
								<ul style="list-style-type: none;" class="pl-0 mb-0">
									<li><a class="btn btn_categorias mb-2">Productos hasta…</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
									<li><a class="btn btn_categorias mb-2">Categoría aaa</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-12 px-0 mb-3">
							<div class="row m-0 justify-content-center">
								<div class="col-sm-8 col-md-7 col-lg-8 col-xl-9 pl-0 pr-0 pr-sm-2">
									<div class="banner_1 mb-2">
										
									</div>
								</div>
								<div class="col-sm-4 col-md-5 col-lg-4 col-xl-3 px-0 mb-2">
									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											    <ol class="carousel-indicators carousel_circulo">
											      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											    </ol>
											  	<div class="carousel-inner">
												    <div class="carousel-item active text-center border_slider pt-3 pb-5">
												      <p class="hora_p">02:13:35</p>
												      <img src="/assets-web/img/Imagen5.png" class="img_catalogos">
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
												      <p class="p_descrip">Este es un nombre de producto</p>
												      <p class="mb-0"><span class="precio_rojo">S/. 120.00</span><span class="precio_rayado"><s>S/. 180.00</s></span></p>
												      <a href="" class="btn btn_agregar">AGREGAR</a>
												    </div>
												    <div class="carousel-item text-center border_slider pt-3 pb-5">
												     <p class="hora_p">02:13:35</p>
												      <img src="/assets-web/img/Imagen5.png" class="img_catalogos">
												      <form>
														  <p class="clasificacion mb-0">
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
												      <p class="p_descrip">Este es un nombre de producto</p>
												      <p class="mb-0"><span class="precio_rojo">S/. 120.00</span><span class="precio_rayado"><s>S/. 180.00</s></span></p>
												      <a href="" class="btn btn_agregar">AGREGAR</a>
												    </div>
												    <div class="carousel-item text-center border_slider pt-3 pb-5">
												      <p class="hora_p">02:13:35</p>
												      <img src="/assets-web/img/Imagen5.png" class="img_catalogos">
												      <form>
														  <p class="clasificacion mb-0">
														    <input id="radio96" type="radio" name="estrellas" value="5"><!--
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
												      <p class="p_descrip">Este es un nombre de producto</p>
												      <p class="mb-0"><span class="precio_rojo">S/. 120.00</span><span class="precio_rayado"><s>S/. 180.00</s></span></p>
												      <a href="" class="btn btn_agregar">AGREGAR</a>
												    </div>
											  	</div>
									</div>
								</div>
								<div class="col-sm-8 col-md-12 col-lg-8 col-xl-9 pl-0 pr-sm-2 pr-md-0 pr-lg-2 mb-2">
									<div class="row">
										<div class="col-sm-6 pr-0 pr-sm-1">
											<div class="banner_plomo p-2 p-md-3" data-aos="fade-up">
												<div class="row m-0">
													<div class="col-8 px-0">
														<h5 class="font_compra mt-3">Compra le esta tablet de una vez a tu hijo</h5>
														<a href="" class="link_compra_plomo">Comprar ahora ></a>
													</div>
													<div class="col-4 pr-0">
														<img src="/assets-web/img/67059dcf0d2cb3b74c7e001f853ffb5a.png" width="100%" height="100%">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 pl-sm-1 pr-0 pr-sm-3 mt-2 mt-sm-0">
											<div class="banner_celeste p-2 p-md-3" data-aos="fade-up">
												<div class="row m-0">
													<div class="col-8 px-0">
														<h5 class="font_blanco mt-3">Esta es una publicidad Para reloj</h5>
														<a href="" class="link_compra_blanco">Comprar ahora ></a>
													</div>
													<div class="col-4 pr-0 fondo_azul_col">
														<img src="/assets-web/img/1815927d97fcf571c713073a06ec5e42.png" width="100%" class="img_reloj">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-md-7 col-lg-4 col-xl-3 px-0">
									<div class="div_banner_rojo px-3" data-aos="fade-up">
										<p class="p_precio"><span class="simbolo_font">S/.</span><span class="p_precio_iguales">30</span><br><span class="p_precio_iguales">O menos</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-sm-3 col-md-4 col-lg-3 px-0 mb-3">
					<div class="div_cabezera mb-1">
						<div class="img_fondo_rojo"></div>
						<div class="fondo_plomo_cabezera">
							<p class="p_titulo_cabezera">RECOMENDAODS</p>
						</div>
					</div>
					<div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center padding_left_rig_genreal">
								<div class="div_img_producto">
									<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">
								</div>
								<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
								<p class="p_precio_peque">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center padding_left_rig_genreal">
								<div class="div_img_producto">
									<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">
								</div>
								<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
								<p class="p_precio_peque">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center padding_left_rig_genreal">
								<div class="div_img_producto">
									<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">
								</div>
								<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
								<p class="p_precio_peque">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center padding_left_rig_genreal">
								<div class="div_img_producto">
									<img src="/assets-web/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">
								</div>
								<p class="p_descrip line_hei mt-3">Este es un nombre de producto</p>
								<p class="p_precio_peque">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-9 pr-0 pl-0 pl-sm-3 pl-lg-4 mb-3">
					<div class="div_cabezera">
						<div class="img_fondo_rojo cabezera_grande1"></div>
						<div class="fondo_plomo_cabezera cabezera_grande2">
							<p class="p_titulo_cabezera">ELECTRONICA</p>
						</div>
					</div>
					<div class="row m-0 animatedParent" data-sequence='100'>
						<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='1'>
							<div class="card card_border_radius">
								<div class="card-body text-center padding_left_rig_genreal_grande">
									<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
									</div>
									<div class="div_img_producto overflow-hidden">
										<a href="/galeria-producto">
											<img src="/assets-web/img/0ff073eec1a167cd09ec29eecd6eabb2.png" class="img_producto_todos img_card_zoom">
										</a>
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
						<div class="col-12 px-0 mt-4 col_azul_block">
							<div class="banner_azul">
								<img src="/assets-web/img/banners-azul.png" class="img_producto_todos">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 px-0 mt-0 mb-3 col_azul_none">
				ELECTRONICA	<div class="banner_azul">
						<img src="/assets-web/img/banners-azul.png" class="img_producto_todos">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-sm-3 col-md-4 col-lg-3 px-0 mb-3">
					<div class="div_cabezera mb-1">
						<div class="img_fondo_rojo"></div>
						<div class="fondo_plomo_cabezera">
							<p class="p_titulo_cabezera">RECOMENDAODS</p>
						</div>
					</div>
					<div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center">
								<div class="fondo_plomo">
									<!--<img src="assets/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">-->
								</div>
								<p class="p_precio_peque mt-3">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center">
								<div class="fondo_plomo">
									<!--<img src="assets/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">-->
								</div>
								<p class="p_precio_peque mt-3">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center">
								<div class="fondo_plomo">
									<!--<img src="assets/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">-->
								</div>
								<p class="p_precio_peque mt-3">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
			        <div class="accordion-wrap mb-1">
		              <div class="accordion-item">
		              	<div class="recta_plomo">
		              		<div class="circulo_rosado"></div>
		              	</div>
		                <p class="accordion-header mb-0 ml-4">Producto numero 2</p>
		              </div>
		              <div class="accordion-text">
		                <div class="card">
							<div class="card-body text-center">
								<div class="fondo_plomo">
									<!--<img src="assets/img/f7e91bd3e373591308c5730080b98e8d.png" class="img_producto_todos">-->
								</div>
								<p class="p_precio_peque mt-3">S/. 120.00</p>
							</div>
						</div>
		              </div>
			        </div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-9 pr-0 pl-0 pl-sm-3 pl-lg-4">
					<div class="div_cabezera">
						<div class="img_fondo_rojo cabezera_grande1"></div>
						<div class="fondo_plomo_cabezera cabezera_grande2">
							<p class="p_titulo_cabezera">TURISMO</p>
						</div>
					</div>
					<div class="row m-0 animatedParent" data-sequence='100'>
						<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='1'>
							<div class="card position-relative card_border_radius">
								<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto">
									<img src="/assets-web/img/18684e31ac3146d6eb63a82f983ebed8.png" class="img_producto_todos border_radius_left">
								</div>
								<div class="card-body text-center padding_left_rig_genreal_grande pt-0">
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
						<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='2'>
							<div class="card position-relative card_border_radius">
								<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto">
									<img src="/assets-web/img/56e3bc93c9510f73880cafcfd6f4439b.png" class="img_producto_todos border_radius_left">
								</div>
								<div class="card-body text-center padding_left_rig_genreal_grande pt-0">
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
						<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='3'>
							<div class="card position-relative card_border_radius">
								<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto">
									<img src="/assets-web/img/54e746ca651624a0787bfbbec353490d.png" class="img_producto_todos border_radius_left">
								</div>
								<div class="card-body text-center padding_left_rig_genreal_grande pt-0">
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
						<div class="col-sm-6 col-lg-4 col-xl-3 px-1 animated fadeInUp" data-id='4'>
							<div class="card position-relative card_border_radius">
								<div class="div_img_azul">
										<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto">
									<img src="/assets-web/img/49cde903276cce88af1f1c6b1005fbe6.png" class="img_producto_todos border_radius_left">
								</div>
								<div class="card-body text-center padding_left_rig_genreal_grande pt-0">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="my-4">
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-sm-6 pl-0 pl-0 pr-0 pr-sm-2 pr-lg-3 mb-3 mb-0">
					<div class="banner_sociales">
						<img src="/assets-web/img/Grupo56.png" class="img_producto_todos">
					</div>
				</div>
				<div class="col-sm-6 pr-0 pl-0 pl-sm-2 pl-lg-3">
					<div class="banner_sociales">
						<img src="/assets-web/img/Grupo163.png" class="img_producto_todos">
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
							<p class="p_titulo_cabezera">MAQUINARIA</p>
						</div>
					</div>
					<div class="div_card_5 animatedParent" data-sequence='100'>
						<div class="px-1 card_5 animated fadeInLeft" data-id='1'>
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
									<div class="row m-0 justify-content-center hover_animation">
										<div class="col-8 col-sm-5 col-md-7 col-lg-8 col-xl-7 px-0 position-relative d-flex col_animacion " >
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
						<div class="px-1 card_5 animated fadeInLeft" data-id='2'>
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
									<div class="row m-0 justify-content-center hover_animation">
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
						<div class="px-1 card_5 animated fadeInLeft" data-id='3'>
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
									<div class="row m-0 justify-content-center hover_animation">
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
						<div class="px-1 card_5 animated fadeInLeft" data-id='4'>
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
									<div class="row m-0 justify-content-center hover_animation">
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
						<div class="px-1 card_5 animated fadeInLeft" data-id='5'>
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
									<div class="row m-0 justify-content-center hover_animation">
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
	<section>
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 px-0 mb-4">
					<div class="div_cabezera">
						<div class="img_fondo_rojo cabezera_grande1 cabezera_grande_completo1"></div>
						<div class="fondo_plomo_cabezera cabezera_grande2 cabezera_grande_completo2">
							<p class="p_titulo_cabezera">LOS MAS VENDIDOS</p>
						</div>
					</div>
					<div class="div_btn_10">
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
						<button class="btn_igual_10">
							<div class="cuadro_plomo_10"></div>
							<p class="p_categorias_10">Categoria xyz</p>
						</button>
					</div>
				</div>
				<div class="col-12 px-0" >
					<div class="div_card_5 animatedParent" data-sequence='100'>
						<div class="card card_5 alturas_giales mb-1 animated fadeInUp" data-id='1'>
						   <img src="/assets-web/img/Grupo15.png" width="100%" height="100%" class="img_celular">
						</div>
						<div class="card_4_4 px-1 animated fadeInUp" data-id='2'>
							<div class="card card_border_radius mt-0">
								<div class="card-body text-center padding_left_rig_genreal_grande">
								<div class="div_img_azul">
									<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto_maquinas overflow-hidden">
									<img src="/assets-web/img/74fd46338a130a651f0caf08ded5b3fa.png" class="img_producto_todos_maquinas img_card_zoom">
								</div>
								<p class="p_descrip line_hei mt-5">Este es un nombre de producto</p>
								<form>
									   <p class="clasificacion mb-0">
									     <input id="radi71" type="radio" name="estrellas" value="5"><!--
									     --><label for="radi71" class="mb-0">★</label><!--
									     --><input id="radi72" type="radio" name="estrellas" value="4"><!--
									     --><label for="radi72" class="mb-0">★</label><!--
									     --><input id="radi73" type="radio" name="estrellas" value="3"><!--
									     --><label for="radi73" class="mb-0">★</label><!--
									     --><input id="radi74" type="radio" name="estrellas" value="2"><!--
									     --><label for="radi74" class="mb-0">★</label><!--
									     --><input id="radi75" type="radio" name="estrellas" value="1"><!--
									     --><label for="radi75" class="mb-0">★</label>
									   </p>
								    </form>
								<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
								<div class="row m-0 justify-content-center hover_animation">
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
						<div class="card_4_4 px-1 animated fadeInUp" data-id='3'>
							<div class="card card_border_radius mt-0">
								<div class="card-body text-center padding_left_rig_genreal_grande">
								<div class="div_img_azul">
									<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto_maquinas overflow-hidden">
									<img src="/assets-web/img/959dcf7fc37bbb4b53e3b59dbbc99e7e.png" class="img_producto_todos_maquinas img_card_zoom">
								</div>
								<p class="p_descrip line_hei mt-5">Este es un nombre de producto</p>
								<form>
									   <p class="clasificacion mb-0">
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
								<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
								<div class="row m-0 justify-content-center hover_animation">
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
						<div class="card_4_4 px-1 animated fadeInUp" data-id='4'>
							<div class="card card_border_radius mt-0">
								<div class="card-body text-center padding_left_rig_genreal_grande">
								<div class="div_img_azul">
									<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto_maquinas overflow-hidden">
									<img src="/assets-web/img/92e98b1ac37af9e9a73e8b26f4dea00b.png" class="img_producto_todos_maquinas img_card_zoom">
								</div>
								<p class="p_descrip line_hei mt-5">Este es un nombre de producto</p>
								<form>
									   <p class="clasificacion mb-0">
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
								<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
								<div class="row m-0 justify-content-center hover_animation">
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
						<div class="card_4_4 px-1 animated fadeInUp" data-id='5'>
							<div class="card card_border_radius mt-0">
								<div class="card-body text-center padding_left_rig_genreal_grande">
								<div class="div_img_azul">
									<p class="dov_azul_p_porcentaje">32%</p>
								</div>
								<div class="div_img_producto_maquinas img_card_zoom">
									<img src="/assets-web/img/794a6216b42bf500f5b8a8726d9b57d5.png" class="img_producto_todos_maquinas img_card_zoom">
								</div>
								<p class="p_descrip line_hei mt-5">Este es un nombre de producto</p>
								<form>
									<p class="clasificacion mb-0">
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
								<p class="mb-0"><span class="p_precio_peque">S/. 120.00</span><span class="p_precio_sub_peque"><s>S/. 180.00</s></span></p>
								<div class="row m-0 justify-content-center hover_animation">
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
	<section class="bajar_top_seccion">
		<div class="container-fluid px-md-3 px-lg-5">
			<div class="row m-0">
				<div class="col-12 text-center px-5">
					<h2 class="h3_500_font"><span class="oblique_500">+500</span> empresas publicando en Bipo</h2>
				</div>
				<div class="col-12 px-0">
					<div class="carousel-home my-5" style="height: 45px;">
	                  <img src="/assets-web/img/becf8fb186caff8e84e40b3c69569ecb.png" class="carousel-cell mr-5" height="100%" alt="carousel10">
	                  <img src="/assets-web/img/16606d7c9bbf60931d1fe9e82dd14894.png" class="carousel-cell mr-5" height="100%" alt="carousel9">
	                  <img src="/assets-web/img/ad04db2cc7ef98c0f17e40333120998c.png" class="carousel-cell mr-5" height="100%" alt="carousel8">
	                  <img src="/assets-web/img/3fd757736cd47969c5b7b0c8ec0c310e.png" class="carousel-cell mr-5" height="100%" alt="carousel7">
	                  <img src="/assets-web/img/29f6d7283188b965798ea5061730f2c8.png" class="carousel-cell mr-5" height="100%" alt="carousel6">
	                  <img src="/assets-web/img/2b05cad4d42a366b93a052df206afcfa.png" class="carousel-cell mr-5" height="100%" alt="carousel5">
	                  <img src="/assets-web/img/dbe16004f55fadcfb57bf1b308a2b992.png" class="carousel-cell mr-5" height="100%" alt="carousel4">
	                  <img src="/assets-web/img/d4b0b0a53d618755ce2c1b2ed83fc94a.png" class="carousel-cell mr-5" height="100%" alt="carousel5">
	                  <img src="/assets-web/img/995db475f0f919e16c5f5ae38a99faff.png" class="carousel-cell mr-5" height="100%" alt="carousel5">
	               </div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
<script>
</script>
<script>
	$(document).ready(function() {
	 if (window.screen.width <= 767) {
		        $('.btn_categorias').click(function(){
			 		$('.celular').css({'display': 'block'});
				});
				$('.close_categoria').click(function(){
			 		$('.celular').css({'display': 'none'});
				});
		    }
		    if (window.screen.width >= 768) {
		    	$('.btn_categorias').click(function(){
			 		$('.div_categorias').css({'display': 'block'});
				});
				$('.btn_close_categorias').click(function(){
			 		$('.div_categorias').css({'display': 'none'});
				});
		    }
	});
</script>
@endsection