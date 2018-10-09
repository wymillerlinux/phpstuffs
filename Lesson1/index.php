<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CIT228 - PHP</title>
  </head>
  <body>
    <div style="background-color: lightcoral;" class="jumbotron">
      <h1 style="text-align: center;">Data Sources Exercises - PHP</h1>
    </div>
    <div class="header">
      <h2>Welcome!!
        <?php
        $time = date("H");
        if ($time < 6) {
          echo "I'm probably working on this page and the assignments related to this week. Check back later.";
        }
        elseif ($time < 12) {
          echo "Good morning!";
        }
        elseif ($time < 18) {
          echo "Good afternoon!";
        }
        elseif ($time < 21) {
          echo "Good evening!";
        }

         ?>
      </h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 1</h3>
          <p>
            <a href="dataTypes.php">Exercise 1 - Data Types</a>
          </p>
          <p>
            <a href="functionsAndStyles.php">Exercise 2 - Functions and Styles</a>
          </p>
          <p>
            <a href="compare.php">Exercise 3 - Compare</a>
          </p>
          <p>
            <a href="tempConverter.php">Exercise 4 - Temperature Converter</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 2</h3>
          <p>
            <a href="../Lesson2/indexed-array.php">Exercise 1 - Indexed Arrays</a>
          </p>
          <p>
            <a href="../Lesson2/associative-array.php">Exercise 2 - Associative Arrays</a>
          </p>
          <p>
            <a href="../Lesson2/multi-array.php">Exercise 3 - Multidimensional Arrays</a>
          </p>
          <p>
            <a href="../Lesson2/myArray.php">Exercise 4 - My Arrays</a>
          </p>
          <p>
            <a href="../Lesson2/classes.php">Exercise 5 - Classes</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 3</h3>
          <p>
            <a href="../Lesson3/postExample.php">Exercise - Post Example - Form</a>
          </p>
          <p>
            <a href="../Lesson3/getExample.php">Exercise - Get Example - Form</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 4</h3>
          <p>
            <a href="../Lesson4/cookieExample.php">Excerise 1 - Cookie Example</a>
          </p>
          <p>
            <a href="../Lesson4/sessionExample.php">Exercise 2 - Session Example</a>*
          </p>
          <p>
            <a href="../Lesson4/writeToFile.php">Exercise 3 - Write data to file using a form</a>**
          </p>
          <p>
            <a href="../Lesson4/watermark.php">Excerise 4 - Watermarks</a>
          </p>
          <p>
            <a href="../Lesson4/captcha.php">Exercise 5 - Captcha</a>
          </p>
          <p>
            * - Had a hard time getting this to work <br>
            ** - Untested
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 5</h3>
          <p>
            <a href="../Lesson5/databaseDesign.php">Exercise 1 - Databases</a>
          </p>
          <p>
            <a href="../Lesson5/mySQLExercise.php">Exercise 2 - Databases</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3>Week 6</h3>
          <p>
            <a href="../Lesson6/menu.html">Database tomfoolery with PHP!</a>
          </p>
        </div>
      </div>
    </div>
    <footer>
      <p>Wyatt J. Miller 2018 All rights reserved - Licensed by the MIT</p>
    </footer>
  </body>
</html>
