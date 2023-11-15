
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
    <title>Phoebe</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Phoebe</a>
        <nav class="navbar">
            <a href="#">Contacto</a>
            <a href="#">Términos y condiciones</a>
            <button class="btnLogin-popup">Ingresar</button>
        </nav>
    </header>
    <section class="section">
        <div class="wrapper">
            <span class="icon-close">
                <i class='bx bx-x-circle' ></i>
            </span>
            <div class="logreg-box">
                <!-- LOGIN -->
                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Iniciar Sesión</h2>
                        <!-- <p>Por favor ingrese sus datos</p> -->
                    </div>
                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" required>
                            <label>Usuario</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required>
                            <label>Contraseña</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Recordar contraseña</label>
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit" class="btn">Iniciar Sesión</button>
                        <div class="logreg-link">
                            <p>
                                ¿Aún no tienes cuenta? <a href="#" class="register-link">Registrarse</a>.
                            </p>
                        </div>                        
                    </form>
                </div>
                <!-- REGISTER -->
                <div class="form-box register">
                    <div class="logreg-title">
                        <h2>Registrarse</h2>
                        <p>Por favor ingrese los datos correspondientes</p>
                    </div>
                    <form action="#">
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" required>
                            <label>Nombre de Usuario</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" required>
                            <label>Contraseña</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bx-lock'></i></span>
                            <input type="password" required>
                            <label>Confirme Contraseña</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox" required>Acepto los términos y condiciones de servicio.</label>
                        </div>
                        <button type="submit" class="btn">Iniciar Sesión</button>
                        <div class="logreg-link">
                            <p>
                                ¿Ya tienes una cuenta? <a href="#" class="login-link">Iniciar Sesión</a>.
                            </p>
                        </div>
                        <script src="js/main.js"></script>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>