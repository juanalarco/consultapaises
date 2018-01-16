<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
  </head>
  <body>

    <h1>Paises de SudAmérica</h1>
    <?php

    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
         $conector->connect_error;
    }



  //Hacemos una consulta

  	$consulta = $conector->query("SELECT Name,SurfaceArea FROM country WHERE Continent='South America' ORDER BY SurfaceArea DESC");
  	//Cuantas filas nos devuelve
  	echo "El numero de paises son: ".$consulta->num_rows."<br>";
    echo "<br>";
  	while($fila=$consulta->fetch_assoc()){
    	  echo "El pais ".$fila['Name']."<br>";
         echo "Su area es ".$fila['SurfaceArea']."<br>";
         echo "<br>";
  	}


     ?>


  </body>
</html>
