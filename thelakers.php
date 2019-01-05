<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		if(isset($_POST['submit'])){
			$selected_val = $_POST['player'];
			echo " Player's Name: " . $selected_val['playername'] . "URL: ". $selected_val['url'] . "Player's Number: " . $selected_val['playernumber'] . "Player's Position: " . $selected_val['playerposition'] . "Points Per Game:" . $selected_val['PPG'] . "Player's Height: " . $selected_val['height'] . "Player's Weight: " . $selected_val['weight'] . "Player's Age: " . $selected_val['age'] . "Year Drafted: " . $selected_val['yeardrafted'] . "Years in the League: " . $selected_val['yearsintheleague'] . "About the Player: " . $selected_val['playertext'];
		}
?>