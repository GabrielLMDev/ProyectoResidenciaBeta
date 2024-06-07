const contador_mesaje = document.getElementById('cont_mensaje');
const padre = document.getElementById("container-mensaje");
window.addEventListener('DOMContentLoaded', () => {
    count_Mensajes();
    getMensajes();
});

function count_Mensajes() {
    var n_control = localStorage.getItem("user_id");
    let formData = new FormData();
    formData.append('n_control', n_control);
    fetch('assets/php/mensajes.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data != null) {
                if (data['n_control'] > 0) {
                    contador_mesaje.innerHTML = data['n_control'];
                } else {
                    const hijo = document.createElement("div");
                    contador_mesaje.innerHTML = data['n_control'];
                    hijo.innerHTML = '<a class="dropdown-item d-flex align-items-center" href="#">' +
                        '<div class="mr-3">' +
                        '<div class="icon-circle bg-primary">' +
                        '<i class="fas fa-envelope text-white">' +
                        '</i>' +
                        '</div>' +
                        '</div>' +
                        '<div>' +
                        '<div class="small text-gray-500">' +
                        '</div>' +
                        '<span class="font-weight-bold">' + 'SIN MENSAJES' +
                        '</span>' +
                        '<div class="small text-gray-500">' +
                        '</div>' +
                        '</div>' +
                        '</a>';
                    padre.appendChild(hijo);
                }
            }
        })
}
function getMensajes() {
    var n_control = localStorage.getItem("user_id");
    let formData = new FormData();
    formData.append('n_control', n_control);
    fetch('assets/php/getMensajes.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data != null) {
                for (var i = 0; i < data.length; i++) {
                    const hijo = document.createElement("div");
                    hijo.innerHTML = '<a class="dropdown-item d-flex align-items-center" href="#">' +
                        '<div class="mr-3">' +
                        '<div class="icon-circle bg-primary">' +
                        '<i class="fas fa-envelope text-white">' +
                        '</i>' +
                        '</div>' +
                        '</div>' +
                        '<div>' +
                        '<div class="small text-gray-500">' + data[i]["remitente"] +
                        '</div>' +
                        '<span class="font-weight-bold">' + data[i]["cuerpo"] +
                        '</span>' +
                        '<div class="small text-gray-500">' + data[i]["fecha"] +
                        '</div>' +
                        '</div>' +
                        '</a>';
                    padre.appendChild(hijo);
                }
            } else {
                const hijo = document.createElement("div");
                hijo.innerHTML = '<a class="dropdown-item d-flex align-items-center" href="#">' +
                    '<div class="mr-3">' +
                    '<div class="icon-circle bg-primary">' +
                    '<i class="fas fa-envelope text-white">' +
                    '</i>' +
                    '</div>' +
                    '</div>' +
                    '<div>' +
                    '<div class="small text-gray-500">' +
                    '</div>' +
                    '<span class="font-weight-bold">' + 'SIN MENSAJES' +
                    '</span>' +
                    '<div class="small text-gray-500">' +
                    '</div>' +
                    '</div>' +
                    '</a>';
                padre.appendChild(hijo);
            }

        })
}
