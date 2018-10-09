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
      if (isset($_SESSION['name'])) {
        echo "<h2>" . $_SESSION['name'] . ", you have sent your information. We thank you greatly!</h2>";
      } else {
        echo "<p>Your information has been submitted</p>";
      }
      if (isset($_SESSION['email'])) {
        echo "<h2>Conformation will be sent to " . $_SESSION['email'] . "</h2>";
      } else {
        echo "<p>You will recieve conformation through your email</p>YOU MESSED UP!";
      }

       ?>
    </div>
  </body>
</html>
