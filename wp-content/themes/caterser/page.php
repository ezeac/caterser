<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>


<div class="central">

<section class="landing seccion w3-col s12"></section>


<!-- MOSTRAR LISTADO DE ENTRADAS -->
<section class="seccion entradas">
	<?php if(have_posts()) : while (have_posts()) : the_post();?>
		<article>
			<div><?php the_content(); ?></div>
		</article>
	<?php endwhile; else: ?>
		<h1>
			No se encontraron artículos
		</h1>
	<?php endif; ?>
</section>




</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>