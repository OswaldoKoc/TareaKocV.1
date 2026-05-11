<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesPedidos.css">
    <link rel="icon" href="../imagenes/logo1.png">
    <title>Gestión de Pedidos | Doña Solina</title>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="brand">
                <h1>Doña Solina</h1>
                <span>Control de Ventas</span>
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
                <h2>Historial de Pedidos</h2>
                <button class="btn-new">+ Nuevo Pedido</button>
            </div>
            
            <form action="" method="GET" class="search-form">
                <div class="input-group">
                    <input type="text" name="id_pedido" placeholder="N° de Pedido">
                </div>
                <div class="input-group">
                    <input type="date" name="fecha_pedido">
                </div>
                <div class="input-group">
                    <select name="estado_pedido">
                        <option value="">Todos los estados</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="pagado">Pagado</option>
                        <option value="enviado">Enviado</option>
                        <option value="cancelado">Cancelado</option>
                    </select>
                </div>
                <button type="submit" class="btn-search">Filtrar</button>
            </form>
        </section>

        <section class="list-section">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>N° Pedido</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Producto</th>
                            <th>Cant.</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="empty-msg">No se han registrado pedidos recientemente.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <p>&copy; 2026 - Doña Solina | Sistema de Pedidos Regionales</p>
    </footer>
</body>
</html>