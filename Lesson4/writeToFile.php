<?php
// must have here, otherwise it won't work
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta content="charset=utf‐8">
  <title>CIT 228 - Form! YEAH!</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section>
    <?php

    $nameErr = $emailErr = $genderErr = $websiteErr = $interestErr = "";
    $name = $email = $gender = $comment = $website = $interest = "";
    $actionSelect = $comedySelect = $dramaSelect = $horrorSelect= $biographicalSelect = $documentarySelect = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    $pattern= "/^[a‐zA‐Z ]*$/";
    // can't get this working
    //if (preg_match($pattern,$name)!== 1) {
    //$nameErr = "Only letters and white space allowed";
    //}
    }

    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
    }

    // can't get this working either
    //if (empty($_POST["website"])) {
    //  $website = "";
    //} else {
    //  $website = $_POST["website"];
    //  $pattern = "/\b(?:(?:https?|ftp):\/\/|www|ftp\.)[‐a‐z0‐9+&@#\/%?=~_|!:,.;]*[‐a‐z0‐9+&@#\/%=~_|]/i";
    //if( preg_match( $pattern, $website ) !== 1 ) {
    //$websiteErr= $website . " is an invalid URL (preg match error)";
    //} else if (filter_var($website,FILTER_VALIDATE_URL) == 1){
    //$websiteErr= $website . " is an invalid URL (filter_var error)";
    //} else {
    //    $website = test_input($_POST["website"]);
    //  }
    //}

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST['interest'])){
      $interestErr = "Answer is invalid";
    }

    else {
      $interest = test_input($_POST['interest']);
    }

    if(!empty($_POST["movie"])){
      foreach($_POST["movie"] as $value){
          if($value=="action")
            $actionSelect="true";
          if ($value=="comedy")
            $comedySelect="true";
          if ($value=="drama")
            $dramaSelect="true";
          if ($value=="biographical")
            $biographicalSelect="true";
          if ($value== "documentary")
            $documentarySelect="true";
          if ($value=="horror")
            $horrorSelect="true";
          }
    }

    $file = "afile.txt";
    if (file_exists($file)){
      $handle = fopen($file, 'a') or die("Oh no! Can't open file: ".$file);
      $data = "<p>Name: ".$name.", Email: ".$email.", Gender: ".$file."</p>";
      fwrite($handle, $data);
      fclose($file);
    } else {
      $handle = fopen($file, 'a') or die("Oh no! Can't open file: ".$file);
      $data = "<p>Name: ".$name.", Email: ".$email.", Gender: ".$file."</p>";
      fwrite($handle, $data);
      fclose($file);
    }

    if ($nameErr == "" && $emailErr == "" && $genderErr =="" && $websiteErr =="")
      header('Location: finishv2.php');
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $interestErr == "";
    ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
          <h1>Movie Survey</h1>
          <p style="text‐align:left;margin‐top:‐10px;"><span class="error">* required fields</span></p>
          <p><label for="name" id="labelFormat">Name:</label>
            <input class="formEntry" id="name" name="name" size="30" style="width: 300px" value="<?php echo $name ?>"> *
            <br><span class="error"><?php echo $nameErr;?></span><br></p>
          <p><label for="email" id="labelFormat">Email:</label>
            <input class="formEntry" id="email" name="email" size="30" style="width: 300px" ?> *
            <br><span class="error"><?php echo $emailErr;?></span><br></p>
          <?php echo $email ?>
            <p><label for="website" id="labelFormat">Website:</label>
              <input class="formEntry" id="website" name="website" size="30" style="width: 300px" value="<?php echo $website; ?>">
          <br><span class="error"><?php echo $websiteErr;?></span><br /></p>
          <p><label for="interest" id="labelFormat">Areas of Interest:</label>
            <select class="formEntry" name="interest" id="interest" style="text‐align:left; width:300px;">
              <option value="">Where would you like to see a movie?</option>
              <option <?php if ($interest == "theater") echo "selected";?> value="theater"> Theater </option>
              <option <?php if ($interest == "house") echo "selected";?> value="house"> House </option>
              <option <?php if ($interest == "outside") echo "selected";?> value="outside"> Outside </option>
              <option <?php if ($interest == "other") echo"selected";?> value="other"> Other </option>
            </select>
            <br><span class="error" style="margin‐left:100px;"><?php echo $interestErr;?></span><br /></p>
          <p><label for="movie" id="labelFormat">Movie Genres</label></p>
          <div class="formEntry" style="flex‐inline; margin‐left:250px; width:300px;">
            <input type="checkbox" name="movie[]" id="action" value="action" <?php if ($actionSelect) echo "checked"; ?>> Action
            <input type="checkbox" name="movie[]" id="comedy" value="comedy" <?php if ($comedySelect) echo "checked"; ?>> Comedy<br>
            <input type="checkbox" name="movie[]" id="drama" value="drama" <?php if ($dramaSelect) echo "checked"; ?>> Drama
            <input type="checkbox" name="movie[]" id="horror" value="horror" <?php if ($horrorSelect) echo "checked"; ?>> Horror<br>
            <input type="checkbox" name="movie[]" id="biographical" value="biographical" <?php if ($biographicalSelect) echo "checked"; ?>> Biographical<br>
            <input type="checkbox" name="movie[]" id="documentary" value="documentary" <?php if ($documentarySelect) echo "checked"; ?>> Documentary
          </div>
          <p><label for="comment" id="labelFormat">Movie Suggestions:</label>
            <textarea class="formEntry" id="comment" name="comment" style="width: 340px; height:200px"></textarea></p>
          <p></p>
          <div style="flex‐inline;">
            <p><span class="error"><?php echo $genderErr;?></span></p>
            <p><label for="gender" id="labelFormat">Gender:</label></p>
            <p style="text‐align:left;"><label for="female">Female:</label>
              <input type="radio" name="gender" value="female">
              <label for="male">Male:</label>
              <input type="radio" name="gender" value="male"> *
            </p>
          </div><br>
          <p></p>
          <p style="flex‐inline;"><input class="inputButton" type="submit" name="submit" id="submit" style="clear:both;width: 190px;">
            <input class="inputButton" type="reset" name="reset" id="reset" style="clear:both;width: 190px; margin‐left:10px;"><br>
          </p>
      </form>
  </section>
</body>
</html>
