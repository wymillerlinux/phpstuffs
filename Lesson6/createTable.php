<?php
$mysqli = mysqli_connect("localhost", "root", "", "grocery");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $sql = "CREATE TABLE employee (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR (75))";
    $res = mysqli_query($mysqli, $sql);

if ($res === TRUE) {
    echo "Table employee successfully created.";
} else {
    printf("Could not create table: %s\n", mysqli_error($mysqli));
}

mysqli_close($mysqli);
}
?>
