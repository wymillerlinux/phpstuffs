<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Multidimensional Arrays</title>
  </head>
  <body>

    <?php

    $pricing = array(
                array("planA", 1, 9.99, 15.00),
                array("planB", 2, 15.99, 25.00),
                array("planC", 3, 24.99, 30.00),
                array("planD", 4, 29.99, 40.00)
    );

    $plants = array(
                array("shade01", "Lily of the Valley"),
                array("shade02", "Gibraltar Azalea"),
                array("shade03", "Hydrangea"),
                array("sun01", "Hollyhock"),
                array("sun02", "Jewel of Desert Peridot"),
                array("sun03", "Rose")
    );

    echo "<h1>Plants and Pricing</h1>";
    echo "<h2>Plants in Stock</h2>";
    printf("<pre>%-15s %-40s<br>","Product Code","Plant Name");
    printf("====================================================<br>");
    foreach ($plants as $pl) {
      printf("%-15s %-40s<br>",$pl[0],$pl[1]);
    }
    printf("</pre>");

    echo "<h2>Price Plans</h2>";
    foreach ($pricing as $p) {
      printf("for %s, the quantity is %d, the regular price is %4.2f and the sale price is %4.2f<br>",
      $p[0], $p[1], $p[2], $p[3]);
    }
      echo "<hr/>";
    ?>

  </body>
</html>
