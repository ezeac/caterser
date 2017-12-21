<?php


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



register_sidebar(array('name'=>'Sidebar1', 'before_widget'=>'<section class="sidebarWidget">', 'after_widget'=>'</section>', 'before_title'=>'<h3>', 'after_title'=>'</h3>'));




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



?>