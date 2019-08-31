<?php
accessControl($connection);
	if(!isset($_SESSION['login'])){
		header("location: index.php");
		exit;
	}