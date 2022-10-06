
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
<?php
$array1=explode("-",$_POST["vec1"]);
$array2=explode("-",$_POST["vec2"]);
$array3=explode("-",$_POST["vec3"]);
$tam=count($array1);
unset($array1[$tam-1]);
unset($array2[$tam-1]);
unset($array3[$tam-1]);
echo "Vector 1: ";
for ($i=0; $i < $tam-1; $i++) { 
	print_r($array1[$i]." ");
}
echo "<br> Vector 2: ";
for ($i=0; $i < $tam-1; $i++) { 
	print_r($array2[$i]." ");
}
echo "<br> Vector 3: ";
for ($i=0; $i < $tam-1; $i++) { 
	print_r($array3[$i]." ");
}

echo "<br> La suma de todos los vectores es:".array_sum($array1)+array_sum($array2)+array_sum($array3);
echo "<br> La resta de todos los vectores es:".array_sum($array1)-array_sum($array2)-array_sum($array3);
?>

<input type="button" name="" value="Salir" onclick="salir()">
	<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



  </body>
</html>
<script type="text/javascript">
  function salir(){
    alert("Saliendo con exito!");
    window.location="index.php";
  }
</script> 