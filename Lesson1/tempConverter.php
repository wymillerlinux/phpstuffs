<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Temperature Converter</title>
  </head>
  <body>

    <?php
    $celsius = 0;

    while ($celsius <= 45) {
      $fahrenheit = (9/5 * ($celsius + 32));
      print ($celsius . " " . $fahrenheit);
      $celsius = $celsius + 5;
      print ("<br>");
    };
    ?>

  </body>
</html>
