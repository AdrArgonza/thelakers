<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		echo $_Post["players"];
		$option = isset($_POST['players']) ? $_POST['players']:false;
		echo $option;
		if ($option){
		$testField = $_POST['players'];
		$query = "select * from playername where players = '" . $testField."';";
		$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
			echo " Player's Name: " . $row['playername'] . "URL: ". $$row['url'] . "Player's Number: " . $row['playernumber'] . "Player's Position: " . $row['playerposition'] . "Points Per Game:" . $row['PPG'] . "Player's Height: " . $row['height'] . "Player's Weight: " . $row['weight'] . "Player's Age: " . $row['age'] . "Year Drafted: " . $row['yeardrafted'] . "Years in the League: " . $row['yearsintheleague'] . "About the Player: " . $row['playertext'];
}
?>
