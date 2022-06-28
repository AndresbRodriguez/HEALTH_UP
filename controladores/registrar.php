<?php
include("config/config.php");

if (isset($_POST['Registrarse'])) {
  if (strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1 && strlen($_POST['Fecha_nacimiento']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
    $Nombres = trim($_POST['Nombres']);
    $Apellidos = trim($_POST['Apellidos']);
    $Fecha_nacimiento = trim($_POST['Fecha_nacimiento'], "date");
    $Correo = trim($_POST['Correo']);
    $Contraseña = trim(md5($_POST['Contraseña']));

    $consulta = "INSERT INTO persona(Nombres, Apellidos, Tipo_Usuario, Fecha_nacimiento, Correo, Contraseña) VALUES ('$Nombres','$Apellidos','Usuario','$Fecha_nacimiento','$Correo','$Contraseña')";
    $resultado = mysqli_query($con, $consulta);
    if ($resultado) {
      header('Location: index.php')
?>
      <h3 class="ok">Se ha inscripto correctamente</h3>
    <?php
    } else {
    ?>
      <h3 class="bad">No fue posible registrarse</h3>
<?php
    }
  }
}
