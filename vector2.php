<?php
$array=explode("-",$_POST["valors"]);
$tam=count($array);
echo $tam;
unset($array[$tam-1]);
print_r($array);

?>
<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link rel="stylesheet" href="css/index.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </head>
   
    <body class="justify-content-center">
        <div class="container text-center">
          <div class="row"  >
            <h1>Vector</h1>
            <div id="deviceready" class="blink">

				<form id=" vector">
					<input type="text" name="tam" value="<?php echo $tam; ?>">
					<input type="text" id="vect2">
					<input class="form-btn" name="submit" type="button" onclick="vec2()" value="Enviar" />
				</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



  </body>
</html>
<script type="text/javascript">
 function vec2(){
 	$.ajax({
    // la URL para la petición
    url : <?php echo "'".'vector2.php'."'"; ?>,

    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : $('#vector').serialize(),
    // especifica si será una petición POST o GET
    type : 'POST',

    // el tipo de información que se espera de respuesta
    //dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(response) {
    	document.getElementById("vect2").value=response;
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    },

    // código a ejecutar sin importar si la petición falló o no
    //complete : function(xhr, status) {
        //alert('Petición realizada');
    //}
});
 }
</script> 