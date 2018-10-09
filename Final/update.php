<?php
session_start();
//connect to database
include 'connect.php';

//time to update tables, so check for required fields
	if (($_POST['fname'] == "") || ($_POST['lname'] == "")) {
		header("Location: updateEntry.php");
		exit;
	}
	//connect to database
	doDB();
	//create clean versions of input strings
	$master_id=$_SESSION["id"];
	$safe_f_name = mysqli_real_escape_string($mysqli, $_POST['fname']);
	$safe_l_name = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$safe_address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$safe_city = mysqli_real_escape_string($mysqli, $_POST['city']);
	$safe_state = mysqli_real_escape_string($mysqli, $_POST['state']);
	$safe_zipcode = mysqli_real_escape_string($mysqli, $_POST['zipcode']);
	$safe_tel_number = mysqli_real_escape_string($mysqli, $_POST['telnumber']);
	$safe_fax_number = mysqli_real_escape_string($mysqli, $_POST['faxnumber']);
	$safe_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$safe_note = mysqli_real_escape_string($mysqli, $_POST['note']);
	
	//update master_name table
	$add_master_sql = "UPDATE mastername SET dateadded=now(),datemodified=now(),fname='".$safe_f_name."',lname='". $safe_l_name."'".
	                   "WHERE id=".$master_id;
	$add_master_res = mysqli_query($mysqli, $add_master_sql) or die(mysqli_error($mysqli));

	if ($_SESSION["address"]=="true"){
		//update address table
		$add_address_sql = "UPDATE address SET masterid=".$master_id.",dateadded=now(),datemodified=now()".
							",address='". $safe_address ."', city='". $safe_city ."', state='". $safe_state .
							"', zipcode='". $safe_zipcode ."', type='".$_POST['add_type']."'".
							 "WHERE masterid=".$master_id;
		$add_address_res = mysqli_query($mysqli, $add_address_sql) or die(mysqli_error($mysqli));
		}
	 else if (($_POST['address']) || ($_POST['city']) || ($_POST['state']) || ($_POST['zipcode'])) {
		//add new record to table
		$add_address_sql = "INSERT INTO address (masterid, dateadded, datemodified, address, city, state, zipcode, type)  VALUES ('".
							$master_id."',now(), now(), '".$safe_address."', '".$safe_city.
							"','".$safe_state."' , '".$safe_zipcode."' , '".$_POST['add_type']."')";
		$add_address_res = mysqli_query($mysqli, $add_address_sql) or die(mysqli_error($mysqli));
	}

	if ($_SESSION["telephone"]=="true"){
		//update telephone table
		$add_tel_sql = "UPDATE telephone SET masterid=".$master_id.", dateadded=now(),datemodified=now()".
		                ",telnumber='".$safe_tel_number."',type='".$_POST['tel_type']."'".
		                 "WHERE masterid=".$master_id;
		$add_tel_res = mysqli_query($mysqli, $add_tel_sql) or die(mysqli_error($mysqli));
	   } else if ($_POST['telnumber']){
	   // add new record to telephone table
		$add_tel_sql = "INSERT INTO telephone (masterid, dateadded, datemodified,
		                telnumber, type)  VALUES ('".$master_id."', now(), now(),
		                '".$safe_tel_number."', '".$_POST['tel_type']."')";
		$add_tel_res = mysqli_query($mysqli, $add_tel_sql) or die(mysqli_error($mysqli));
	   }


	if ($_SESSION["fax"]=="true"){
		//update fax table
		$add_fax_sql = "UPDATE  fax SET masterid=".$master_id.", dateadded=now(),datemodified=now()".
		                ",faxnumber='".$safe_fax_number ."', type='". $_POST['fax_type']."'".
		                 "WHERE masterid=".$master_id;
		$add_fax_res = mysqli_query($mysqli, $add_fax_sql) or die(mysqli_error($mysqli));
	  } else if ($_POST['fax_number']) {
	  // add new record to fax table
		$add_fax_sql = "INSERT INTO fax (masterid, dateadded, datemodified,
		                faxnumber, type)  VALUES ('".$master_id."', now(), now(),
		                '".$safe_fax_number."', '".$_POST['fax_type']."')";
		$add_fax_res = mysqli_query($mysqli, $add_fax_sql) or die(mysqli_error($mysqli));
	  }

	if ($_SESSION["email"]=="true"){
		//update email table
		$add_email_sql = "UPDATE  email  SET masterid=".$master_id.", dateadded=now(),datemodified=now()".
		                ",email='".$safe_email."',type='".$_POST['email_type']."'".
		                 "WHERE masterid=".$master_id;
		$add_email_res = mysqli_query($mysqli, $add_email_sql) or die(mysqli_error($mysqli));
	}else if ($_POST['email']) {
	// add new record to email table
		$add_email_sql = "INSERT INTO email (masterid, dateadded, datemodified,
		                  email, type)  VALUES ('".$master_id."', now(), now(),
		                  '".$safe_email."', '".$_POST['email_type']."')";
		$add_email_res = mysqli_query($mysqli, $add_email_sql) or die(mysqli_error($mysqli));
	}
	mysqli_close($mysqli);
	$display_block = "<p>Your entry has been changed...Would you like to return to the <a href='menu.html'>main menu</a>?...<a href='updateEntry.php'>Change another record?</a></p>";

?>
<!DOCTYPE html>
<html>
<head>
<title>Address Update</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body style="background-color: lightblue;">
	<div class="update">
		<?php echo $display_block; ?>
	</div>
</body>
</html>