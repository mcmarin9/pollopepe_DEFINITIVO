<?php
  if (!isset($_SESSION['usuario'])) {
?>
<!-- MENU USUARIOS NO REGISTRADOS -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <h4><b>Media TV</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding ">Productos</a> 
    <a href="index.php?controlador=usuarios&action=login" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Login</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Contactar</a>
  </div>
</nav>
<?php
  } else {
    //echo "Bienvenido ".($_SESSION['usuario']);
?>
<!-- MENU USUARIOS REGISTRADOS -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <h4><b>Media TV</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding ">Gestionar Productos</a> 
    <a href="index.php?controlador=usuarios&action=gestionar" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Gestionar Usuarios</a> 
    <a href="index.php?controlador=productos&action=gestionar" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Desconectar</a>
  </div>
</nav>
<?php
  }
?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Esto ya es contenido de página pero lo pongo aquí para que funcione bien el boton para modelo responsive -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Productos</b></h1>
    </div>
  </header>