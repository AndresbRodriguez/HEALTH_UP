<?php
include('config/config.php');
$Correo = $_POST['Correo'];
$Contraseña = md5($_POST['Contraseña']);
session_start();
$_SESSION['Correo']=$Correo;

$consulta = "SELECT*FROM persona where Correo='$Correo' and Contraseña='$Contraseña'";
$resultado = mysqli_query($con,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
  header ("location:home.php");
} else {
  ?>
  <?php
  include("signin.php");
  ?>
  <h1 class="hola">Los datos no coincien</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>