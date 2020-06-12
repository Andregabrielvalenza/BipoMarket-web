$(document).ready(function() {

	$('.linea_rojo1').css({'display': 'block'});
 	$('.id_btn_pro').css({'color': '#E13124'});
 	$('.preoductos').css({'display': 'block'});
 	$('.informacion').css({'display': 'none'});
	 	 	
 	$('.id_btn_pro').click(function(){
	 	$('.linea_rojo1').css({'display': 'block'});
	 	$(this).css({'color': '#E13124'});
	 	$('.linea_rojo2').css({'display': 'none'});	
	 	$('.id_btn_info').css({'color': '#5b5b5b'});
	 	$('.preoductos').css({'display': 'block'});
	 	$('.informacion').css({'display': 'none'});
		});

 	$('.id_btn_info').click(function(){
	 	$('.linea_rojo1').css({'display': 'none'});
	 	$(this).css({'color': '#E13124'});
	 	$('.linea_rojo2').css({'display': 'block'});	
	 	$('.id_btn_pro').css({'color': '#5b5b5b'});
	 	$('.preoductos').css({'display': 'none'});
	 	$('.informacion').css({'display': 'block'});
	});


	var menu = "inicial"
	 $('.btn_menu').click(function(){
	 	if (menu == "inicial") {
	 		$('.icono_menu').addClass("fa-times");
	 		$('.icono_menu').removeClass("fa-bars");
	 		$('.div_menu_celular').slideDown();
				menu="click";
	 	}
	 	else
	 	{
	 		$('.icono_menu').addClass("fa-bars");
	 		$('.icono_menu').removeClass("fa-times");
	 		$('.div_menu_celular').slideUp();
	 		menu="inicial";
	 	}
		});
});

$(document).ready(function() {
	var estado = "inicial"
	 $('.btn_agregar_general').click(function(){
	 	if (estado == "inicial") {
	 		$('.btn_agregar_general').css({'background-color': '#E01F26'});
	 		$('.btn_agregar_general').css({'color': '#fff'});
	 		$('.derecha').css({'transform': 'translate3d(-110%,0,0)'});
				$('.derecha').css({'z-index': '9999'});
				$('.izquierda').css({'transform': 'translate3d(390%,0,0)'});
				$('.izquierda').css({'z-index': '9999'});
				if (window.screen.width == 360 )
				{
					$('.izquierda').css({'transform': 'translate3d(655%,0,0)'});
				}
				if (window.screen.width == 411 )
				{
					$('.izquierda').css({'transform': 'translate3d(795%,0,0)'});
				}
				if (window.screen.width == 414 )
				{
					$('.izquierda').css({'transform': 'translate3d(803%,0,0)'});
				}
				if (window.screen.width == 480 )
				{
					$('.izquierda').css({'transform': 'translate3d(980%,0,0)'});
				}
				if (window.screen.width >= 640 )
				{
					$('.izquierda').css({'transform': 'translate3d(366%,0,0)'});
				}
				if (window.screen.width >= 1024 )
				{
					$('.izquierda').css({'transform': 'translate3d(386%,0,0)'});
				}
				if (window.screen.width >= 1200 )
				{
					$('.izquierda').css({'transform': 'translate3d(355%,0,0)'});
				}
				if (window.screen.width >= 1300 )
				{
					$('.izquierda').css({'transform': 'translate3d(400%,0,0)'});
				}
				estado="click";
	 	}
	 	else
	 	{
	 		$('.derecha').css({'transform': 'translate3d(-99%,0,0)'});
				$('.derecha').css({'z-index': '-1'});
				$('.izquierda').css({'transform': 'translate3d(400%,0,0)'});
				$('.izquierda').css({'z-index': '-1'});
				$('.btn_agregar_general').css({'background-color': '#fff'});
	 		$('.btn_agregar_general').css({'color': '#444444'});
	 		if (window.screen.width == 360 )
				{
					$('.izquierda').css({'transform': 'translate3d(635%,0,0)'});
				}
				if (window.screen.width == 411 )
				{
					$('.izquierda').css({'transform': 'translate3d(775%,0,0)'});
				}
				if (window.screen.width == 414 )
				{
					$('.izquierda').css({'transform': 'translate3d(793%,0,0)'});
				}
				if (window.screen.width == 480 )
				{
					$('.izquierda').css({'transform': 'translate3d(960%,0,0)'});
				}
				if (window.screen.width >= 640 )
				{
					$('.izquierda').css({'transform': 'translate3d(346%,0,0)'});
				}
				if (window.screen.width >= 1024 )
				{
					$('.izquierda').css({'transform': 'translate3d(346%,0,0)'});
				}
	 		estado="inicial";
	 	}
	});

	var corazon = "rojo"
	$('.derecha').click(function(){
	 	if (corazon == "rojo") {
	 		$('.corazon').addClass("color_rojo_icon");
	 		$('.corazon').addClass("fas");
	 		$('.corazon').removeClass("color_plomo_icon");
	 		$('.corazon').removeClass("far");
				corazon="click";
	 	}
	 	else
	 	{
	 		$('.corazon').addClass("color_plomo_icon");
	 		$('.corazon').addClass("far");
	 		$('.corazon').removeClass("color_rojo_icon");
	 		$('.corazon').removeClass("fas");
	 		corazon="rojo";
	 	}
		});
		var balance = "rojo"
	$('.izquierda').click(function(){
	 	if (balance == "rojo") {
	 		$('.balnace').addClass("color_rojo_icon");
	 		$('.balnace').removeClass("color_plomo_icon");
				balance="click";
	 	}
	 	else
	 	{
	 		$('.balnace').addClass("color_plomo_icon");
	 		$('.balnace').removeClass("color_rojo_icon");
	 		balance="rojo";
	 	}
	});

 		 
});

/* acordion*/
$(".accordion-wrap").on("click", function(){   
    $(this).children().eq(1).slideToggle(300);  
    $(this).children().eq(0).toggleClass("accordion-no-bar");
    $(this).siblings().find(".accordion-header i").removeClass("rotate-fa");
    $(this).find(".fa").toggleClass("rotate-fa");

    $(".accordion-wrap .accordion-text").not($(this).children().eq(1)).slideUp(300);
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

$('.list').click(function(){
	$('.lista_productos').css({'display': 'block'});
	$('.cuadrado_productos').css({'display': 'none'});		
});
$('.cuadrado').click(function(){
	$('.lista_productos').css({'display': 'none'});
	$('.cuadrado_productos').css({'display': 'block'});		
});

var corazonlist = "rojo"
$('.cora_list').click(function(){
 	if (corazonlist == "rojo") {
 		$('.corazon_list').addClass("color_rojo_icon");
 		$('.corazon_list').addClass("fas");
 		$('.corazon_list').removeClass("icono_corazon_balance_list");
 		$('.corazon_list').removeClass("far");
			corazonlist="click";
 	}
 	else
 	{
 		$('.corazon_list').addClass("icono_corazon_balance_list");
 		$('.corazon_list').addClass("far");
 		$('.corazon_list').removeClass("color_rojo_icon");
 		$('.corazon_list').removeClass("fas");
 		corazonlist="rojo";
 	}
});
var balnacelist = "rojo"
$('.btn_balance_list').click(function(){
 	if (balnacelist == "rojo") {
 		$('.balance_list').addClass("color_rojo_icon");
 		$('.balance_list').removeClass("icono_corazon_balance_list");
			balnacelist="click";
 	}
 	else
 	{
 		$('.balance_list').addClass("icono_corazon_balance_list");
 		$('.balance_list').removeClass("color_rojo_icon");
 		balnacelist="rojo";
 	}
});

$(document).ready(function() {
	$(".set > a").on("click", function() {
	 if ($(this).hasClass('active')) {
	   $(this).removeClass("active");
	   $(this).siblings('.content').slideUp(200);
	   $(".set > a i").removeClass("fa-angle-down").addClass("fa-angle-right");
	 } else {
	   $(".set > a i").removeClass("fa-angle-down").addClass("fa-angle-right");
	   $(this).find("i").removeClass("fa-angle-right").addClass("fa-angle-down");
	   $(".set > a").removeClass("active");
	   $(this).addClass("active");
	   $('.content').slideUp(200);
	   $(this).siblings('.content').slideDown(200);
	 }

	});
});

var estado = "inicial"
$('.btn_compartir').click(function(){
	if (estado == "inicial") {
		$('.btn_compartir').addClass("color_rojo_compar");
		$('.btn_compartir').removeClass("color_plomo_compar");
		$('.div_resdes_sociales').css({'transform': 'translate3D(20%,0,0)'});
		$('.div_resdes_sociales').css({'display': 'flex'});
		$('.p_ocultar').css({'display': 'none'});
		estado="click";
	}
	else
	{
		$('.btn_compartir').addClass("color_plomo_compar");
		$('.btn_compartir').removeClass("color_rojo_compar");
		$('.div_resdes_sociales').css({'display': 'none'});
		$('.div_resdes_sociales').css({'transform': 'translate3D(0,0,0)'});
		$('.p_ocultar').css({'display': 'block'});
		estado="inicial";
	}
});


var corazon = "inicial"
$('.btn_cambio').click(function(){
	if (corazon == "inicial") {
		$('.cambio_icon').addClass("fas");
		$('.cambio_icon').removeClass("far");
		$('.cambio_icon').css({'color': '#E13124'});
		corazon="click";
	}
	else
	{
		$('.cambio_icon').addClass("far");
		$('.cambio_icon').removeClass("fas");
		$('.cambio_icon').css({'color': '#ADADAD'});
		corazon="inicial";
	}
});

var balance = "inicial"
$('.btn_cambio_balance').click(function(){
	if (balance == "inicial") {
		$('.balance_cmbio').css({'color': '#E13124'});
		balance="click";
	}
	else
	{
		$('.balance_cmbio').css({'color': '#ADADAD'});
		balance="inicial";
	}
});
