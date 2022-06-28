<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/usuario.css">
    <title>Document</title>
</head>

<body>
    <form action="usuario.php" method="POST">
        <div class="profile-img p-4">
            <img class="img-user" src="CSS/IMG/public/user.jpg" alt="">
        </div>
        <div class="container">
            <h1 class="text"><?php ?></h1>
            <div class="grupo">
                <label class="text" for="">Nombres</label>
                <input class="text" type="text" name="Nombres" value="<?php  ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Apellidos</label>
                <input class="text" type="text" name="Apelidos" value="<?php  ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Fecha_nacimiento</label>
                <input class="text" type="datetime" name="Fecla_nacimiento" value="<?php  ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Correo Electronico</label>
                <input class="text" type="email" name="correo" value="<?php  ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Contraseña</label>
                <input class="text" type="password" name="Contraseña" value="<?php ?>">
            </div>
            <div class="grupo">
                <label class="text" for="">Confrmar Contraseña</label>
                <input class="text" type="password" name="Contraseña" value="<?php ?>">
            </div>
            <input type="submit" name="actualizar" class="actualizar" value="Actualizar">
            <a class="delete" href="delete.php">Eliminar</a>
        </div>
    </form>
</body>

</html>