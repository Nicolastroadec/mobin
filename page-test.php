<?php /* Template Name: Page Test */



$roles = wp_roles()->roles;

// Parcourir et afficher les noms des rôles
foreach ($roles as $role_key => $role_data) {
    echo $role_key . ': ' . $role_data['name'] . '<br>';
}
