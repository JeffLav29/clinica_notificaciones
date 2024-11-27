$(document).on("click","#btningresar", function(){

    event.preventDefault();

    var usuario = $('#user_usu').val();
    var contra = $('#user_pass').val();

    if(usuario == '' || contra == ''){
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Ingrese todos los campos',
            showConfirmButton: false,
            timer: 1500
        });
    }else{
        $.post("../../controller/usuarioControlador.php?op=login",{usuario : usuario, contra: contra},function(data){
            if (data == 0) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Usuario o Contraseña son incorrectos',
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                window.location.href = "../inicio/index.php";
            }
        })
    }
});