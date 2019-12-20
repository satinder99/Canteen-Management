<?php
session_start();
?>

<?php
        $servername = "localhost";
        $username = "satinder";
        $password = "sati1313";
        $db="Canteen";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

                $myitemname = $_POST['name'];
        
                $sql = "INSERT INTO test values('$myitemname')";
                $result=$conn->query($sql);
	
	header("location:dinner.php");
?>

