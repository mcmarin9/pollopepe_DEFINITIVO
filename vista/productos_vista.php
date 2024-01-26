<?php 
require_once("menu.php");
    if(isset($array_usuarios)){
        echo "<table border> <tr><th>Nombre</th><th>Cantidad</th><th>Descripción</th></tr>";
        foreach ($array_usuarios as $value){
            if (is_array($value)){
                echo "<tr>";
                foreach ($value as $k=>$value2){
                    echo "<td>".$value2."</td>";
            }
                    echo "</tr>";
            }
            
        }
        echo "</table>";
    }

?>