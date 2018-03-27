<!-- 
Template Name: Proveedores
 -->
<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>


<div class="central">



<!-- MOSTRAR LISTADO DE ENTRADAS -->
<section class="seccion entradas row" id="proveedoresCont">
	<div class="tituloProveedores regular t26 col-xs-12">Nuestros Proveedores</div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_01.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_02.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_03.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_04.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_05.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_06.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_07.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_08.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_09.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_10.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_11.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_12.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_13.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_14.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_15.jpg"></div>
	<div class="itemProveedores col-xs-6 col-sm-3"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_16.jpg"></div>
</section>




</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".landing").css({"height":screen.availHeight-80});
		if(screen.availHeight+300>$(window).width()) {
			$(".landing").css({"height":screen.availHeight-80,"width":"auto"});
		} else {
			$(".landing").css({"height":"auto","width":$(window).width()});
		}
		$(window).resize(function(){
			$(".landing").css({"height":screen.availHeight-80});
			if(screen.availHeight+300>$(window).width()) {
				$(".landing").css({"height":screen.availHeight-80,"width":"auto"});
			} else {
				$(".landing").css({"height":"auto","width":$(window).width()});
			}
		})
	});
</script>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>