
closeBrevoPopup();

function closeBrevoPopup() {
    let closeBrevoPopup = document.getElementById('close-brevo-popup');
    let brevoPopup = document.getElementById('sib_signup_form_1');

    if (closeBrevoPopup && brevoPopup) {
        closeBrevoPopup.addEventListener('click', function () {
            brevoPopup.style.display = 'none';
        })
    }
}




