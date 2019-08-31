<?php
    require_once 'connection.php';    
    
	if(isset($_POST['token']) && $_POST['token'] = $_SESSION['token']){
		unset($_SESSION['token']);
		$email = $_POST['email'];
        $password = $_POST['tin'];
		
		$query = "select * from users WHERE email = '$email' AND tin = '$password'";
		$result = mysqli_query($connection, $query);
		if($result){
            if(mysqli_num_rows($result)){
                while ($row = mysqli_fetch_assoc($result)) {
					$user["id"] =  $row['id'];
					$user["tin"] =  $row['tin'];
					$user["email"] =  $row['email'];
					$user["name"] =  $row['name'];
					$_SESSION['login'] = $user;
                }

				header('Location: ../dashboard.php');
				exit;

			}
			else {
				$_SESSION['loginFailed'] = true;
				header("Location: login.php");
				exit;
			}
		}
		else {
            echo "Please check back, our team are currently work on it.";
		}
    }