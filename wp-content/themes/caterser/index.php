<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>

<div class="central">
<script>
	$(document).ready(function(){
		$(".menu a").addClass("medium t11")
	})
</script>
<section id="home1" class="col-xs-12 row">
	<div class="sliderHome">
		<div id="sliderHome" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#sliderHome" data-slide-to="0" class="active"></li>
				<li data-target="#sliderHome" data-slide-to="1"></li>
				<li data-target="#sliderHome" data-slide-to="2"></li>
				<li data-target="#sliderHome" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/imagenes/home/slider/Slider0.jpg')"></div>
				</div>

				<div class="item">
					<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/imagenes/home/slider/Slider1.jpg')"></div>
				</div>

				<div class="item">
					<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/imagenes/home/slider/Slider2.jpg')"></div>
				</div>

				<div class="item">
					<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/imagenes/home/slider/Slider3.jpg')"></div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#sliderHome" data-slide="prev">
				<span class="iconNavigationSlider sliderPrev"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/prev.svg" alt=""></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#sliderHome" data-slide="next">
				<span class="iconNavigationSlider sliderNext"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/next.svg" alt=""></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
</section>


<section id="home2" class="col-xs-12 row">
	<div class="titulo1 regular t26" id="tituloHome2">
		Productos Destacados
	</div>
<!-- 	<div class="navButton">
		<div class="destacadosPrev prev" style="cursor: pointer" onClick="moverSliderDestacados(event)"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/next2.svg" alt=""></div>
		<div class="destacadosNext next" style="cursor: pointer" onClick="moverSliderDestacados(event)"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/prev2.svg" alt=""></div>
	</div> -->
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="listadoProductos" id="productosDestacados">
		<?php echo do_shortcode("[featured_products per_page='9999' columns='5' orderby='date' order='ASC']"); ?>
		<div id="destacadosItemActual" data-to=0></div>
	</div>
	<script>
			var destacadosSlides = [{margin: 0}];
			//incializarSliderDestacados();
			function incializarSliderDestacados() {
				var totalItems = $("#productosDestacados > .woocommerce > .products > li").length;
				var itemPorPantalla = 5;
				if ($(window).width() < 768) {
					itemPorPantalla = 2;
				}
				var widthCoeficiente = totalItems / itemPorPantalla;
				var widthActual = $("#productosDestacados > .woocommerce > .products").outerWidth();
				$("#productosDestacados > .woocommerce > .products").width(widthActual * widthCoeficiente);
				$("#productosDestacados > .woocommerce > .products > li").each(function(index, element){
					$(element).outerWidth((widthActual / itemPorPantalla)-10);
				});
		
				destacadosSlides = [];
				for (var i = 0; i < widthCoeficiente; ++i) {
					if (i+1 > widthCoeficiente) {
						destacadosSlides.push({margin: -(widthCoeficiente-1)*widthActual});
					} else {
						destacadosSlides.push({margin: -i*widthActual});
					}
				}
			}
		
			function moverSliderDestacados(e) {
				e.preventDefault();
				posicion = $("#destacadosItemActual").data("to");
				if ($(e.srcElement).parent().hasClass("destacadosNext")){
					posicion--;
				} else {
					posicion++;
				}
				if (posicion == -1) {
					posicion = destacadosSlides.length-1;
				} else if (posicion == destacadosSlides.length) {
					posicion = 0;
				}
				new TweenMax.to($("#productosDestacados > .woocommerce > .products"), 2, {marginLeft: destacadosSlides[posicion].margin, ease: Power2.easeOut});
				$("#destacadosItemActual").data("to", posicion);
			}
		</script>
</section>

<section id="home3" class="col-xs-12 row">
	<div class="titulo1 regular t26" id="tituloHome3">
		Nuestros Proveedores
	</div>
	<div class="navButton">
		<div class="proveedoresPrev prev" style="cursor: pointer" onClick="moverSlider(event)"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/next2.svg" alt=""></div>
		<div class="proveedoresNext next" style="cursor: pointer" onClick="moverSlider(event)"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/prev2.svg" alt=""></div>
	</div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="listadoProductos" id="nuestrosProveedores">
		<!-- HTML -->
		<div class="slider" id="proveedores">
			<div class="proveedoresMarco col-xs-12" style="overflow: hidden">
				<div class="proveedoresContainer">
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_01.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_02.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_03.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_04.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_05.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_06.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_07.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_08.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_09.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_10.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_11.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_12.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_13.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_14.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_15.jpg"></a></div>
					<div class="proveedoresItem pull-left"><a href="/proveedores"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/home/sliderProveedores/slideProveedores_16.jpg"></a></div>
				</div>
			</div>
			<div id="proveedoresItemActual" data-to=0></div>
		</div>
		<!-- FIN HTML -->
		<script>
			var proveedoresSlides = [{margin: 0}];
			incializarSliderproveedores();
			function incializarSliderproveedores() {
				var totalItems = $("#proveedores .proveedoresItem").length;
				var itemPorPantalla = 5;
				if ($(window).width() < 768) {
					itemPorPantalla = 2;
				}
				var widthCoeficiente = totalItems / itemPorPantalla;
				var widthActual = $("#proveedores .proveedoresContainer").outerWidth();
				$("#proveedores .proveedoresContainer").width(widthActual * widthCoeficiente);
				$("#proveedores .proveedoresItem").each(function(index, element){
					$(element).outerWidth(widthActual / itemPorPantalla);
				});
		
				proveedoresSlides = [];
				for (var i = 0; i < widthCoeficiente; ++i) {
					if (i+1 > widthCoeficiente) {
						proveedoresSlides.push({margin: -(widthCoeficiente-1)*widthActual});
					} else {
						proveedoresSlides.push({margin: -i*widthActual});
					}
				}
			}
		
			function moverSlider(e) {
				e.preventDefault();
				posicion = $("#proveedoresItemActual").data("to");
				if ($(e.srcElement).parent().hasClass("proveedoresNext")){
					posicion--;
				} else {
					posicion++;
				}
				if (posicion == -1) {
					posicion = proveedoresSlides.length-1;
				} else if (posicion == proveedoresSlides.length) {
					posicion = 0;
				}
				new TweenMax.to($("#proveedores .proveedoresContainer"), 2, {marginLeft: proveedoresSlides[posicion].margin, ease: Power2.easeOut});
				$("#proveedoresItemActual").data("to", posicion);
			}
			setInterval(function(){
				$('.proveedoresNext img').click();
			},5000);
		</script>
	</div>
</section>


<!-- para tipo personalizado
	<div class="contendorItemsLotes">
		<?php
		query_posts('post_type=lotes&posts_per_page=99');
		if(have_posts()) : while (have_posts()) : the_post();
		?>
			<a href="<?php echo types_render_field("imagen", array("url"=>true)); ?>" data-lightbox="<?php the_title(); ?>" style="background: url('<?php echo types_render_field("imagen", array("url"=>true)); ?>')"><i class="material-icons">search</i></a>
			<div class="tituloLote animacionLote"><h3><?php the_title(); ?></h3></div>
			<div class="textoLote animacionLote"><?php the_content(); ?></div>
			<div class="precioLote animacionLote">VALOR: €<?php echo types_render_field("precio", array("row"=>true)); ?>.</div>
			<div class="tituloLote animacionLote botonNegro linkAFormulario" onclick="$('#campo').val('<?php the_title(); ?>');">CONSULTAR</div>
		<?php $f++; endwhile; else: ?>
			<h1>
				No se encontraron lotes.
			</h1>
		<?php endif; ?>
		<div class="pagination">
			<?php next_posts_link('Post Siguientes') ?>
			<?php previous_posts_link('Post Anteriores') ?>
		</div>
	</div>
fin tipo personalizado -->

<!-- FORM TEMPLATE
<div class="formularioContendor">
	<form id="formularioContenedorForm" type="submit" action="javascript:void(0)">
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Nombre*" name="nombre" id="nombre" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Email*" name="email" id="email" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Tel*" name="tel" id="tel" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><textarea placeholder="Consulta" name="mensaje" id="mensaje"></textarea></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="submit" name="Enviar" value="Enviar"></div>
	</form>
	<div class="contactoMensaje"></div>
</div>


<script>
	$(document).ready(function(){
		$("#formularioContenedorForm").submit(function(e){
			e.stopPropagation();
			var nombre = $("#nombre").val();
				var email = $("#email").val();
				var tel = $("#tel").val();
				var mensaje = $("#mensaje").val();
			if (nombre == ""){
				alert("Debe completar su nombre.");
				$("#nombre").focus();
			} else if (email == ""){
				alert("Debe completar su email.");
				$("#email").focus();
			} else {
				mostrarMensajeSalida(nombre, email, tel, mensaje);
			}

		});




		function mostrarMensajeSalida(nombre, email, tel, mensaje) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								$(".contactoMensaje").html(xmlhttp.responseText);
						}
				};
				xmlhttp.open("GET", "<?php bloginfo("template_url"); ?>/enviarContacto.php?nombre=".concat(nombre, "&email=", email, "&tel=", tel, "&mensaje=", mensaje), true);
				if (nombre != "" && email != ""){
					xmlhttp.send();
					$(".contactoMensaje").fadeIn();
					$("html,body").animate({"scrollTop":$(".contactoMensaje").offset().top-100});
				}
		}													
	});
</script>
FORM TEMPLATE END -->


</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>