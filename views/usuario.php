<?php
require './config/config.php';


if (!isset($_SESSION['Correo'])) {
    header("location:signin.php");
    session_destroy();
    die();
}

if (isset($_SESSION['Correo'])) {
    $user = mysqli_query($con, "SELECT*FROM persona WHERE Correo='$_SESSION[Correo]'");

    while ($row = mysqli_fetch_assoc($user)) {
        $Nombres = $row['Nombres'];
        $Apellidos  = $row['Apellidos'];
        $Fecha_nacimiento = $row['Fecha_nacimiento'];
        $Correo = $row['Correo'];
        $Contraseña = md5($row['Contraseña']);
    }
}

if (isset($_POST['actualizar'])) {
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Contraseña = md5($_POST['Contraseña']);

    $actualizar = "UPDATE persona SET Nombres = '$Nombres', Apellidos = '$Apellidos', Contraseña = '$Contraseña' WHERE Correo='$_SESSION[Correo]'";
    $result = mysqli_query($con, $actualizar);
    if ($result) {
        header('Location: ./perfil.php');
    }
}

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM persona where Correo='$_SESSION[Correo]'";
    $result = mysqli_query($con, $delete);
    if ($result) {
        session_destroy();
        header("Location: ./signin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/usuario.css">
    <title>Perfil | <?php echo $Nombres; ?></title>
</head>

<body>
    <form action="" method="POST">
        <!--<div class="profile-img p-4">
            <img class="img-user" src="CSS/IMG/public/user.jpg" alt="">
            </div>-->
        <div class="container">
            <h1 class="text"><?php ?></h1>
            <div class="grupo">
                <label class="text" for="">Nombres</label>
                <input class="text" type="text" name="Nombres" value="<?php echo $Nombres; ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Apellidos</label>
                <input class="text" type="text" name="Apellidos" value="<?php echo $Apellidos; ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Fecha_nacimiento</label>
                <input class="text" type="datetime" name="Fecha_nacimiento" id="bloqueo" disabled="" value="<?php echo $Fecha_nacimiento; ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Correo Electronico</label>
                <input class="text" type="email" name="Correo" id="bloqueo" disabled="" value="<?php echo $Correo; ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Contraseña</label>
                <input class="text" type="password" name="Contraseña" value="<?php echo $Contraseña; ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Confrmar Contraseña</label>
                <input class="text" type="password" name="Contraseña" value="<?php echo $Contraseña; ?>">
            </div>
            <input type="submit" name="actualizar" class="actualizar" value="Actualizar">
            <input type="submit" name="delete" class="delete" value="Eliminar">
        </div>
    </form>
    <script>
        function BloqueoInput() {
            document.getElementById('bloqueo').disabled = false
        }
    </script>
</body>

</html>