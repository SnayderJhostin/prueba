const btnRegister = document.querySelector('#btnRegister');
const btnLogin = document.querySelector('#btnLogin');
const frmLogin = document.querySelector('#frmLogin');
const frmRegister = document.querySelector('#frmRegister');
const registrarse = document.querySelector('#registrarse');

const nombreRegistro = document.querySelector('#nombreRegistro');
const correoRegistro = document.querySelector('#correoRegistro');
const claveRegistro = document.querySelector('#claveRegistro');

document.addEventListener('DOMContentLoaded', function() {
    btnRegister.addEventListener('click', function(){
        frmLogin.classList.add('d-none');
        frmRegister.classList.remove('d-none');
    })
    btnLogin.addEventListener('click', function(){
        frmRegister.classList.add('d-none');
        frmLogin.classList.remove('d-none');
    })
    //registrarse
    registrarse.addEventListener('click', function(){
        let formData = new FormData();
        formData.append('nombre', nombreRegistro.value);
        formData.append('correo', correoRegistro.value);
        formData.append('clave', claveRegistro.value);
        const url = base_url + 'clientes/registroDirecto';
        const http = new XMLHttpRequest();
        http.open('POST', url, true);
        http.send(formData);
        http.onreadystatechange = function() {
            if( this.readyState == 4 && this.status ==200){
                const res = JSON.parse(this.responseText);
                Swal.fire('Aviso', res.msg, res.icono);
                if (res.icono == 'succes') {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            }
        }
    })
});