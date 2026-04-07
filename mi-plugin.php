<?php
/*
Plugin Name: Mi Plugin
Description: Breve descripción.
Version: 1.0
Author: Tu Nombre
*/

// Código de ejemplo: añade una entrada en el pie de página
add_action('wp_footer', function(){
    echo '<!-- Mi Plugin activo -->';
});
