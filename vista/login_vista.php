<?php
    require_once("vista/menu.php");
?>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:20px">
    <h1>Login</h1>

    <!-- Formulario usado en conectar -->
    <form action="" method="post">
        
        <input type="text" id="usr_nombre" name="usuario" placeholder="Usuario" required="required" class="w3-input"><br>
        <input type="password" id="usr_clave" name="clave" placeholder="Contraseña" required="required" class="w3-input"><br>
        <button type="submit" value="Login" class="w3-btn w3-blue-grey w3-round-medium">Enviar</button>

    </form>
</div>