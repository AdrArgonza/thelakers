<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['player']) ? $_POST['player'] : false;
		if ($option){
			$testField = $_POST['player'];
			$query = "	select ". $testField . " from the_lakers;";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			echo " Player's Name: " . $row['playername'] . "URL: ". $$row['url'] . "Player's Number: " . $row['playernumber'] . "Player's Position: " . $row['playerposition'] . "Points Per Game:" . $row['PPG'] . "Player's Height: " . $row['height'] . "Player's Weight: " . $row['weight'] . "Player's Age: " . $row['age'] . "Year Drafted: " . $row['yeardrafted'] . "Years in the League: " . $row['yearsintheleague'] . "About the Player: " . $row['playertext'];
		}
?>