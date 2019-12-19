<?php
session_start();
$servername = "localhost";
$username = "satinder";
$password = "sati1313";
$db="Canteen";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);


$myusername = $_POST['uname'];
$mypassword = $_POST['psw'];

$sql = "SELECT * FROM Admin where Name='$myusername' and Password='$mypassword'";
$result=$conn->query($sql);

$count=mysqli_num_rows($result);
if($count==0)
{
        header("location:Admin_Page.html");
}
$_SESSION["user"]=$_POST['uname'];
?>
<html>
	<head> 
		<meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="../../include/bootstrap.min.css">
             <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
               --> <script src="../../include/bootstrap.min.js"></script>
                
                <link rel='stylesheet' href='../../include/home.css'>
		<style>
			#left
			{
				
				width:20%;
				font-size:50px;
				color:#000000;
				padding-top:300px;
			}
			td{
				vertical-align:top;
			}
                </style>
        <script>

        </script>
        </head>
        <body>
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">(-: WELCOME :-) <?php echo $_SESSION['user']?></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                        <li class="nav-item">
                                                <a class="nav-link" href="logout.php">Admin Logout</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Contact us</a>
                                        </li>
                                </ul>
                        </div>
                </nav>
               <div class='container'> 
		<table border='2px' width='100%' height="100%">
			<tr>
			</tr>
			<tr>
				<td id='left'>
					<a href='../Breakfast/mybreakfast.php'>breakfast</a><br>
					<a href=''>Lunch</a><br>
					<a href=''>dinner</a><br>
				</td>
				<td>
					OVERVIEW
				</td>
			</tr>
			<tr>
			</tr>
		</table>
		</div>
        </body>
</html>

