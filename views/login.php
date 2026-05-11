<?php
session_start();
require_once __DIR__ . '/../controller/AuthController.php';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = trim($_POST['txtUser'] ?? '');
  $clave = trim($_POST['txtPass'] ?? '');
  if ($nombre === '' || $clave === '') {
    $mensaje = 'Complete todos los campos';
  }else {
    $auth = new AuthController();
    if ($auth->login($nombre, $clave)) {
      header('Location: home.php');
      exit;
    }
    $mensaje = 'Correo o clave incorrectos';
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../imagenes/logo1.png">
    
    <title>Login / Doña Solina</title>
</head>
<body>
    <header>

    </header>
        <main>
        <div class="cajaImg">
            <img src="../imagenes/dulces.jpg" alt="Imagen de login">
        </div>
        <div class=caja>
            <form action="" method="post" id="frmLogin">
                <h1>HELLO!</h1>
                <p>Sistema de Venta de Dulces Regionales</p>
                <div class="user">
                    <img src="../imagenes/user.png" alt="icono usuario">
                    <input type="text" name="txtUser" id="txtUser" placeholder="Usermame" required>
                </div>
                <div class="pass">
                    <img src="../imagenes/pass.png" alt="icono contraseña">
                    <input type="password" name="txtPass" id="txtPass" placeholder="Password" required>
                </div>
                <div class="recPass">
                    <p href="">Remember</p>
                    <a href="">Forgot password?</a>
                </div>
                <div class="buttons">
                    <button type="submit" id="btnPrimary">LOGIN</button>
                </div>
                <div class="createAccount">
                    <a href="">Create Account</a>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
    
    
</body>
</html>