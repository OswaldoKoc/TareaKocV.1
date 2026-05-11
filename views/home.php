<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesHome.css">
    <link rel="icon" href="../imagenes/logo1.png">
    <title>Dashboard | Doña Solina</title>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="brand">
                <h1>Doña Solina</h1>
                <span>Dulces Regionales</span>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="logout.php" class="btn-exit">Salir</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="content-wrapper">
        <section class="welcome">
            <h2>Panel de Administración</h2>
            <p>Selecciona una opción para comenzar a gestionar el sistema</p>
        </section>

        <section class="menu-grid">
            <a href="clientes.php" class="menu-card">
                <div class="card-icon">
                    <img src="../imagenes/clientes.png" alt="Clientes">
                </div>
                <h3>Clientes</h3>
                <p>Registrar nuevos clientes y gestionar sus datos personales.</p>
                <span class="btn-card">Ingresar</span>
            </a>

            <a href="productos.php" class="menu-card">
                <div class="card-icon">
                    <img src="../imagenes/productos.png" alt="Productos">
                </div>
                <h3>Productos</h3>
                <p>Administrar el catálogo de café, miel, cacao y artesanías.</p>
                <span class="btn-card">Ingresar</span>
            </a>

            <a href="pedidos.php" class="menu-card">
                <div class="card-icon">
                    <img src="../imagenes/pedido.png" alt="Pedidos">
                </div>
                <h3>Pedidos</h3>
                <p>Generar nuevas órdenes de venta y revisar estados de envío.</p>
                <span class="btn-card">Ingresar</span>
            </a>
        </section>
    </main>

    <footer class="main-footer">
        <p>&copy; 2026 - Sistema de Gestión Doña Solina | SENATI</p>
    </footer>
</body>
</html>