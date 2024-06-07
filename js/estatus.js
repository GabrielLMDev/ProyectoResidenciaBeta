window.addEventListener('DOMContentLoaded', () => {
    getDatos(id = localStorage.getItem("user_id"));
});

function getDatos(id) {
    let formData = new FormData();
    formData.append('n_control', id);
    fetch('assets/php/getEstatus.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data != null) {
                console.log(data);
                const tipo = document.getElementById("tipo");
                const pago = document.getElementById("pago");
                const inscripcion = document.getElementById("inscripcion");
                const control = document.getElementById("control");
                tipo.innerHTML = data["regular"];
                pago.innerHTML = data["pago"];
                inscripcion.innerHTML = data["inscrito"];
                control.innerHTML = data["n_control"];
                if (data["pago"] === "NO PAGADO" || data["pago"] === "PENDIENTE") {
                    const ticket = document.getElementById("ticket");
                    ticket.disabled = false;
                } else {

                }
            }
        });
}