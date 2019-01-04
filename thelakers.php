<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
			$query = "SELECT * FROM players";
			$result = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			echo . $row['playername'] . . $row['url'] . . $row['playernumber'] . . $row['playerposition'] . . $row['PPG'] . . $row['height'] . . $row['weight'] . . $row['age'] . . $row['yeardrafted'] . . $row['yearsintheleague'] . . $row['playertext'];
		}
?>