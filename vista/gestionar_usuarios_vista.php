<?php
    require_once("vista/menu.php");
?>

    <h1>Gestionar Usuarios</h1>

    <!-- Formulario para crear un nuevo usuario -->
    <div class="w3-main" style="margin-left:20px">
        <h2>Crear Usuario</h2>
        <form action="" method="post">
            <label for="nombre_usuario">Nombre:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" required class="w3-input">
            <br>
            <label for="clave_usuario">Contraseña:</label>
            <input type="password" name="clave_usuario" id="clave_usuario" required class="w3-input">
            <br>
            <input type="submit" name="insertar" value="Crear Usuario" class="w3-btn w3-blue-grey w3-round-medium">
        </form>

        <!-- Tabla para mostrar la lista de usuarios -->
        <h2>Lista de Usuarios</h2>
        <table class="w3-table-all">
            <tr>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
            <?php
                foreach ($array_usuarios as $usuarios) {

                    echo '<tr><td>' . $usuarios['usuario'] . '</td>
                    <td>' . $usuarios['clave'] . '</td>

                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="usuario" value="'.$usuarios['usuario'].'">
                            <input type="submit" name="borrar" value="Borrar">
                        </form>
                    </td>

                    </tr>';
                }
            ?>

            <!-- Aquí se mostrarían los usuarios obtenidos de la base de datos -->
            <!-- Puedes usar un bucle para mostrar cada usuario en una fila de la tabla -->
            
        </table>
    </div>
</body>
</html>

