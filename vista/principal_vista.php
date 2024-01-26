<?php     
require_once('menu.php');
    if(isset($array_productos)){

      $cont = 0;
      foreach ($array_productos as $producto) {

        $cont++;
        if ($cont == 1) {
          echo "<div class='w3-row-padding'>";
        }

        echo "
            <div class='w3-third w3-container w3-margin-bottom'>
              <img src='imagenes/" . $producto["imagen"] . "' alt='Norway' style='width:100%; max-height:350px;' class='w3-hover-opacity'>
              <div class='w3-container w3-white'>
                <p><b> ". $producto["producto"] . "</b></p>
                <p>".$producto["descripcion"]."</p>
              </div>
            </div>
        ";

        if ($cont == 3) {
          echo "</div>";
        }
      }
    }
?>