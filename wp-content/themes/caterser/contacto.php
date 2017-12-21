<!-- 
Template Name: Contacto
 -->
<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>


<div class="central">


<div class="col-xs-12 col-sm-6 contContacto noPaddingChild">
	<div class="tituloInicialContacto regular t26">Contáctenos</div>
	<div class="cont1Contacto col-xs-12">
		<div class="logoContactoImg pull-left"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/contacto/phone.png" alt=""></div>
		<div class="texto1Contacto pull-left light t20">0351-4731685</div>
	</div>
	<div class="cont1Contacto col-xs-12">
		<div class="logoContactoImg pull-left"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/contacto/tel.png" alt=""></div>
		<div class="texto1Contacto pull-left light t20">0351-5432541</div>
	</div>
	<div class="cont1Contacto col-xs-12">
		<div class="logoContactoImg pull-left"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/contacto/mail.png" alt=""></div>
		<div class="texto1Contacto pull-left light t20">cater-serv-cba@hotmail.com</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 contContacto noPaddingChild">
	<form action="javascript:void(0)" id="formContacto">
		<div class="labelContacto col-xs-12 regular t20">Razón social*</div>
		<div class="inputContacto col-xs-12"><input class="light t19" type="text" placeholder="Ingrese su razón social"></div>

		<div class="labelContacto col-xs-12 regular t20">Teléfono*</div>
		<div class="inputContacto col-xs-12"><input class="light t19" type="text" placeholder="Ingrese su teléfono"></div>

		<div class="labelContacto col-xs-12 regular t20">Mensaje</div>
		<div class="inputContacto col-xs-12"><textarea class="light t19" name="" id="" cols="30" rows="10" placeholder="Escriba su mensaje"></textarea></div>

		<div class="inputSend"><input class="bRed semiBold t15" type="submit" value="ENVIAR"></div>
	</form>
</div>

<div id="modal" style="display: none">PRUEBA</div>

<script>
$("#formContacto").submit(function(e){
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
		url: "<?php echo get_stylesheet_directory_uri() ?>/enviarContacto.php", 
		data: $("#formContacto").serialize(),
	    error: function(xhr){
	        console.log("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
	    },
		success: function(result){
	        var respuesta = result;
	        $("#modal").html(respuesta.message);
	        $("#modal").fadeIn();
	        setTimeout(function(){
	        	$("#modal").fadeOut();
	        },3000);
	    },
	    dataType: "json"
	});
});
</script>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>