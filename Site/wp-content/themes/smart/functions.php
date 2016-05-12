<?php 
	add_action("wp_enqueue_scripts", "incrustar_estilos", 11);
function incrustar_estilos(){
    // nos aseguramos que no estamos en el area de administracion
    if( !is_admin() ){

        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuentre la funcion wp_footer
        wp_register_script('bootstrap.min', get_bloginfo('template_directory'). '/js/bootstrap.min.js', array('jquery'), '1', true );
        wp_enqueue_script('bootstrap.min');
         wp_register_script('jquery-1.12.0.min', get_bloginfo('template_directory'). '/js/jquery-1.12.0.min.js', array('jquery'), '1', true );
        wp_enqueue_script('jquery-1.12.0.min');
         wp_register_script('google.js', get_bloginfo('template_directory'). '/js/google.js', array('jquery'), '1', true );
        wp_enqueue_script('google');
    }
}
 ?>