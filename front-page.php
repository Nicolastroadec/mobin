<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mobin-solution
 */

get_header();
?>
<main id="primary" class="site-main">
</main><!-- #main -->
<?php
// get_sidebar();
get_footer();

?>

<script>
    const apiUrl = "https://mobinfrance.wimi.pro";

    const requestBody = {
        header: {
            target: "auth.user.login",
            identification: {
                account_name: "jvuillaume@mobin-solutions.fr"
            },
            auth: {
                login: "jvuillaume@mobin-solutions.fr",
                password: "jvADMINISTRATEUR2024"
            },
            api_version: "1.2",
            app_token: "46AF4751-C3CE-E958-CF8C-FE1524DE6C8F",
            msg_key: "a key that can be used to map the response with the request in async mode"
        },
        body: {
            data: null
        }
    };

    // Effectuer la requête fetch
    fetch(`${apiUrl}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(requestBody),
        })
        .then(response => {
            // Gérer les erreurs HTTP
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            // Afficher la réponse dans la console
            console.log("Réponse de l'API :", data);
            // Ajouter ici le code pour traiter la réponse selon vos besoins
        })
        .catch(error => {
            // Gérer les erreurs de la requête
            console.error("Erreur de requête :", error.message);
            // Ajouter ici le code pour traiter les erreurs selon vos besoins
        });
</script>