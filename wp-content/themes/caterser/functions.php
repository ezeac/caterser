<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

//Modificar branding + nav + cart
function storefront_site_branding() {
	

}
function storefront_cart_link2() {
	?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
			<span class="count"><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
		</a>
		<span class="itemHeaderOk">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/svg/cart.svg" alt="">
			<div class="count-items-header-cart"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></div>
		</span>

	<?php
}


//Modificar nav
function storefront_product_search() {
}
function storefront_primary_navigation() {
	?>
	<nav id="site-navigation" class="menuPrincipal main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
		<div class="itemHeader site-search">
			<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
		</div>
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
			<span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location'	=> 'primary',
				'container_class'	=> 'primary-navigation',
				)
		);

		wp_nav_menu(
			array(
				'theme_location'	=> 'handheld',
				'container_class'	=> 'handheld-navigation',
				)
		);
		?>
	</nav>
	<!-- #site-navigation -->
	<?php
}

//Modificar cart menu
function storefront_header_cart() {
	//el cart se muestra con el branding logo
}


//ocultar sidebar
add_action('wp_head', 'hide_sidebar' );
function hide_sidebar(){
	if(!is_shop() && !is_product() && !is_product_category()){
		?>
		<style type="text/css">
		#secondary, .comentarios {
			display: none;
		}
		</style>
		<?php
	} else {
		?>
		<style type="text/css">
		#primary {
			float: right;
		}
		</style>
		<?php
	}
}

function add_query_vars_filter( $vars ){
  $vars[] = "iddelpost";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

//para usar la variable escribir $camp=get_query_var("iddelpost", "0")


register_nav_menus( array(
'menu' => 'Menu superior',
));


add_theme_support('post-thumbnails');
add_image_size('imagenTamaño1', 470, 300, true);
add_image_size('imagenTamaño2', 450, 370, true);



//register_sidebar(array('name'=>'Sidebar', 'before_widget'=>'<section class="sidebarWidget">', 'after_widget'=>'</section>', 'before_title'=>'<h3>', 'after_title'=>'</h3>'));




function echoThemeUrl() {
   return str_replace("\\", "/", substr(getcwd(), strpos(getcwd(),"wordpress")+10));
}

function generar_imagenes_carpeta($ruta){ 
   // crear archivo css a escribir 
   $text = "";
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $ruta$file : Es un: " . filetype($ruta . $file); 
				if (is_dir($ruta . $file) == FALSE && $file!="." && $file!=".."){  
				echo "<a href='$ruta$file' data-lightbox='$ruta' data-title='$file'><img src='$ruta$file' width='300px' height='250px'></a>";
				}
            } 
         } 
      closedir($dh); 
      } 
   
   else 
      echo "<br>No es ruta valida"; 
}


//add content before title of product list
function storefront_before_content() {
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="text-distribución-title regular t35" style="line-height: 35px;">Lugares y días de distribución</div><br>
		<div class="bordeSeparador"></div>
		<div class="bordeSeparador"></div>
		<div class="bordeSeparador"></div><br>
		<div class="text-distribución-text regular t16">
			<b>De lunes a sábado: </b>Córdoba Capital<br>
			<b>Jueves: </b>Córdoba Capital, Villa Carlos Paz, Villa Allende, Salsipuedes, Rio Ceballos<br>
			<b>Viernes: </b>Córdoba Capital, Alta Gracia, Santa Rosa de Calamuchita, Villa General Belgrano
		</div><br><br>
	<?php
}

//función para buscar en la base de datos y cargarlos para la página
//código en comenario para ejecutar esta función
//$result = mysqli_query($db, "SELECT * FROM $post ORDER BY id DESC");
//				while ($fila = mysqli_fetch_array($result)){ 
//				mostrarDatos($fila); 
function mostrarDatos ($resultados) {
					if ($resultados !=NULL) {
					$text .= "<div class='tituloMensajeTelefono'>" .ucfirst($resultados[2]). " " .ucfirst($resultados[3]). "</div>";
					$text .= "<div class='mensajeTelefono'>Email: " .$resultados[4]. "</br>";
					$text .= "Area: " .$resultados[5]. "</br>";
					$text .= "Tel: " .$resultados[8]. "</div>";
					$i ++;
					}
					else {$text .= "<br/>No hay más datos. <br/>";}
					return $text;
}



function wpse_131562_redirect() {
    if (!is_user_logged_in()) {
    	if (is_woocommerce() || is_cart() || is_checkout()) {
	        // feel free to customize the following line to suit your needs
	        wp_redirect(home_url());
	        exit;
	    }
	    echo "<style>.page_item.page-item-4 {display: none;}</style> ";
    }
}
add_action('template_redirect', 'wpse_131562_redirect');