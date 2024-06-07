var valor = localStorage.getItem("user_id");
if (valor == null) {
    document.location.href = "./login.html";
}
getDatos(valor);

function getDatos(id) {
    let form = new FormData();
    form.append('n_control', id);
    fetch('assets/php/getName.php', {
        method: 'POST',
        body: form
    })
        .then(result => result.json())
        .then(data_nav => {
            if (data_nav != null) {
                var nombre = document.getElementById("name_user");
                nombre.innerHTML = data_nav["nombre"];
            }
        });
}