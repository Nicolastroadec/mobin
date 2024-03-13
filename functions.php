<?php
require_once get_template_directory() . '/functions/enqueue-style.php';

require_once get_template_directory() . '/functions/register-blocks.php';

require_once get_template_directory() . '/functions/add-page-options.php';

require_once get_template_directory() . '/functions/role-editor.php';

require_once get_template_directory() . '/functions/custom-class-menu.php';

wp_enqueue_script('mobin-script', get_template_directory_uri() . '/js/map.js', array('jquery'), '1.0.0', true);
// Ajouter la prise en charge des menus personnalisés
function theme_support_menu()
{
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_support_menu');





function register_custom_menus()
{
    register_nav_menus(array(
        'primary_menu' => esc_html__('Primary Menu', 'textdomain'), // Menu principal
        'footer_menu'  => esc_html__('Footer Menu', 'textdomain')   // Menu du pied de page
    ));
}
add_action('init', 'register_custom_menus');
