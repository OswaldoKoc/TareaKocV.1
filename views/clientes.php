<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesClientes.css">
    <link rel="icon" href="../imagenes/logo1.png">
    <title>Gestión de Clientes | Doña Solina</title>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="brand">
                <h1>Doña Solina</h1>
                <span>Gestión de Clientes</span>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="home.php">Volver al Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="search-section">
            <div class="section-header">
                <h2>Buscar Clientes</h2>
                <button class="btn-new">+ Nuevo Cliente</button>
            </div>
            
            <form action="" method="GET" class="search-form">
                <div class="input-group">
                    <input type="text" name="nombre" placeholder="Nombre o Apellido">
                </div>
                <div class="input-group">
                    <input type="text" name="dni" placeholder="DNI">
                </div>
                <div class="input-group">
                    <input type="text" name="correo" placeholder="Correo Electrónico">
                </div>
                <button type="submit" class="btn-search">Buscar</button>
            </form>
        </section>

        <section class="list-section">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="empty-msg">No hay datos para mostrar. Realice una búsqueda o registre un nuevo cliente.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <p>&copy; 2026 - Doña Solina | Módulo de Clientes</p>
    </footer>
</body>
</html>