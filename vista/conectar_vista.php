<?php
    require_once("vista/menu.php");
?>
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<h1>Login</h1>
    <form action="index.php" method="post">
        
        <input type="text" id="usr_nombre" name="nombre" placeholder="Usuario" required="required" class="w3-input"><br>
        <input type="password" id="usr_clave" name="clave" placeholder="Contraseña" required="required" class="w3-input"><br>
        <button type="submit" value="Login" class="w3-btn w3-blue-grey w3-round-medium">Enviar</button>

    </form>
</div>