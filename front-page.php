<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *header("Access-Control-Allow-Origin: https://mobin.nicolastroadec.fr, http://localhost:8888");

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mobin-solution
 */

get_header();
?>
<main id="primary" class="site-main">
</main><!-- #main -->
<?php
header("Access-Control-Allow-Origin: https://mobin.nicolastroadec.fr, http://localhost:8888");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$apiUrl = 'https://api.wimi.pro'; // URL de l'API

// Récupérer les données de la requête POST
$postData = file_get_contents("php://input");
$options = [
    'http' => [
        'header' => "Content-type: application/json\r\n",
        'method' => 'POST',
        'content' => $postData,
    ],
];
$context = stream_context_create($options);
$result = file_get_contents($apiUrl, false, $context);

// Envoyer la réponse au client
echo $result;
?>



<?php
// get_sidebar();
get_footer();

?>

<script>
    const apiUrl = '<?php echo esc_url(get_template_directory_uri()); ?>/backend.php'; // Chemin vers votre script PHP

    const requestBody = {
        "header": {
            "target": "auth.user.login",
            "identification": {
                "account_name": "mobinfrance"
            },
            "auth": {
                "login": "jvuillaume@mobin-solutions.fr",
                "password": ""
            },
            "api_version": "1.2",
            "app_token": "46AF4751-C3CE-E958-CF8C-FE1524DE6C8F",
            "msg_key": "POZA90823YHO"
        },
        "body": {
            "data": null
        }
    };

    // Effectuer la requête fetch
    fetch(`${apiUrl}`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
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
            console.log(data.header.token);
            // Création du cookie en localhost
            document.cookie = `authtoken_mobinfrance=${data.header.token}; path=/; expires=Thu, 01 Jan 2025 00:00:00 GMT; samesite=none`;

            const redirectUrl = 'https://mobinfrance.wimi.pro/#/dashboard'; // URL de redirection après l'authentification
            // Redirection vers le tableau de bord
            //    window.location.href = redirectUrl;

            // Ajouter ici le code pour traiter la réponse selon vos besoins
        })
        .catch(error => {
            // Gérer les erreurs de la requête
            console.error("Erreur de requête :", error.message);
            // Ajouter ici le code pour traiter les erreurs selon vos besoins
        });
</script>