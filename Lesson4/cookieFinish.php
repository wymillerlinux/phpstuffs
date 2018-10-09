<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CIT 228 - You filled out the form!</title>
  </head>
  <body>
    <div class="container">
      <h2>THANK YOU!!!</h2>
      <?php
      if (isset($_COOKIE["name"])) {
        echo "<h2>" .$_COOKIE["name"]. ", you have sent your information. We thank you greatly!</h2>";
      } else {
        echo "<p>Your information has been submitted</p>";
      }
      if (isset($_COOKIE["email"])) {
        echo "<h2>Conformation will be sent to " .$_COOKIE["email"]. "</h2>";
      } else {
        echo "<p>You will recieve conformation through your email</p>YOU MESSED UP!";
      }

       ?>
    </div>
  </body>
</html>
