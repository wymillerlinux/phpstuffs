<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Data Types</title>
  </head>
  <body>
    <?php
    $bool = true;
    $int = 5;
    $float = 6.5;
    $string = "hello world";
    $array = array('apple', 'banana', 'orange');

    echo is_bool($bool) . "<br>";
    echo is_int($int) . "<br>";
    echo is_string($string) . "<br>";
    echo is_float($float) . "<br>";
    echo is_array($array) . "<br><br>";

    echo ("My boolean: " . $bool . "\r <br>");
    echo ("My integer: " . $int . "\r <br>");
    echo ("My floating number: " . $float . "\r <br>");
    echo ("My string: " . $string . "\r <br>");
    echo ("My array: " . $array[0] . " " . $array[1] . " " . $array[2]);


     ?>
  </body>
</html>
