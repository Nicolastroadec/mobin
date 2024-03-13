<?php
// Filtrer les éléments du menu du back-office
add_action('admin_menu', 'restrict_admin_menu');
function restrict_admin_menu()
{
    global $menu;
    $user = wp_get_current_user();
    $user_roles = $user->roles;

    // Si l'utilisateur a le rôle "Contributeur Bretagne"
    if (in_array('bretagne', $user_roles)) {
        remove_menu_page('edit.php'); // Retirer le menu "Articles"
        remove_menu_page('upload.php'); // Retirer le menu "Médias"
        remove_menu_page('edit.php?post_type=articles-occitanie'); // Retirer le CPT "article-occitanie"
      
        $taxonomies = get_taxonomies(array('public' => true), 'objects');
        foreach ($taxonomies as $taxonomy) {
            remove_meta_box($taxonomy->name . 'div', 'page', 'side');
        }
    }
}
add_action('pre_get_posts', 'filter_pages_for_bretagne');


function filter_pages_for_bretagne($query)
{
    // Vérifier si nous sommes sur la page d'édition des pages dans le back-office
    if (is_admin() && $query->is_main_query() && $query->get('post_type') == 'page') {
        $user = wp_get_current_user();
        $user_roles = $user->roles;

        // Vérifier si l'utilisateur a le rôle "bretagne"
        if (in_array('bretagne', $user_roles)) {
            // Modifier la requête pour inclure uniquement les pages avec la taxonomie "bretagne"
            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'region', // Remplacez par le slug de votre taxonomie
                    'field' => 'slug',
                    'terms' => 'bretagne' // Remplacez par le slug de votre terme de taxonomie "bretagne"
                )
            ));
        }
    }
}
add_action('pre_get_posts', 'filter_pages_for_bretagne');
