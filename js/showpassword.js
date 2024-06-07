window.addEventListener('DOMContentLoaded', () => {
    console.log("actual => showpassword.js")
})


function ver_password() {
    const password_login = document.getElementById('InputPassword')
    const show = document.getElementById('customCheck')

    if (show.checked) {
        password_login.setAttribute("type", "text");
    }
    else {
        password_login.setAttribute("type", "password");
    }
}

function verpass() {
    const password = document.getElementById('password');
    const ver = document.getElementById('ver')
    const confirm_password = document.getElementById('confirm_password');


    if (ver.checked) {
        password.setAttribute("type", "text");
        confirm_password.setAttribute("type", "text");
    }
    else {
        password.setAttribute("type", "password");
        confirm_password.setAttribute("type", "password");
    }
}