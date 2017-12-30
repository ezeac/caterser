<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full row">
			

			<div class="col-xs-12 contFooter1">
				<div id="titulo1Footer" class="texto1 regular t17">CATERSER</div>
				<div class="titulo2FooterCont">
					<div class="titulo2Footer texto2 regular t13"><a href="">TÉRMINOS Y CONDICIONES</a></div>
					<div class="titulo2Footer texto2 regular t13"><a href="">POLÍTICA DE PRIVACIDAD</a></div>
				</div>
			</div>
			<div class="cont2Footer col-xs-12 row">
				<div class="col-xs-8 hidden-xs">
					<div class="item1Footer">
						<div class="imagenitem1Footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/svg/tel.svg" alt=""></div>
						<div class="texto3 light t12">0351-4731685</div>
					</div>
					<div class="item1Footer">
						<div class="imagenitem1Footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/svg/tel2.svg" alt=""></div>
						<div class="texto3 light t12">0351-5432541</div>
					</div>
					<div class="item1Footer">
						<div class="imagenitem1Footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/svg/mail.svg" alt=""></div>
						<div class="texto3 light t12">cater-serv-cba@hotmail.com</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="firmaFooterCont">
						<div class="item2Footer regular t14">Desarrollado por <a href="http://www.diezweb.com.ar/"><b>DiezWeb</b></a></div>
						<div class="item2Footer regular t14">Todos los derechos reservados</div>
					</div>
				</div>
			</div>



			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>