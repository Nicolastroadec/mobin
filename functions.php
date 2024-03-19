<?php
require_once get_template_directory() . '/functions/enqueue-style.php';

require_once get_template_directory() . '/functions/register-blocks.php';

require_once get_template_directory() . '/functions/add-page-options.php';

require_once get_template_directory() . '/functions/role-editor.php';

require_once get_template_directory() . '/functions/custom-class-menu.php';

require_once get_template_directory() . '/functions/add-menu-support-and-register-menus.php';


function registerMapScript()
{
    $map_script_timestamp = filemtime(get_template_directory() . '/js/main.js');
    wp_enqueue_script('mobin-map-script', get_template_directory_uri() . '/js/map.js', array('jquery'), $map_script_timestamp, true);
}

add_action('wp_enqueue_scripts', 'registerMapScript');



function registerMainScript()
{
    $main_js_timestamp = filemtime(get_template_directory() . '/js/main.js');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'),  $main_js_timestamp, true);
}

add_action('wp_enqueue_scripts', 'registerMainScript');

add_theme_support('post-thumbnails');
