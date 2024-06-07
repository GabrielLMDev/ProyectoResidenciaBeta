window.addEventListener('DOMContentLoaded', () => {
    var fechaActual = new Date();
    var dia = fechaActual.getDate();
    var mes = fechaActual.getMonth() + 1;
    var anio = fechaActual.getFullYear();
    var hora = fechaActual.getHours();
    var minuto = fechaActual.getMinutes();
    var segundo = fechaActual.getSeconds();

    var fechaYHoraActual = dia + '/' + mes + '/' + anio + ' ' + hora + ':' + minuto +
        ':' + segundo;
    var fecha = document.getElementById("fecha");
    fecha.innerHTML = 'Consulta realizada: ' + fechaYHoraActual;
    getDatos(id = localStorage.getItem("user_id"));
});
var id_especialidad;
function getDatos(id) {
    let formData = new FormData();
    formData.append('n_control', id);
    fetch('assets/php/getDatos.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data != null) {
                var nombre_perfil = document.getElementById("perfil_name");
                var id = document.getElementById("perfil_id");
                var grupo = document.getElementById("grupo");
                var turno = document.getElementById("turno");
                var generacion = document.getElementById("generacion");
                nombre_perfil.innerHTML = data["nombre"] + "\n" + data["a_p"] + "\n" + data["a_m"];
                id.innerHTML = data["n_control"];
                id_especialidad = data["id_especialidad"];
                var semestre = data["semestre"];
                getSemestre(id_especialidad, semestre);
                grupo.innerHTML = 'Grupo: ' + data["grupo"];
                turno.innerHTML = 'Turno: ' + data["turno"];
                generacion.innerHTML = 'Generacion: ' + data["generacion"];
            }
        });
}
function getSemestre(especialidad, semestre) {
    let formData = new FormData();
    formData.append('id', especialidad);
    formData.append('semestre', semestre);
    fetch('assets/php/getEspecialidad.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data != null) {
                var especialidad = document.getElementById("especialidad");
                var datos_semestre = document.getElementById("semestre");
                especialidad.innerHTML = 'Especialidad: ' + data["especialidad"];
                datos_semestre.innerHTML = 'Semestre: ' + data["numero"] + '(' + data["semestre"] + ')';
            }
        });
}