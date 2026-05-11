<?php
session_start();
require_once __DIR__ . '/../controller/AuthController.php';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identificador = trim($_POST['txtUser'] ?? '');
    $password      = trim($_POST['txtPass'] ?? '');

    if ($identificador === '' || $password === '') {
        $mensaje = 'Complete todos los campos';
    } else {
        $auth = new AuthController();
        if ($auth->login($identificador, $password)) {
            header('Location: home.php');
            exit;
        }
        $mensaje = 'Usuario, correo o clave incorrectos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../imagenes/logo1.png">
    <title>Login / Doña Solina</title>
</head>
<body>
    <main>
        <div class="cajaImg">
            <img src="../imagenes/dulces.jpg" alt="Imagen de login">
        </div>
        <div class="caja">
            <form action="" method="post" id="frmLogin">
                <h1>HELLO!</h1>
                <p>Sistema de Venta de Dulces Regionales</p>

                <?php if (!empty($mensaje)): ?>
                    <div class="error-container">
                        <span class="error-msg"><?php echo $mensaje; ?></span>
                    </div>
                <?php endif; ?>

                <div class="user">
                    <img src="../imagenes/user.png" alt="icono usuario">
                    <input type="text" name="txtUser" id="txtUser" placeholder="Username" required>
                </div>
                <div class="pass">
                    <img src="../imagenes/pass.png" alt="icono contraseña">
                    <input type="password" name="txtPass" id="txtPass" placeholder="Password" required>
                </div>
                <div class="recPass">
                    <p>Remember</p>
                    <a href="">Forgot password?</a>
                </div>
                <div class="buttons">
                    <button type="submit" id="btnPrimary">LOGIN</button>
                </div>
                <a href="">Create Account</a>
            </form>
        </div>
    </main>
</body>
</html>