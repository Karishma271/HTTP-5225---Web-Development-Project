<?php
include('../reusable/connect.php');
include('../reusable/functions.php');

if (isset($_POST['delete_dance'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM feel_dance WHERE `id` = '" . mysqli_real_escape_string($connect, $id) . "'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        set_message('Dance record was deleted successfully!', 'danger');
        header('Location: ../index.php');
        exit;
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "Not Authorized";
}
?>
