<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
			$query = "SELECT * FROM players";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			echo " Player's Name: " . $row['playername'] . "URL: ". $row['url'] . "Player's Number: " . $row['playernumber'] . "Player's Position: " . $row['playerposition'] . "Points Per Game:" . $row['PPG'] . "Player's Height: " . $row['height'] . "Player's Weight: " . $row['weight'] . "Player's Age: " . $row['age'] . "Year Drafted: " . $row['yeardrafted'] . "Years in the League: " . $row['yearsintheleague'] . "About the Player: " . $row['playertext'];
		}
?>