<?php 
session_start();
error_reporting(0);
include('connect.php');
doc_login();

$sid=$_GET['deleteid'];
$squery=$con->query("DELETE FROM `tblstudent` WHERE `id`='$sid'");
if ($squery==true){
    echo "<script>alert('info deleted Successfully');</script>";
    echo "<script> window.location='managestudent.php';</script>";
}
else{
    echo "<script>alert('Failed to delete');</script>";
    header('location:managestudent.php');
}
?>