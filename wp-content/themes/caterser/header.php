<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--ICONOS GOOGLE-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- SCROLLMAGIC -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="imagenLogo">
			<img style="width: 100%" src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo.png" alt="">
		</div>
		<div class="loginHome">
			<div class="contLogin">
				<div class="tituloLogin regular t16">Iniciar Sesión</div>
				<?php
				$args = array(
					'echo'           => true,
					'remember'       => false,
					'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
					'form_id'        => 'loginform',
					'id_username'    => 'user_login',
					'id_password'    => 'user_pass',
					'id_remember'    => 'rememberme',
					'id_submit'      => 'wp-submit',
					'class_submit'      => 'inputRojo',
					'label_username' => __( '' ),
					'placeholder_username' => __( 'Usuario' ),
					'label_password' => __( '' ),
					'label_remember' => __( '' ),
					'label_log_in'   => __( 'Ingresar' ),
					'value_username' => '',
					'value_remember' => false
				);
				wp_login_form( $args );
				// echo "<pre>";
				// print_r(wp_get_current_user());
				// echo "</pre>";
				?>
				<script>
					$(document).ready(function(){
						$(".login-username input,.login-password input").addClass("regular");
						$(".login-username input,.login-password input").addClass("t11");
						$(".login-username input").attr("placeholder", "Nombre de usuario");
						$(".login-password input").attr("placeholder", "Contraseña");
					})
				</script>
				<div class="lostPass">
					<a href="./my-account/lost-password/">Olvidé mi contraseña</a>
				</div>
			</div>
		</div>
		<?php
		if ( storefront_is_woocommerce_activated() ) {
			if ( is_cart() ) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
		?>
		<div class="itemRight botonRojo">
			<a href="/my-account">MI CUENTA</a>
		</div>
		<ul id="site-header-cart" class="itemRight site-header-cart menu">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php storefront_cart_link2(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
		<?php
		} 
		?>
		<div class="col-full">
		
			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
