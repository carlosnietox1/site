<?php  require_once "libreria.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="reparacion computadoras carlos nieto,huaquillas, tecnico honesto,venta computadoras"/>
    <title>COMPU SYSTEM</title>
</head>
<body>
<div id="preload">

<p id="porcentajeCarga"><img src="views/img/preloader2.gif" alt=""></p>
<div id="fondoCarga"></div>
<div id="rellenoCarga"></div>
<div id="estado"></div>

</div>
    
   <?php include "modulos/botonera.php" ?>
   
   <div class="cuerpo container-fluid">
      
       <div class="row">
          
              
    <?php
        $pagina = new MvcController();
        $pagina -> enlacesPaginaController();

    ?>
    
       </div>
   </div>
   
   <div class="footer">
       <?php include "modulos/footer.php";  ?>
   </div>
    
</body>
</html>


<?php

    function contador(){


    $archivo = "contador.txt";

    $e = fopen($archivo, "r");

    $contador = 0;

    if($e){
    
        $contador = fread($e, filesize($archivo));
        $contador++;
        fclose($e);
    }
    
    $e = fopen($archivo, "w+");

    if($e){
    
        fwrite($e, $contador);
        fclose($e);
    }

    return $contador;
        
    }
    


?>




