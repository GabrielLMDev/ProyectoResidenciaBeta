let btn_logout = document.getElementById('btn_logout');
btn_logout.addEventListener('click', function (e) {
    e.preventDefault();
    var matricula = localStorage.getItem("admin_id");
    let formData = new FormData();
    formData.append('matricula', matricula);

    console.log("el item de storage es: " + matricula);
    fetch('assets/php/logout_Admin.php', {
         method: 'POST',
         body: formData
     })
         .then(res => res.json())
         .then(data => {
             console.log(data)
             if (data === 'Ok') {
                 localStorage.removeItem("admin_id");
                 document.location.href = "./login.html";
             }
         })
})