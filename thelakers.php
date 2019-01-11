<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
			
		$query= SELECT * FROM players WHERE id = '2';



			//while ($row = mysqli_fetch_assoc($result)) {
			//echo " Player's Name: " . $row['playername'] . "URL: ". $$row['url'] . "Player's Number: " . $row['playernumber'] . "Player's Position: " . $row['playerposition'] . "Points Per Game:" . $row['PPG'] . "Player's Height: " . $row['height'] . "Player's Weight: " . $row['weight'] . "Player's Age: " . $row['age'] . "Year Drafted: " . $row['yeardrafted'] . "Years in the League: " . $row['yearsintheleague'] . "About the Player: " . $row['playertext'];
		}
?>
<<<<<<< HEAD
SELECT * FROM players; 
=======

>>>>>>> 9db963047ec92872d6c6c3c431987b0bc441e929
