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

header("location:../Breakfast/mybreakfast.php");
?>
<html>
	<head> 
		<meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="../include/bootstrap.min.css">
             <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
               --> <script src="../include/bootstrap.min.js"></script>
                
                <link rel='stylesheet' href='../include/home.css'>
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
			 #mydiv
                        {
                                height:200px;
                                width:260px;
                                border:4px solid black;
                                float:left;
                                margin-right:20px;
                                margin-bottom:20px;
                        }
                        .main
                        {
                                float:left;
                                border:2px solid black;
                        }
                        #div1
                        {
                                width:80%;
                        }
                        #div2
                        {
                                margin-top:200px;
                                height:500px;
                                width:18%;
                        }
                        .additem
                        {
                                margin-bottom:30px;
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
               <div class='container-fluid'> 
		<table width='100%' height="100%">
			<tr>
			</tr>
			<tr>
				<td id='left'>
					<a href='../Breakfast/mybreakfast.php'>breakfast</a><br>
					<a href='../Lunch/mylunch.php'>Lunch</a><br>
					<a href='../Dinner/mydinner.php'>dinner</a><br>
				</td>
				<td>
					OVERVIEW
				</td>
			</tr>
			<tr>
			</tr>
		</table>
		</div>
 		  <div id='div2' class='main'>
                        <pre><h1>    CART</h1></pre>
                        <h3>Total Amount  : <p id='amount'></p></h3>
                </div>

        </body>
</html>

<?php 

 $sql = "SELECT * FROM Breakfast LIMIT 3";
                        $result=$conn->query($sql);

                        if ($result->num_rows > 0) {
                                // output data of each ro
                                        while($row = $result->fetch_assoc())
                                        {

                                                $foodID=$row['food_id'];
                                                $b_name=$row['b_name'];
                                                $time=$row['preparing_time'];
                                                $cost=$row['cost'];
                                //              echo "<script> alert(' $foodID ') </script>";
                                                echo "<script> var i=0;
                                                         var divi = document.createElement('div');
                                                        divi.id='mydiv';

                                                         document.getElementById('addHere').appendChild(divi);
                                                        var para=document.createElement('p');

                                                        var a='food ID : '+'$foodID'+' <br>'+'BREAKFAST NAME : '+'$b_name'+'<br>'+'COST : $cost'+' <br>'+' TIME : $time';

                                                         para.innerHTML=a;
                                                        divi.appendChild(para);
                                                        var but=document.createElement('button');
                                                        but.innerHTML='Add to cart';
                                                        but.onclick='function aa(){alert(1);}';
                                                        but.id='foodbutton';
                                                        but.class='btn-success';
                                                        divi.appendChild(but);

                                                 </script>";
                                        }
                                }


?>
