<?php
include 'connect.php';
doDB();
if (!$_POST) {
    $display_block = "<h1>Select an Entry</h1>";
    $get_list_sql = "SELECT id,
CONCAT_WS(', ', lname, fname) AS display_name
FROM mastername ORDER BY lname, fname";
    $get_list_res = mysqli_query($mysqli, $get_list_sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($get_list_res) < 1) {
        $display_block .= "<p><em>Sorry, no records to select!</em></p>";
    } else {
        $display_block .= "
<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">
<p><label for=\"sel_id\">Select a Record:</label><br/>
<select id=\"sel_id\" name=\"sel_id\" required=\"required\">
<option value=\"\">‐‐ Select One ‐‐</option>";
        while ($recs = mysqli_fetch_array($get_list_res)) {
            $id = $recs['id'];
            $display_name = stripslashes($recs['display_name']);
            $display_block .= "<option value=\"".$id."\">".$display_name."</option>";
        }
        $display_block .= "
</select></p>
<button type=\"submit\" name=\"submit\" value=\"view\">View Selected Entry</button>
</form>";
    }
    mysqli_free_result($get_list_res);
} elseif ($_POST) {
    if ($_POST['sel_id'] == "") {
        header("Location: selEntry.php");
        exit;
    }
    $safe_id = mysqli_real_escape_string($mysqli, $_POST['sel_id']);
    $get_master_sql = "SELECT concat_ws(' ', fname, lname) as display_name
FROM mastername WHERE id = '".$safe_id."'";
    $get_master_res = mysqli_query($mysqli, $get_master_sql) or die(mysqli_error($mysqli));
    while ($name_info = mysqli_fetch_array($get_master_res)) {
        $display_name = stripslashes($name_info['display_name']);
    }
    $display_block = "<h1>Showing Record for ".$display_name."</h1>";
    mysqli_free_result($get_master_res);
    $get_addresses_sql = "SELECT address, city, state, zipcode, type
FROM address WHERE masterid = '".$safe_id."'";
    $get_addresses_res = mysqli_query($mysqli, $get_addresses_sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($get_addresses_res) > 0) {
        $display_block .= "<p><strong>Addresses:</strong><br/>
<ul>";
        while ($add_info = mysqli_fetch_array($get_addresses_res)) {
            $address = stripslashes($add_info['address']);
            $city = stripslashes($add_info['city']);
            $state = stripslashes($add_info['state']);
            $zipcode = stripslashes($add_info['zipcode']);
            $address_type = $add_info['type'];
            $display_block .= "<li>$address $city $state $zipcode ($address_type)</li>";
        }
        $display_block .= "</ul>";
    }
    mysqli_free_result($get_addresses_res);
    $get_tel_sql = "SELECT telnumber, type FROM telephone
WHERE masterid = '".$safe_id."'";
    $get_tel_res = mysqli_query($mysqli, $get_tel_sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($get_tel_res) > 0) {
        $display_block .= "<p><strong>Telephone:</strong><br/>
<ul>";
        while ($tel_info = mysqli_fetch_array($get_tel_res)) {
            $tel_number = stripslashes($tel_info['telnumber']);
            $tel_type = $tel_info['type'];
            $display_block .= "<li>$tel_number ($tel_type)</li>";
        }
        $display_block .= "</ul>";
    }
    mysqli_free_result($get_tel_res);
    $get_fax_sql = "SELECT faxnumber, type FROM fax
WHERE masterid = '".$safe_id."'";
    $get_fax_res = mysqli_query($mysqli, $get_fax_sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($get_fax_res) > 0) {
        $display_block .= "<p><strong>Fax:</strong><br/>
<ul>";
        while ($fax_info = mysqli_fetch_array($get_fax_res)) {
            $fax_number = stripslashes($fax_info['faxnumber']);
            $fax_type = $fax_info['type'];
            $display_block .= "<li>$fax_number ($fax_type)</li>";
        }
        $display_block .= "</ul>";
    }
    mysqli_free_result($get_fax_res);
    $get_email_sql = "SELECT email, type FROM email
WHERE masterid = '".$safe_id."'";
    $get_email_res = mysqli_query($mysqli, $get_email_sql) or die(mysqli_error($mysqli));
    if (mysqli_num_rows($get_email_res) > 0) {
        $display_block .= "<p><strong>Email:</strong><br/>
<ul>";
        while ($email_info = mysqli_fetch_array($get_email_res)) {
            $email = stripslashes($email_info['email']);
            $email_type = $email_info['type'];
            $display_block .= "<li>$email ($email_type)</li>";
        }
        $display_block .= "</ul>";
    }
    mysqli_free_result($get_email_res);
    $display_block .= "<br/>
<p style=\"text‐align: center\"><a href=\"addEntry.php?masterid=".$_POST['sel_id']."\">add info</a>
...<a href=\"".$_SERVER['PHP_SELF']."\">select another</a>...<a href='menu.html'>main menu</a>
</p>";
}
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Address Book - Entered Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: lightyellow;">
    <div class="add">
        <?php echo $display_block ?>
    </div>
</body>
</html>