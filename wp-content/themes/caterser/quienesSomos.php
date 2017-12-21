<!-- 
Template Name: Quienes Somos
 -->
<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>


<div class="central">

<section class="col-xs-12 row">
	<div class="tituloProveedores regular t26 col-xs-12">Quienes Somos</div>
	<div class="imagenQuienesSomos col-xs-12 col-sm-5">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/quienesSomos/quienesSomos.jpg" alt="">
	</div>
	<div class="infoQuienesSomos col-xs-12 col-sm-7">
		<div class="titulo1InfoQuienesSomos semiBold t16">
			MISIÓN
		</div>
		<div class="texto1InfoQuienesSomos light t16">
			Somos empresa familiar  atendiendo al mercado de Córdoba desde el año 1995, enfocados en brindar servicios y soluciones superando la expectativas de nuestro clientes en el momento de entrega de los productos lideres del mercado.
		</div>

		<div class="titulo1InfoQuienesSomos semiBold t16">
			VISIÓN
		</div>
		<div class="texto1InfoQuienesSomos light t16">
			Ser una empresa líder en crecimiento y sustentable, implementando la mejora continua en todos nuestro procesos, con un equipo de persona orgullosas de pertenecer de la misma.
		</div>

		<div class="titulo1InfoQuienesSomos semiBold t16">
			VALORES
		</div>
		<div class="texto1InfoQuienesSomos light t16">
			› Conducta ética: Integridad, honestidad, compromiso y responsabilidad.<br>
			› Satisfacción de nuestro clientes.<br>
			› Trabajo en equipo.
		</div>
	</div>
</section>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>