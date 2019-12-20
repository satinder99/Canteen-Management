<?php
session_start();
if($_SESSION['user']=='')
{
	header("location:../Login/Admin_page.html");
}
else
{
	
}
?>

<html>
<body>
	<form method='post' action='addLunch.php'>
	food ID : <input type='number' name='food_id' required><br>
	food name : <input type='text' name='f_name' required><br>
	food cost : <input type='number' name='cost'><br>
	time taken : <input type='number' name='time'><br>
	<button type='submit'>Submit</button>
	</form>
</body>
