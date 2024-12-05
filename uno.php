<!DOCTYPE html>
<html lang="es">
<head>
<title>Manejo Secuencial de Imagenes</title>
<style>
li {
    float:  left;
    list-style: none;
    margin: 0 25px 25px 0;
display: none;
}

    li img{
    
        width: 120px;
        height: 120px;
    }    
</style>
</head>
<body>

<h1>Speach to text</h1>
	<input id = "bStart" type = "button" value = "Start" onclick = "start();"></input>
	<div id = "output"></div>
	
	
<a href="#" id="mostrar">Mostrar</a>  /  <a href="#" id="ocultar">Ocultar</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var lista = $('li').hide();
    $('#mostrar').click(function() {
            var i = 0;
            (function mostrarimg() {
                lista.eq(i++).fadeIn(400, mostrarimg);
            })();
    });
    $('#ocultar').click(function() {
            var i = $('li').size();
            (function ocultarimg() {
                lista.eq(--i).fadeOut(200, ocultarimg);
            })();
    });
});
</script>
</body>
</html>


<script>
	var recognition = new webkitSpeechRecognition();
	recognition.continuous = true;
	//recognition.interimResults = true;
	function start(){
		recognition.onresult = function(event) { 
			console.log(event);
			var output = document.getElementById("output");
			output.innerHTML = "";
			for(var i=0; i<event.results.length; i++){
				output.innerHTML = output.innerHTML + event.results[i][0].transcript;
			}
		}
		recognition.start();
	}
</script>


<script>
    $(document).ready(function(){
    
       $("img").on("mouseenter",function(){
       
           alert("HAS ENTRADO A LA IMAGEN");
       
       })
        
    })();
</script>