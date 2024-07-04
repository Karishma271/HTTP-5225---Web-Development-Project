<?php
require('../reusable/connect.php');
include('../reusable/functions.php');

if (isset($_POST['update_dance'])) {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $gender = $_POST['Gender'];
    $fee = $_POST['Fee'];
    $danceInstructor = $_POST['Dance_Instructor'];
    $danceStyle = $_POST['Dance_Style'];
    $enrollmentDate = $_POST['Enrollment_Date'];

    $query = "UPDATE `feel_dance` SET 
        `Name`='" . mysqli_real_escape_string($connect, $name) . "',
        `Age`='" . mysqli_real_escape_string($connect, $age) . "',
        `Gender`='" . mysqli_real_escape_string($connect, $gender) . "',
        `Fee`='" . mysqli_real_escape_string($connect, $fee) . "',
        `Dance_Instructor`='" . mysqli_real_escape_string($connect, $danceInstructor) . "',
        `Dance_Style`='" . mysqli_real_escape_string($connect, $danceStyle) . "',
        `Enrollment_Date`='" . mysqli_real_escape_string($connect, $enrollmentDate) . "' 
        WHERE `id`='" . mysqli_real_escape_string($connect, $id) . "'";

    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here";
}
?>
