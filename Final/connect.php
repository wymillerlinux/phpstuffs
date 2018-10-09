<?php

function doDB(){
    global $mysqli;

    $mysqli = mysqli_connect("localhost:3306", "lisabalbach_mill1159", "CIT1802603", "lisabalbach_AddressBook");

    if (mysqli_connect_errno()){
        printf("Oh no! This server doesn't exist.");
        exit();
    }
}

?>
