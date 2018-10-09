<?php
$mysqli = mysqli_connect("localhost", "root", "", "grocery");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $clean_old_text = mysqli_real_escape_string($mysqli, $_POST['empName']);
    $clean_old_text =test_input($clean_old_text);
    $clean_new_text = mysqli_real_escape_string($mysqli, $_POST['newName']);
    $clean_new_text =test_input($clean_new_text);
    $sql = "UPDATE employee SET name='".$clean_new_text."' WHERE name='" . $clean_old_text ."'";
    $res = mysqli_query($mysqli, $sql);
    if ($res === TRUE) {
        echo "The record has been updated.";
    } else {
        printf("The record could not be updated: %s\n", mysqli_error($mysqli));
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
