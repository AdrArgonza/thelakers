<?php
		include_once 'TheStartingLineup.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);

		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['players']) ? $_POST['players']:false;
		if ($option){
			$testField = $_POST['players'];
			$query = "select * from players where playername = '" . $testField."';";
			$result = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_assoc($result)) {
				echo " Player's Name: " . $row['playername']."<br>" ;
				echo "URL: ". $row['url']."<br>" ;
				echo "Player's Number: " . $row['playernumber']."<br>" ;
				echo "Player's Position: " . $row['playerposition']."<br>" ;
				echo "Points Per Game:" . $row['PPG']."<br>" ;
				echo "Player's Height: " . $row['height']."<br>" ;
				echo "Player's Weight: " . $row['weight']."<br>" ;
				echo "Player's Age: " . $row['age']."<br>" ;
				echo "Year Drafted: " . $row['yeardrafted']."<br>" ;
				echo "Years in the League: " . $row['yearsintheleague']."<br>" ;
				echo "About the Player: " . $row['playertext']."<br>" ;
		}
  	}
?>
