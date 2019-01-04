<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['the_lakers']) ? $_POST['the_lakers'] : false;
		if ($option){
			$testField = $_POST['the_lakers'];
			$query = "	select ". $testField . " from players;";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row[$testField] . "<br>";
			}
		}
		$result->close();
		$conn->close();
?>