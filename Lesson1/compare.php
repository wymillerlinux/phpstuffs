<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Compare</title>
  </head>
  <body>
    <?php
    $a = 5;
    $b = 8;

    echo "testing conditions...<br>";
    echo "let a be 5 and b be 8!<br><br>";
    echo "is a greater that b? <br>";
    if ($a > $b) {
      echo "a is greater than b! <br>";
    }
    else {
      echo "a is not greater than b! <br>";
    }

    echo "is a less than b? <br>";
    if ($a < $b) {
      echo "a is less than b! <br>";
    }
    else {
      echo "a is not greater than b! <br>";
    }

    echo "is a equal to b? <br>";
    if ($a == $b) {
      echo "a is equal to b! <br>";
    }
    else {
      echo "a is not equal to b! <br>";
    }

    echo "is a less than or equal to b? <br>";
    if ($a <= $b) {
      echo "a is less than or equal to b! <br>";
    }
    else {
      echo "a is not less than of equal to b! <br>";
    }
     ?>
  </body>
</html>
