<?php
  include('functions.php');
if(isset($_POST['add' ])){
    //print_r($_POST);
    //Array ( [schoolName] => Humber College [schoolLevel] => gtfa [phone] => 4378787063 [email] => karishmapatel273@gmail.com )
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
//connection string
include('../reusable/connect.php');

$query = "INSERT INTO schools (
    `School Name`, 
    `School Level`, 
    `Phone`, 
    `Email`) 
  VALUES (
  '" . mysqli_real_escape_string($connect, $schoolName) . "',
  '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
  '" . mysqli_real_escape_string($connect, $phone) . "',
  '" . mysqli_real_escape_string($connect, $email) . "')";


$school = mysqli_query($connect, $query);

if($school){
    set_message('School was added successfully!', 'success');
    header("Location: ../index.php"); 
}else{
    echo "Failed: " .mysqli_error($connect);
}
}else{
echo "You should not be here!";
}
?>