<?php
require('../reusable/connect.php');
include('../reusable/functions.php');

if (isset($_POST['add'])) {
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $gender = $_POST['Gender'];
    $fee = $_POST['Fee'];
    $instructor = $_POST['Dance_Instructor'];
    $style = $_POST['Dance_Style'];
    $enrollment_date = $_POST['Enrollment_Date'];

    $query = "INSERT INTO feel_dance (`Name`, `Age`, `Gender`, `Fee`, `Dance_Instructor`, `Dance_Style`, `Enrollment_Date`)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, 'sisssss', $name, $age, $gender, $fee, $instructor, $style, $enrollment_date);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        set_message('Dance record was added successfully!', 'success');
        header("Location: ../index.php");
        exit;
    } else {
        echo "Failed to add dance record: " . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "You should not be here!";
}
?>
