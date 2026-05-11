<?php
require_once __DIR__ . '/../config/Database.php';

class Usuario {
    private PDO $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->conectar();
    }

    public function login(string $identificador, string $password): ?array {
        // Usamos :user y :email para que sean parámetros distintos
        $sql = "SELECT * FROM usuario WHERE nombre_usuario = :user OR correo = :email LIMIT 1";
        
        $stmt = $this->pdo->prepare($sql);
        
        // Pasamos el mismo valor ($identificador) a ambos marcadores
        $stmt->execute([
            'user'  => $identificador,
            'email' => $identificador
        ]);
        
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            return null;
        }

        // Verificamos la contraseña
        if ($password === $usuario['contrasena'] || password_verify($password, $usuario['contrasena'])) {
            return $usuario;
        }

        return null;
    }
}