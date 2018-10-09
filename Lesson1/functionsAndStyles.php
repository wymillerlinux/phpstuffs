<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Functions and Styles</title>
  </head>
  <body>
    <?php
      function printbreak($string, $int, $color){
        echo "<span style=\"color:$color;font-size:$int;\">".$string."</span><br>";
      }

      printbreak("Hello world", "16pt", "red");
      printbreak("Why am I doing this?", "20pt", "green");
      printbreak("Oh wow, I'm actually doing this PHP stuff!", "24pt", "blue");
     ?>
  </body>
</html>
