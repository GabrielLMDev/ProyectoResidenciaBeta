var admin = localStorage.getItem("admin_id");
if (admin == null) {
    document.location.href = "./login.html";
}
getDatos(admin);

function getDatos(id) {
    let form = new FormData();
    form.append('matricula', id);
    fetch('assets/php/getAdmin.php', {
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