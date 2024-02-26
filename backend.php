<?php
header("Access-Control-Allow-Origin: https://mobin.nicolastroadec.fr"); // Remplacez par votre domaine
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
