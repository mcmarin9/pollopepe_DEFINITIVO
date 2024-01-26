<!--
<ul>
  <li><a href="index.php">Datos</a></li>
  <li><a href="index.php?controlador=productos&action=home">Productos</a></li>
  <li><a href="index.php?controlador=datos&action=desconectar">Desconectar</a></li>
</ul>
-->

<!-- Sidebar (hidden by default) -->

<?php
  if (!isset($_SESSION['nombre'])) {
?>
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Cerrar Menu</a>
  <a href="index.php?controlador=index&action=conectar"  class="w3-bar-item w3-button">Conectar</a>
</nav>
<?php
  } else {
    echo "Bienvenido ".($_SESSION['nombre']).", de contraseña: ".($_SESSION['clave']);
?>
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-bar-item w3-button">Cerrar Menu</a>
      <a href=""  class="w3-bar-item w3-button">Gestionar Libros</a>
      <a href="index.php?controlador=index&action=desconectar"  class="w3-bar-item w3-button">Desconectar</a>
    </nav>
<?php
  }
?>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16"> <a href="" class="w3-bar-item w3-button">Contactar</a></div>
    <div class="w3-center w3-padding-16"><a href="index.php" class="w3-bar-item w3-button">Club de lectura "El pollo Pepe"</a></div>
  </div>
</div>
  