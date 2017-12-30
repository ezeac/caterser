<!-- 
Template Name: Media
 -->
<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>


<div class="central">

<section class="hidden-xs seccion mediaVideosCont videosPC">
	<div class="tituloProveedores regular t26 col-xs-12">Media</div>
	<div class="navButtons">
		<div class="prev" onclick="moverSliderVideos(event, 'prev')"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/prev2.svg" alt=""></div>
		<div class="next" onclick="moverSliderVideos(event, 'next')"><img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/next2.svg" alt=""></div>
	</div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="videosMedia col-xs-12">
		<div class="videoItem videoActive" id="video0"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/w1CipF5A6eQ?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem" id="video1"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/jDze3SvKWMw?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem" id="video2"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/5oeVqq_dOKE?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem" id="video3"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/dIiKPcEsw4o?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem" id="video4"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/j7O9ULENp3k?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
	</div>
</section>
<div id="videoIdActual" data-idvideo=0></div>

</div>

<script>
	function moverSliderVideos(e, flag){
		e.preventDefault();
		var idActual = $("#videoIdActual").data("idvideo");
		var idSiguiente;

		$("#video"+idActual).children().attr('src', $("#video"+idActual).children().attr('src'));
		if (flag == "prev") {
			idSiguiente = idActual-1;
		} else if (flag == "next"){
			idSiguiente = idActual+1
		}
		if (idSiguiente == -1) {
			idSiguiente = $(".videosPC .videoMediaItem").length;
		} else if (idSiguiente == $(".videosPC .videoMediaItem").length) {
			idSiguiente = 0;
		}

		$(".videosPC .videoItem").each(function(){
			$(this).removeClass("videoActive");
		})
		$()
		$("#video"+idSiguiente).addClass("videoActive");

		$("#videoIdActual").data("idvideo",idSiguiente);
		corregirTop();
		console.log(idSiguiente);
	}


	$(".videosPC .videoItem").click(function(e){
		e.preventDefault();
		var idClick = $(this).attr("id");
		var idActual = $("#videoIdActual").data("idvideo");
		$("#video"+idActual).children().attr('src', $("#video"+idActual).children().attr('src'));
		$(".videosPC .videoItem").each(function(){
			$(this).removeClass("videoActive");
		})
		$()
		$("#"+idClick).addClass("videoActive");
		$("#videoIdActual").data("idvideo",parseInt(idClick.substr(5)));
		corregirTop();
	})

	$(".videosMedia").scroll(function(){corregirTop()});

	function corregirTop() {
		$(".videosPC .videoItem.videoActive iframe").css({"top":$(".videosMedia").scrollTop()});
	}
</script>


<section class=" visible-xs seccion mediaVideosCont">
	<div class="tituloProveedores regular t26 col-xs-12">Media</div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="bordeSeparador"></div>
	<div class="videosMedia col-xs-12">
		<div class="videoItem col-xs-12"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/w1CipF5A6eQ?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem col-xs-12"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/jDze3SvKWMw?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem col-xs-12"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/5oeVqq_dOKE?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem col-xs-12"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/dIiKPcEsw4o?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
		<div class="videoItem col-xs-12"><iframe class="videoMediaItem" width="560" height="315" src="https://www.youtube.com/embed/j7O9ULENp3k?modestbranding=1&rel=0&controls=1&showinfo=0&fs=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
	</div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>