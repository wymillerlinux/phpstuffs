<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Indexed Arrays</title>
  </head>
  <body>
    <?php

      $salePrice = array(9.99, 15.99, 24.99, 29.99);
      $regPrice = array(15.00, 25.00, 30.00, 40.00);
      $quantity = array(1,2,3,4);

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
      for ($x=0; $x<count($quantity); $x++) {
        printf("%4d item at %-6.2f each is on sale for <span style='color:red;'> $ %-6.2f</span>each<br>",
        $quantity[$x], $regPrice[$x], $salePrice[$x]);
      }
      printf("</span></pre>");
     ?>


  </body>
</html>
