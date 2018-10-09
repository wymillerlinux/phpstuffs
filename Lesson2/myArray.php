<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - My Array</title>
  </head>
  <body>
    <?php

    $indexed = array("a", "b", "c", "d");
    $associative = array(1=>5, 2=>6, 3=>7, 4=>9);
    $multi = array(
                array("bro1", "Jim"),
                array("bro2", "Joe"),
                array("bro3", "Bob")
    );

    printf($indexed[0], $associative[1]);

    array_push($indexed, "e");


     ?>
  </body>
</html>
