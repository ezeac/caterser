<html>
<title></title>
 <meta name="title" content="">
 <meta name="DC.Title" content="">
 <meta http-equiv="title" content="">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="keywords" content="">
 <meta http-equiv="keywords" content="">
 <meta name="description" content="">
 <meta http-equiv="description" content="">
 <meta http-equiv="DC.Description" content="">
 <meta name="author" content="www.diezweb.com.ar">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="vw96.objectype" content="Document">
 <meta name="resource-type" content="Document">
 <meta http-equiv="Content-Type" content="UTF-8">
 <meta name="distribution" content="all">
 <meta name="robots" content="all">
 <meta name="revisit" content="30 days">
 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!--Para adaptar a móviles (usar google chrome en ventana incógnito y google nexus4 en emulador para editar css. agregar css responsive al final 
@media screen and (min-width:1px) and (max-width:1000px) {
).-->
<link rel="STYLESHEET" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<link rel="STYLESHEET" type="text/css" href="<?php bloginfo('template_url'); ?>/complementos/tipografias.css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrolly.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/lightbox/js/lightbox.min.js"></script>
<link href="<?php bloginfo('template_url'); ?>/js/lightbox/css/lightbox.css" rel="stylesheet" />

<!--ICONOS GOOGLE-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- pack efectos wow -->
<script src="<?php bloginfo('template_url'); ?>/js/wow/dist/wow.min.js"></script>
<script>
new WOW().init();
</script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/wow/css/libs/animate.css">
<!-- fin efectos wow -->


<!-- SCROLLMAGIC -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>

<!-- ------------------------ ANIMACIONES SCROLLMAGIC ------------------------ -->
<script>
$(document).ready(function(){

	//INICIALIZAR CONTROLLER
	var scrollMagicController = new ScrollMagic.Controller();

	$(".fadeOut").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeOut = new TweenMax.fromTo(element, 0.5, {opacity: 1, y: 0}, {opacity: 0, y: 50});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: 300, duration: 400}).setTween(fadeOut).addTo(scrollMagicController);
	})

	$(".fadeInUpOffsetEarly").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50},{y: 0, opacity: 1});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -550, duration: 400}).setTween(fadeInUp).addTo(scrollMagicController).addIndicators();
	})

	var i = 0;
	var offsetAnterior = 0;
	$(".fadeInUpOffsetNormal").each(function(index,element){
		var offset = $(element).offset().top;
		if (offsetAnterior == offset) {
			i += 0.2;
		} else {
			i = 0;
		}
		offsetAnterior = $(element).offset().top;
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50},{y: 0, opacity: 1, delay: i});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -250, duration: 400}).setTween(fadeInUp).addTo(scrollMagicController).addIndicators();
	})

	$(".fadeInUpOffsetLate").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50}, {y:0, opacity: 1});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -50, duration: 400}).setTween(fadeInUp).addTo(scrollMagicController).addIndicators();
	})
});
</script>
<!-- ------------------------ FIN ANIMACIONES SCROLLMAGIC ------------------------ -->


<header class="header">
	<div class='menuInterior'>
		<nav>
			<?php
			wp_nav_menu(array('container'=>false, 'items_wrap'=>'<ul id="menu-top">%3$s</ul>', 'theme_location'=>'menu'));
			?>
		</nav>
	</div>
</header>


</html>