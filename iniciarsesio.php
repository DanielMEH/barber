

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="decoraciones/normalize.css">
    <link rel="stylesheet" href="decoraciones/registrate-decorationr.css">
    <script src="https://kit.fontawesome.com/2a174a6d4c.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse | barber</title>
</head>
<body>

    <div class="principal_werdt">
        <div class="volver_inicio">
            <span class="logo_cerrar"><a href="http://localhost/barber-g/barberhow.php"><i class="fas fa-angle-left"></i></a></span>
        </div>
        <div class="tittle_register">
            <span class="registrate">Iniciar sesión</span>
        </div>
    </div>
    <div class="formulario_registrarse">
        <form action="validarlogin.php" method="POST" class="form_input_date" id="formulario">
            <div class="div_alo_zsk">
                <span class="setrll">Bar<b style="color: #0db2b8;">ber</b></span>
            </div>
            <div class="div_alo_zsk">
                <span class="setr">Iniciar sesión</span>
            </div>
            <div class="formulario_comienzof">

                <div class="correo_k get">
                    <label for="correo">
                        <span class="x spadel ">Correo electrónico</span>
                        <input type="email" class="correo vcx correo vaxyuryr" name="email" id="correo" placeholder="ingresar un gmail"
                        >
                    </label>
                    <span class="errror_verification t">Ingresar un gmail valdo "@"</span>

                </div>
                <div class="password_k get">
                    <label for="password">
                        <span class="x jxshxgsya">Contraseña</span>
                        <input type="password" class="password vcx vactunxsjkxbs nshdsj" name="password" id="password" placeholder="ingresar un gmail"
                        >
                    </label>
                    <span class="errror_verification verificart ">La contraseña debe ser la misma</span>

                    <div class="eye" id="eye" style="padding">
                        <span style="color:red;"><i class="far fa-eye" ></i></span>
                    </div>

                </div>
                <div class="buuton_enviar_form">
                    <input type="submit" class="btn_envio" value="Iniciar sesion">
                </div>
            </div>
            <div class="iniciar_sexion">
                <span>¿No tienes cuenta? <a href="http://localhost/barber-g/registre-2020.php">Crear cuenta</a></span>
            </div>
            <div class="iniciar_sexion">
                <span>Aceptar nuestros <a href="">Terminos de servicio</a></span>
            </div>

        </form>
    </div>
    <script>

const formulario = document.getElementById('formulario');
const inputdate= document.querySelectorAll('#formulario input')
console.log(formulario);

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarformulario = (e)=>{

    switch (e.target.name) {
        case  "name":
            if (expresiones.usuario.test(e.target.value)) {
                document.querySelector('#formulario .x').classList.remove('get_usuariost');
                document.querySelector('.usuariow').classList.remove('activeerr');
                document.querySelector(' .errror_verification').classList.remove('namever');
                document.querySelector(' .vcx').classList.remove('frt');
                campos['name'] = true;
            }else{
                document.querySelector('#formulario .x').classList.add('get_usuariost');
                document.querySelector('.usuariow').classList.add('activeerr');
                document.querySelector(' .errror_verification').classList.add('namever')
                document.querySelector(' .vcx').classList.add('frt');
                campos['name'] = false;
            }
            break;
            case  "email":
            if (expresiones.correo.test(e.target.value)) {
                document.querySelector('.correo').classList.remove('activinput');
                document.querySelector('.spadel').classList.remove('activen');
                document.querySelector('.t').classList.remove('getbat');
                document.querySelector('.vaxyuryr').classList.remove('gartigdts');
                campos['email'] = true;

            }else{
                document.querySelector('.t').classList.add('getbat');
                document.querySelector('.correo').classList.add('activinput');
                document.querySelector('.spadel').classList.add('activen');
                document.querySelector('.vaxyuryr').classList.add('gartigdts');
                campos['email'] = false;

            }

            break;
            case  "password":
            if (expresiones.password.test(e.target.value)) {
                document.querySelector('.nshdsj').classList.remove('sjdsuidhsuidh');
                document.querySelector('.verificart').classList.remove('bsxbsjxgsdgsh');
                document.querySelector('.vactunxsjkxbs').classList.remove('jnxsjxhsdcdehycby');
                document.querySelector('.jxshxgsya').classList.remove('tsswhwshwu');
                campos['password'] = true;


            }else{
                document.querySelector('.nshdsj').classList.add('sjdsuidhsuidh');
                document.querySelector('.verificart').classList.add('bsxbsjxgsdgsh');
                document.querySelector('.vactunxsjkxbs').classList.add('jnxsjxhsdcdehycby');
                document.querySelector('.jxshxgsya').classList.add('tsswhwshwu');
                campos['password'] = false;

            }
            break;


    }
}

inputdate.forEach((input)=>{
    input.addEventListener('keyup', validarformulario);
    input.addEventListener('blur', validarformulario);
});


const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{5,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{12,30}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
 const eye = document.getElementById('eye');
        const input = document.getElementById('password')
        eye.addEventListener('click', ()=>{
            if (input.type == "password") {
                input.type="text";
                eye.style.opacity= 0.80;
            }else{
                input.type="password";
                eye.style.opacity= 1;
            }
        });



    </script>
</body>
</html>
