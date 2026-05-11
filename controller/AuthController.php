<?php

require_once __DIR__ . '/../model/Usuario.php';

class AuthController {

    public function login(string $identificador, string $password): bool {
    
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $usuarioModel = new Usuario();
        $usuario = $usuarioModel->login($identificador, $password);

        if ($usuario) {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['usuario']    = $usuario['nombre_usuario'];
            $_SESSION['correo']     = $usuario['correo'];
            $_SESSION['rol']        = $usuario['rol'];    // Nuevo campo según el caso Doña Solina
            $_SESSION['estado']     = $usuario['estado']; // Para validar si el usuario está activo

            return true;
        }

        return false;
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: login.php");
    }
}