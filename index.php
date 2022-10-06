<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link rel="stylesheet" href="css/index.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </head>
   
    <body class="justify-content-center" onload="oc();">
        <div class="container text-center">
          <div class="row"  >
            <h1>Vector</h1>
            <div id="deviceready" class="blink">
  <input type="text" id="agg"><br>
  <button id="btnNew" onclick="crearElemento();">Nuevo elemento</button>
  <button id="btnNew2" onclick="camVec();">Cambiar Vector</button>  
  <form  id="frmRegistro" method="post" action="buscar.php">
<button>Enviar</button>
  </form>


            </div>
        </div>
    </div>     
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



  </body>
</html>
<script type="text/javascript">
  function oc(){
    document.getElementById("btnNew2").style.display="none";
  }
  function crearElemento(){
    var tam=document.getElementById("agg").value;
    for(inc=0;inc<tam;inc++){
      var cadena = "<hr>";
      cadena += "<input type='text' name='"+ inc + " '><br>";     
      cadena += "<hr>";
      document.getElementById("frmRegistro").innerHTML += cadena;
    }
    document.getElementById("btnNew").style.display = 'none';
    document.getElementById("btnNew2").style.display="";

}
  function camVec(){
    document.getElementById("agg").value="";
    document.getElementById("frmRegistro").innerHTML="<button type=submit>Enviar</button>";
    document.getElementById("btnNew").style.display="";
    document.getElementById("btnNew2").style.display="none";
      document.getElementById("vector").value="";
  }
</script> 