<?php

	function accessControl($con){
		$user = $_SESSION['login'];
		$tin = $user['tin'];		
		$query = "SELECT * FROM users WHERE tin = '{$user['tin']}'";
		$result = mysqli_query($con, $query);
		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$pass = $row[0]['tin'];
			// var_dump($pass);
			// exit;

		}
		else {
			echo "check back, our team are presently working on it. ";
		}
		
		if($tin !== $pass && $_SESSION['token'] = true){
			header("location: index.php");
			exit;
		}
	}
