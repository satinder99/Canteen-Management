<?php
session_start();
if($_SESSION['user']=='')
{
	header("location:../Login/Admin_Page.html");
}
$servername = "localhost";
$username = "satinder";
$password = "sati1313";
$db="Canteen";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$food_id=$_POST['food_id'];
$f_name=$_POST['f_name'];
$time=$_POST['time'];
$cost=$_POST['cost'];

$sql="insert into Lunch values('$food_id','$f_name','$time','$cost')";

if ($conn->query($sql) === TRUE) {
	header('location:mylunch.php');
}
else
{
	header("location:lu.php");
}
?>
