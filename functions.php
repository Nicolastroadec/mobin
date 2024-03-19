<?php
require_once get_template_directory() . '/functions/enqueue-style.php';

require_once get_template_directory() . '/functions/register-blocks.php';

require_once get_template_directory() . '/functions/add-page-options.php';

require_once get_template_directory() . '/functions/role-editor.php';

require_once get_template_directory() . '/functions/custom-class-menu.php';

require_once get_template_directory() . '/functions/add-menu-support-and-register-menus.php';


function registerMapScript()
{
    wp_enqueue_script('mobin-script', get_template_directory_uri() . '/js/map.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'registerMapScript');





add_theme_support('post-thumbnails');
