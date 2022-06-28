<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="CSS/signin.css">
    <link rel="icon" href="CSS/IMG/logo-health_up.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>

<body>
    <form action="registrar.php" method="POST" id="form">
        <div class="form">
            <h1>Sign up</h1>
            <div class="grupo">
                <input type="text" name="Nombres" id="Nombre" required><span class="barra"></span>
                <label for="">Nombres</label>
            </div>
            <div class="grupo">
                <input type="text" name="Apellidos" id="Apellidos" required><span class="barra"></span>
                <label for="">Apellidos</label>
            </div>
            <div class="grupo">
                <input type="date" name="Fecha_nacimiento" id="Fecha_nacimiento" required><span class="barra"></span>

            </div>
            <div class="grupo">
                <input type="email" name="Correo" id="Correo" required><span class="barra"></span>
                <label for="">Correo Electronico</label>
            </div>
            <div class="grupo">
                <input type="password" name="Contraseña" id="Contraseña" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <button type="submit" class="sign-up">registrarme</button>
            <a href="signin.php">tengo una cuenta</a>
        </div>
    </form>
</body>

</html>