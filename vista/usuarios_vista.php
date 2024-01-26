<?php 

if(isset($_SESSION['nombre'])){
    require_once("menu.php");

?>

<h3>Nuevo Usuario:</h3>

<div class="container">
  <form action="index.php" method="post">
    <label for="fname">Usuario:</label>
    <input type="text" id="fname" name="nombre" placeholder="Nombre de usuario..">

    <label for="lclave">Contraseña:</label>
    <input type="password" id="lclave" name="clave" placeholder="Contraseña..">

    <label for="fedad">Edad:</label>
    <input type="text" id="fedad" name="edad" placeholder="Edad..">

    <label for="fcorreo">Correo:</label>
    <input type="text" id="fcorreo" name="correo" placeholder="Correo..">

    <input type="submit" name="insertar" value="Insertar">
  </form>
<?php
    if(isset($array_usuarios)){
        echo "<table border> <tr><th>Nombre</th><th>Edad</th><th>Correo</th></tr>";
        foreach ($array_usuarios as $value){
            if (is_array($value)){
                echo "<tr>";
                foreach ($value as $k=>$value2){
                    echo "<td>".$value2."</td>";
            }
                    echo '<td><form action="" method="post">
                                <input type="hidden" name="nombre" value="'.$value['nombre'].'">
                                <input type="submit" name="borrar" value="Borrar">
                            </form>
                        </td>';
                    echo "</tr>";
            }
            
        }
        echo "</table>";
    }
}else {

?>
<h3>Login</h3>

<div class="container">
  <form action="index.php" method="post">
    <label for="fname">Usuario:</label>
    <input type="text" id="fname" name="nombre" placeholder="Nombre de usuario..">

    <label for="lclave">Contraseña:</label>
    <input type="password" id="lclave" name="clave" placeholder="Contraseña..">

    <input type="submit" value="Login">
    
  </form>
  <?php
}
echo "<p>$error</p>";
?>