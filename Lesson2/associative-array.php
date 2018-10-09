<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Associative Arrays</title>
  </head>
  <body>
    <?php

      $salePrice = array(1=>9.99, 2=>15.99, 3=>24.99, 4=>29.99);
      $regPrice = array(1=>15.00, 2=>25.00, 3=>30.00, 4=>40.00);

      $shadePlants = array("Lily of the Valley", "Gibraltar Azalea", "Hydrangea", "Japanese Painted Fern", "Silver Gem Blue Violet", "Snowbelle Mockorange");
      $sunPlants = array("Jewel Of Desert Peridot Plant", "Rose", "Hollyhock", "Peony", "Butterfly Bush");

      echo "<h1 style='font-family:batang,calibri,cambria,serif;color:green;'>Shade Plants</h1>";
      for ($x=0; $x<count($shadePlants); $x++) {
        echo $shadePlants[$x] . "<br>";
      }

      echo "<h1 style='font-family:batang,calibri,cambria,serif;color:green;'>Sun Plants</h1>";
      for ($x=0; $x<count($sunPlants); $x++) {
        echo $sunPlants[$x] . "<br/>";
      }

      echo "<hr><h1 style='font-family:batang,calibri,cambria,serif;color:green;'>Sun Plants</h1>";
      printf('<pre><span style="font-family:batang;font-size:12pt;">');
      foreach ($salePrice as $x=>$x_value) {
        echo "A quantity of " .$x. " is a sale for <span style='color:red;'>" .$x_value. "</span><br>";
      }
      echo "</span></pre>";
     ?>


  </body>
</html>
