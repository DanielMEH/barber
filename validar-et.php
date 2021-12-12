<?php

require "conexion.php";
$nombre=$_POST['usuario'];
$apellido=$_POST['apellido'];
$numero=$_POST['numero'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$sql="INSERT INTO profecional (name,apellido,telefono,edad,correo,password)
VALUES ('$nombre','$apellido','$numero','$edad','$correo','$password')";

$consulta_n= mysqli_query($conexion_bd,"SELECT * FROM profecional WHERE name='$nombre'");
if (mysqli_num_rows($consulta_n) > 0) {
    echo '
    <script>
      alert("Este usuario ya existe");
      window.location = "http://localhost/barber-g/form-profe.html";
    </script>
    ' ;
    exit;
}
$consulta_c= mysqli_query($conexion_bd,"SELECT * FROM profecional WHERE correo='$correo'");
if (mysqli_num_rows($consulta_c) > 0) {
    echo '
    <script>
      alert("Este correo ya existe");
      window.location = "http://localhost/barber-g/form-profe.html";
    </script>
    ' ;
    exit;
}
if ($nombre == "" || $nombre == null && $apellido == "" || $apellido == null && $numero == "" || $numero == null &&
    $edad == "" || $edad == null && $correo == "" || $correo == null && $password == "" || $password ==null ) {
    echo '
    <script>
      alert("Por favor llena todos los campos");
      window.location = "http://localhost/barber-g/form-profe.html";
    </script>
    ' ;
    exit;
}
$consulta_sql= mysqli_query($conexion_bd,$sql);
if ($consulta_sql) {
    echo '
    <script>
      alert("los datos se guardaron con exito");
      window.location = "http://localhost/barber-g/form-profe.html";
    </script>
    ' ;
    exit;
  
  }else {
  
    echo '
    <script>
      alert("los datos no se  guardaron intenta de nuevo");
      window.location = "http://localhost/barber-g/form-profe.html";
    </script>
    ' ;
  
}
mysqli_close($conexion_bd);