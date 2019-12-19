<?php
session_start();
?>		<script>
		/*function show()
			 {
				
			var i=0;
			for(i=0;i<5;i++)
			{

			var divi = document.createElement("div");
			divi.id="mydiv";
				
			document.getElementById('addHere').appendChild(divi);
	 		var para=document.createElement("p");
	 		alert("<?php echo $foodID;?>");
			var a="food ID : "+"<?php echo $foodID;?>";
		
			para.innerHTML=a;
			divi.appendChild(para);
			 
			}
			}
		 */	</script>


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
                                padding-top:100px;
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
		</style>
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
                                                <a class="nav-link" href="../Login/logout.php">Admin Logout</a>
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
				<td id='addHere'>
					<div class='text-right'>
                                  	<a href='./break.php'><button>add item</button></a>
					</div>
						       
				</td>
                        </tr>
                        <tr>
                        </tr>
		</table>
		</div>

	        </body>
</html>
<?php
	
			$servername = "localhost";
			$username = "satinder";
			$password = "sati1313";
			$db="Canteen";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $db);

			$sql = "SELECT * FROM Breakfast";
			$result=$conn->query($sql);
		/*	$no_rows=0;
			if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
					$no_rows+=1;
				}
			}
		 */
			if ($result->num_rows > 0) {
				// output data of each ro
					while($row = $result->fetch_assoc()) 
					{
					
						$foodID=$row['food_id'];
						$b_name=$row['b_name'];
						$time=$row['preparing_time'];
						$cost=$row['cost'];
				//		echo "<script> alert(' $foodID ') </script>";
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
							divi.appendChild(but);
                         
	 					 </script>";
	 				}
				}
			
			
?>

