<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <h3>Algoritmo que imprima todos los numeros impares que van del 1 al 100:</h3>
    <?php
    $i=1;
    while ($i <= 100) {
    if (($i%2)==1 ){
    echo "$i <br>";
    }
      $i++;
    }

     ?>

  </body>
</html>
