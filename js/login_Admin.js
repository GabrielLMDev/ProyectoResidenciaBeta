window.addEventListener('DOMContentLoaded', () => {
    console.log("actual => loginAdmin.js");
    var valor = localStorage.getItem("admin_id");
    console.log(valor);
    if (valor != null) {
        document.location.href = "./administrador.html";
    }
});

var taskForm = document.getElementById('taskForm');
taskForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var inf_login = new FormData(taskForm);
    console.log(inf_login.get('matricula'));
    const matricula = inf_login.get('matricula');
    console.log(inf_login.get('password'));
    fetch('assets/php/actions_Admin.php', {
        method: 'POST',
        body: inf_login
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data === 'Ok') {
                localStorage.setItem("admin_id", matricula);
                document.location.href = "./administrador.html";
            } else if (data === 'Error 110') {
                alert("ERROR 110\nAcceso bloqueado, acudir a control escolar.");
            } else if (data === 'Error 02') {
                alert("ERROR 02\nContraseña Incorrecta");
            } else if (data === 'Error 03') {
                alert("ERROR 03\nNo pueden haber campos vacios, verifica.");
            } else if (data === 'Error 01') {
                alert("ERROR 01\nUsuario no registrado");
            }
        })
})