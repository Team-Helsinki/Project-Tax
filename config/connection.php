<?php
	require_once 'config.php';
	require_once 'functions.php';

	$connection = mysqli_connect(SERVER, USER, PASSWORD);
	if($connection){
		if(!mysqli_select_db($connection, DATABASE)){
            echo 'check database connection';
		}
	}
	else {
		echo 'connection not established';
	}
	