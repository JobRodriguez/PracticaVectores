
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
            <h1>Vector encontrado</h1>
            <div id="deviceready" class="blink">
<?php
$numero=$_POST['numero'];
$array=explode("-",$_POST["valores"]);
$tam=count($array);
//echo $tam;
unset($array[$tam-1]);
$array;

error_reporting(E_ERROR);

	echo "<br>";
	for ($i=0; $i < $tam; $i++) { 
		if ($_GET['numero']!=$array[$i]) {
		}
		else
		{
		$numero=$_POST['numero'];
		$indice = array_search($numero,$array,false);
		if ($indice+1>=sizeof($array)) {
			echo "<br>Ubicacion mas cercana :". $indice-1 ." Con el numero ". $array[$indice-1];
		}else{
			echo "<br>Ubicacion mas cercana :". $indice+1 ." Con el numero ". $array[$indice+1];

		}
		}
	}	

?>
	<form  method="post" action="genarr.php">
	<input type="text" name="valors" value="
	<?php
	 	for ($i=0; $i < $tam-1; $i++) { 
		print_r($array[$i]."-");
	}?>">
	<br>
		<button>Generar vectores aleatorios</button>	
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



  </body>
</html>
<script type="text/javascript">

</script> 