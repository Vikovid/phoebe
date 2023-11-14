<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/main.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required>
                <i class='bx bx-user-circle' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required>
                <i class='bx bx-lock' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"></label>
                <a href="#">¿Olvidó su contraseña?</a>
            </div>

            <button type="submit" class="btn">Ingresar</button>

            <div class="register-link">
                <p>¿No posee una cuenta? <a href="#">Crear nueva cuenta</a></p>
            </div>
        </form>
    </div>
    </div>
</body>
</html>