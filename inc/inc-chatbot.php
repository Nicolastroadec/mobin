<?php

/**
 * Le faux chatbot en bas à droite du site
 */

get_header();
$image_chatbot = get_field('image_chatbot', 'option');
?>
<div id="chatbot">
    <div class="chatbot-intro" id="screen-0">
        <img src="<?= $image_chatbot['url'] ?? '' ?>">
    </div>

    <div class="screen-chatbot" id="screen-1">
        <p>
            Quelle est votre région ?
        </p>
        <select name="" id="">
            <option value="0"></option>
            <option value="1">Bretagne</option>
            <option value="2">Occitanie</option>
            <option value="3">Aquitaine</option>
        </select>
    </div>

    <div class="screen-chatbot" id="screen-2">
        <p id="choix-1">Contacter un référent en région</p>
        <p id="choix-2">Être recontacté</p>
    </div>

    <div class="screen-chatbot" id="screen-3">
        <input type="text" placeholder="name">
        <input type="email" placeholder="email">
        <input type="textarea" style="height: 200px" placeholder="message">
        <input type="submit">
    </div>

    <div class="screen-chatbot" id="screen-4">
        <input type="text" placeholder="email">
        <input type="submit">
    </div>
</div>

<script>
    console.log('ok')
    const chatbot = document.querySelector('#chatbot');
    const screen0 = document.querySelector('#screen-0');
    const screen1 = document.querySelector('#screen-1');
    const screen2 = document.querySelector('#screen-2');
    const screen3 = document.querySelector('#screen-3');
    const screen4 = document.querySelector('#screen-4');

    const choix1 = document.querySelector('#choix-1');
    const choix2 = document.querySelector('#choix-2');

    // Définir la fonction de rappel dans une variable
    const clickHandler = () => {
        screen0.style.display = 'none';
        screen1.style.display = 'flex';
    };

    // Ajouter l'écouteur d'événements avec la fonction de rappel
    chatbot.addEventListener('click', clickHandler);

    // Supprimer l'écouteur d'événements après qu'il a été déclenché une fois
    chatbot.addEventListener('click', () => {
        chatbot.removeEventListener('click', clickHandler);
    });


    const select = screen1.querySelector('select');
    select.addEventListener('change', () => {

        screen1.style.display = 'none';
        screen2.style.display = 'flex';
    })

    choix1.addEventListener('click', () => {

        screen1.style.display = 'none';
        screen2.style.display = 'none';
        screen3.style.display = 'flex';
    })

    choix2.addEventListener('click', () => {

        screen1.style.display = 'none';
        screen2.style.display = 'none';
        screen4.style.display = 'flex';
    })
</script>