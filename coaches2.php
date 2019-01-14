<?php
	include_once 'Coaches.html';
	require 'coaches.php';
	$conn = mysql_connect($host, $user, $pass, $db, $port);

	if($conn->connect_error) die($conn->connect_error);
	$option = isset($_POST['Coaches']) ? $_POST['Coaches']:false;
	if ($option) {
		$testField = $_POST['Coaches'];
		$query = "select * from Coaches where Coaches = '" . $testField."';";
		$result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            echo "Coaches:   " . $row['Coaches']."<br>" ;
            echo "Post:    ". $row['Post']."<br>" ;
            
          }
        }
?>