<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CIT 228 - Classes</title>
  </head>
  <body>

    <?php

    /**
     * Base class
     */
    class Fruits
    {
      public $apple = "apple";
      public $orange = "orange";
      public $banana = "banana";

      function __construct()
      {

      }

      function printStuff()
      {
        var_dump(new Fruits);
        echo "<br><br>";
      }
    }

    /**
     * Derived class
     */
    class FruitsExt extends Fruits
    {
      public $grape = "grapes";
      public $pineapple = "pineapple";
      public $watermelon = "watermelon";
      public $grapefruit = "grapefruit";

      function __construct()
      {

      }

      function printMoreStuff()
      {
        //$fruits::printStuff();
        //printf("I'm some %s and I'm a %s and I'm a %s and I'm a %s <br>", $grape, $pineapple, $watermelon, $grapefruit);
        var_dump(new FruitsExt);
        //get_object_vars(new FruitsExt);
        echo "<br>";
      }
    }

    $fruits = new Fruits;
    $fruitsExt = new FruitsExt;

    $fruits::printStuff();
    $fruitsExt::printMoreStuff();

     ?>

  </body>
</html>
