<?php require_once "views/libreria.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO II</title>
</head>
<body>
   
   <a href="#" id="mostrar">Mostrar</a>  /  <a href="#" id="ocultar1">Ocultar</a>
    <ul>
        <li><img src="views/img/cabezal.png"></li>
        <li><img src="views/img/cargador1.jpg"></li>
        <li><img src="views/img/cargador2.jpg"></li>
        <li><img src="views/img/cargador3.jpg"></li>
        <li><img src="views/img/case1.jpg"></li>
        <li><img src="views/img/case2.jpg"></li>
        <li><img src="views/img/case3.jpg"></li>
        <li><img src="views/img/ddr3.jpg"></li>
    </ul>
    
</body>
</html>


<style>
    
    li {
    float:  left;
    list-style: none;
    margin: 0 25px 25px 0;
display: none;
}

    

    ul img{
    
        width: 100px;
        height: 100px;
    }

</style>

<script>
$(document).ready(function() {
     var lista = $('li').hide();
    $('#mostrar').click(function() {
            var i = 0;
            (function mostrarimg() {
                lista.eq(i++).fadeIn(400, mostrarimg);
               
            })();
    });
    
    $('#ocultar1').on("click",function() {
              var i = 0;
            (function ocultarimg() {
                lista.eq(--i).fadeOut(200, ocultarimg);
            })();
    });
    
    $("img").on("mouseenter",function(){
    
        var imagen = $(this).attr("src");
        
        console.log("esta es la imagen" + imagen);
    
    })
    
    ////////////////////////
  
     $("body").find("img").eq(3).css( "background-color", "red" );
});
    
</script>    