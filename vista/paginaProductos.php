<!DOCTYPE html>
<html lang="ES" >
        <head>
                <meta charset="utf-8"/>
                <title>Tienda Online</title>
                <link rel="preconnect" href="https://fonts.gstatic.com"/>
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"/>
                <link rel="stylesheet" type="text/css" href="vista/css/tablaProductos.css"/>
        </head>
        <body>
                <nav>
                        <ul>
                            <li class= "item-r">
                                <a href="controlador/cerrarSesion.php">CERRAR SESIÓN</a>
                            </li>
                            <li class= "item-r">
                                <a href="vista/infoSesion.php">INFORMACIÓN USUARIO</a>
                            </li>
                            <li class= "item-r">
                                <a href="">LISTAR PRODUCTOS</a>
                            </li>
                            <h2>Tienda Online</h2>
                        </ul>
                </nav>
                <div class="contenedor">
                    <table class="tabla">
                        <caption>Lista Productos</caption>
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>   
                            <?php
                            foreach ($listadoProductos as $item)
                            {
                                echo "<tr>";
                                echo "<td>" . $item['codigo'] . "</td>";
                                echo "<td>" . $item['nombre'] . "</td>";
                                echo "<td>" . $item['precio'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </body>
</html>

