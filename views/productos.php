<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/stylesProductos.css">
    <link rel="icon" href="../imagenes/logo1.png">
    <title>Inventario de Productos | Doña Solina</title>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="brand">
                <h1>Doña Solina</h1>
                <span>Gestión de Inventario</span>
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
                <h2>Catálogo de Productos</h2>
                <button class="btn-new">+ Nuevo Producto</button>
            </div>
            
            <form action="" method="GET" class="search-form">
                <div class="input-group">
                    <input type="text" name="nombre_producto" placeholder="Nombre del producto">
                </div>
                <div class="input-group">
                    <select name="categoria">
                        <option value="">Todas las categorías</option>
                        <option value="café">Café</option>
                        <option value="miel">Miel</option>
                        <option value="cacao">Cacao</option>
                        <option value="artesanía">Artesanía</option>
                    </select>
                </div>
                <div class="input-group">
                    <input type="text" name="region" placeholder="Región de origen">
                </div>
                <button type="submit" class="btn-search">Filtrar</button>
            </form>
        </section>

        <section class="list-section">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Categoría</th>
                            <th>Origen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="empty-msg">No se encontraron productos en el inventario.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <p>&copy; 2026 - Doña Solina | Gestión de Productos Regionales</p>
    </footer>
</body>
</html>