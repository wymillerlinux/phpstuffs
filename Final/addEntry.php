<!DOCTYPE html>
<html>
<?php
include 'connect.php';
if (!$_POST) {
    //haven't seen the form, so show it
    $display_block = <<<END_OF_BLOCK
<form method="post" action="$_SERVER[PHP_SELF]">
<fieldset>
<legend>First/Last Names:</legend><br/>
<input type="text" name="fname" size="30" maxlength="75" required="required" />
<input type="text" name="lname" size="30" maxlength="75" required="required" />
</fieldset>
<p><label for="address">Street Address:</label><br/>
<input type="text" id="address" name="address" size="30" /></p>
<fieldset>
<legend>City/State/Zip:</legend><br/>
<input type="text" name="city" size="30" maxlength="50" />
<input type="text" name="state" size="5" maxlength="2" />
<input type="text" name="zipcode" size="10" maxlength="10" />
</fieldset>
<fieldset>
<legend>Address Type:</legend><br/>
<input type="radio" id="add_type_h" name="add_type" value="home" checked />
<label for="add_type_h">home</label>
<input type="radio" id="add_type_w" name="add_type" value="work" />
<label for="add_type_w">work</label>
<input type="radio" id="add_type_o" name="add_type" value="other" />
<label for="add_type_o">other</label>
</fieldset>
<fieldset>
<legend>Telephone Number:</legend><br/>
<input type="text" name="telnumber" size="30" maxlength="25" />
<input type="radio" id="tel_type_h" name="tel_type" value="home" checked />
<label for="tel_type_h">home</label>
<input type="radio" id="tel_type_w" name="tel_type" value="work" />
<label for="tel_type_w">work</label>
<input type="radio" id="tel_type_o" name="tel_type" value="other" />
<label for="tel_type_o">other</label>
</fieldset>
<fieldset>
<legend>Fax Number:</legend><br/>
<input type="text" name="faxnumber" size="30" maxlength="25" />
<input type="radio" id="fax_type_h" name="fax_type" value="home" checked />
<label for="fax_type_h">home</label>
<input type="radio" id="fax_type_w" name="fax_type" value="work" />
<label for="fax_type_w">work</label>
<input type="radio" id="fax_type_o" name="fax_type" value="other" />
<label for="fax_type_o">other</label>
</fieldset>
<fieldset>
<legend>Email Address:</legend><br/>
<input type="email" name="email" size="30" maxlength="150" />
<input type="radio" id="email_type_h" name="email_type" value="home" checked />
<label for="email_type_h">home</label>
<input type="radio" id="email_type_w" name="email_type" value="work" />
<label for="email_type_w">work</label>
<input type="radio" id="email_type_o" name="email_type" value="other" />
<label for="email_type_o">other</label>
</fieldset><br>
<form action="" method="POST"><input type="submit" value="Submit"></form>
END_OF_BLOCK;
} elseif ($_POST) {
    if (($_POST['fname'] == "") || ($_POST['lname'] == "")) {
        header("Location: addEntry.php");
        exit;
    }
    doDB();
    $safe_f_name = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $safe_l_name = mysqli_real_escape_string($mysqli, $_POST['lname']);
    $safe_address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $safe_city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $safe_state = mysqli_real_escape_string($mysqli, $_POST['state']);
    $safe_zipcode = mysqli_real_escape_string($mysqli, $_POST['zipcode']);
    $safe_tel_number = mysqli_real_escape_string($mysqli, $_POST['telnumber']);
    $safe_fax_number = mysqli_real_escape_string($mysqli, $_POST['faxnumber']);
    $safe_email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $add_master_sql = "INSERT INTO mastername (dateadded, datemodified, fname, lname)
VALUES (now(), now(), '".$safe_f_name."', '".$safe_l_name."')";
    $add_master_res = mysqli_query($mysqli, $add_master_sql) or die(mysqli_error($mysqli));
    $master_id = mysqli_insert_id($mysqli);
    if (($_POST['address']) || ($_POST['city']) || ($_POST['state']) || ($_POST['zipcode'])) {
        $add_address_sql = "INSERT INTO address (masterid, dateadded, datemodified,
address, city, state, zipcode, type) VALUES ('".$master_id."',
now(), now(), '".$safe_address."', '".$safe_city."',
'".$safe_state."' , '".$safe_zipcode."' , '".$_POST['add_type']."')";
        $add_address_res = mysqli_query($mysqli, $add_address_sql) or die(mysqli_error($mysqli));
    }
    if ($_POST['telnumber']) {
        $add_tel_sql = "INSERT INTO telephone (masterid, dateadded, datemodified,
telnumber, type) VALUES ('".$master_id."', now(), now(),
'".$safe_tel_number."', '".$_POST['tel_type']."')";
        $add_tel_res = mysqli_query($mysqli, $add_tel_sql) or die(mysqli_error($mysqli));
    }
    if ($_POST['faxnumber']) {
        $add_fax_sql = "INSERT INTO fax (masterid, dateadded, datemodified,
faxnumber, type) VALUES ('".$master_id."', now(), now(),
'".$safe_fax_number."', '".$_POST['fax_type']."')";
        $add_fax_res = mysqli_query($mysqli, $add_fax_sql) or die(mysqli_error($mysqli));
    }
    if ($_POST['email']) {
        $add_email_sql = "INSERT INTO email (masterid, dateadded, datemodified,
email, type) VALUES ('".$master_id."', now(), now(),
'".$safe_email."', '".$_POST['email_type']."')";
        $add_email_res = mysqli_query($mysqli, $add_email_sql) or die(mysqli_error($mysqli));
    }
    mysqli_close($mysqli);
    $display_block = "<p>Your entry has been added. Would you like to <a href=\"addEntry.php\">add
another</a>?...Would you like to return to the <a href='menu.html'>main menu</a>?</p>";
}
?>
<head>
    <title>Address Book - Add Entry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: lightgreen;">
    <div class="add">
        <h1>Add an Entry</h1>
        <?php echo $display_block; ?>
    </div>
</body>
</html>
