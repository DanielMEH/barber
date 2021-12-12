<?php

require "conexion.php";
$usuario=$_POST['name'];
$correo=$_POST['email'];
$password=$_POST['password'];

$sql= "INSERT INTO cliente(usuario,correo,password)
VALUES ('$usuario','$correo','$password')";

$valida_usuario=mysqli_query($conexion_bd,"SELECT * FROM cliente WHERE usuario='$usuario'");
if (mysqli_num_rows($valida_usuario) > 0) {
  echo '
  <script>
    alert("este usuario ya existe");
    window.location = "http://localhost/barber-g/registre-2020.php";
  </script>
  ' ;
}
$validar_email= mysqli_query($conexion_bd,"SELECT * FROM cliente WHERE correo='$correo'");
if (mysqli_num_rows($validar_email) > 0) {
  echo '
  <script>
    alert("este correo ya existe");
    window.location = "http://localhost/barber-g/registre-2020.php";
  </script>
  ' ;
}
$consultar= mysqli_query($conexion_bd,$sql);
if ($consultar) {
  echo '
  <script>
    alert("los datos se guardaron");
    window.location = "http://localhost/barber-g/registre-2020.php";
  </script>
  ' ;

}else {

  echo '
  <script>
    alert("los datos se guardaron");
    window.location = "http://localhost/barber-g/registre-2020.php";
  </script>
  ' ;
}
mysqli_close($conexion_bd);
?>
