<?php
$array=explode("-",$_POST["valors"]);
$tam=count($array);
//echo $tam;
unset($array[$tam-1]);
//print_r($array);

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
            <h1>Vectores aleatorios</h1>
            <div id="deviceready" class="blink">
<form action="suma.php" method="post">
Vector 1:<input type="text" name="vec1" value="
	<?php
	 	for ($i=0; $i < $tam-1; $i++) { 
		print_r($array[$i]."-");
	}
?>"><br>	
Vector 2:<input type="text" name="vec2" value="
	<?php 		
	for ( $r = 0 ; $r < $tam-1; $r++ ){		
			$vectores1[$r] = rand(5,25);
			echo $vectores1[$r]."-";
		}?>
		">
<br>			
Vector 3:<input type="text" name="vec3" value="
	<?php 		
	for ( $r = 0 ; $r < $tam-1; $r++ ){		
			$vectores1[$r] = rand(5,25);
			echo $vectores1[$r]."-";
		}?>
		">

		<button>Ir a la suma</button>	
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



  </body>
</html>
<script type="text/javascript">

</script> 