<?php
session_start();
?>

<?php
/*	$servername = "localhost";
        $username = "satinder";
        $password = "sati1313";
        $db="Canteen";
        // Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	$sql = "select * from test";
        $result=$conn->query($sql);
	echo "<table>";
	while($row = $result->fetch_assoc())
	{echo "<tr>";
		echo "<pre>" . print_r($row, 1) . "</pre>";
	 echo "</tr>";
	}
	echo "</table>";
 */
?>
<html>
<head>
	<style>
	#division
	{
		height:200px;
		width:500px;
		border:1px solid white;
		padding:10px;	
	}
	body
	{
		background-image:url("../../include/870777.jpg");
		background-size: cover;
		color:white;
	}
	ul li
	{
		color:white;
	}
	</style>
	
</head>
<body>
<table>
	<tr>
	</tr>
	<tr>
		<td>	
			<ul>
				<li style='font-size:40px;color:white'><a href="../Breakfast/breakfast.php">Breakfast</a></li>
				<li style='font-size:40px' ><a href="../Lunch/mylunch.php">Lunch</a></li>
				<li style='font-size:40px'><a href=''>Dinner</a></li>
			</ul>
		</td>
		<td id='col2'><button onclick=createChild()>Add new item</button>
		</td>
	</tr>
</table>
<script type="text/javascript">
function createChild()
	{
	var myform = document.createElement('form');
	myform.method='POST';
	myform.action='./submitData.php';
	myform.id='Form';
	document.getElementById('col2').appendChild(myform);
	
	var mydiv=document.createElement('div');
	mydiv.id='division';
	document.getElementById('Form').appendChild(mydiv);

	var mynameLabel=document.createElement('label');
	mynameLabel.innerHTML='Enter item name :     ';
	document.getElementById('division').appendChild(mynameLabel);

	var myname=document.createElement('input');
	myname.type='text';
	myname.id='nameField';
	myname.name='name';
	document.getElementById('division').appendChild(myname);

	var mysub=document.createElement('button');
	mysub.innerHTML='submit';
	mysub.type='submit';
	document.getElementById('division').appendChild(mysub);

}
</script>

</body>
</html>

