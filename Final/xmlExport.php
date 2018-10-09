<?php
    $mysqli = mysqli_connect("localhost:3306", "lisabalbach_mill1159", "CIT1802603", "lisabalbach_AddressBook");
	if (mysqli_connect_errno()) {
		printf("Oh no! The connection failed: %s\n", mysqli_connect_error());
		exit();
	}
	$get_master_name = "SELECT * FROM mastername";
	$get_master_res = mysqli_query($mysqli, $get_master_name) or die(mysqli_error($mysqli));
	$xml = "<contactList>";
	while($r = mysqli_fetch_array($get_master_res)){
	 $xml .= "<address>";
	 $xml .= "<id>".$r['id']."</id>";
	 $xml .= "<first>".$r['fname']."</first>";  
 	 $xml .= "<last>".$r['lname']."</last>";
 	 $xml .= "<addDt>".$r['dateadded']."</addDt>";  
  	 $xml .= "<modDt>".$r['datemodified']."</modDt>";    
     $xml .= "</address>";  
	}
$xml .= "</contactList>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("contacts.xml");
echo "<h2>contacts.xml has been created</h2>";
echo "<p><a href='xmlView.php'>[View Contact List]</a>";
?>
