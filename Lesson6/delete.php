<?php
$mysqli = mysqli_connect("localhost", "root", "", "grocery");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $clean_text = mysqli_real_escape_string($mysqli, $_POST['empName']);
    $clean_text =test_input($clean_text);
    $sql = "DELETE FROM employee WHERE name='".$clean_text."'";
    $res = mysqli_query($mysqli, $sql);
    if ($res === TRUE) {
        echo "A record has been deleted.";
    } else {
        printf("Could not delete record: %s\n", mysqli_error($mysqli));
    }
    mysqli_close($mysqli);
    }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
