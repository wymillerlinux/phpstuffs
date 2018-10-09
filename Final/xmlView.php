<?php
$xmlList = simplexml_load_file("contacts.xml") or die("Oh no! The XML file does not exist!");
foreach($xmlList->address as $addr){
	$id=$addr->id;
	$first=$addr->first;
	$last=$addr->last;
	$added=$addr->addDt;
	$mod=$addr->modDt;	
	echo "<div style='width:40%'><p style='color:green;border-bottom:2px green solid;font-weight:900;'>ID: " . $id . "<br>" .
	"<span style='background-color:white;color:black;'>Name: " . $first . " " . $last . "<br>" .
	"Date Added: " . $added . "</span></p></div>";
}
?>
