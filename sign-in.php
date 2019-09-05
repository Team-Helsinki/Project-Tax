<?php require_once ('includes/session.php') ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php
if (logged_in()){
    redirect_to("index.php");
}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <link rel="stylesheet" href="form.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <title>Sign In</title>
</head>
<body>
<?php
$email = "";
$tin = "";

if (isset($_REQUEST['Email'])){
    $email = $_REQUEST['Email'];
}
if (isset($_REQUEST['tin'])){
    $tin = $_REQUEST['tin'];
}


$query = "SELECT id, email FROM profile WHERE email = '$email' AND tin = '$tin'";
$result = mysqli_query($connection,$query);

if (isset($_REQUEST['submit-login'])){
    if (mysqli_num_rows($result) == 1){
        $found_user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $found_user['id'];
        $_SESSION['email'] = $found_user['email'];

        redirect_to("index.php");
    }else {
        $message = "<p>Incorrect TIN or email</p>";
    }
}
else{
    //Form has not been submitted
    if (isset($_GET['logout']) && $_GET['logout'] == 1){
        $message = "<p>You are now Logged out</p>";
    }
    $tin = "";
    $email = "";
}

?>
	<div class="form-container">
		<div class="login">
			<form class="login-form" action="sign-in.php" method="post">
				<legend>
					<img src="https://res.cloudinary.com/dcczd9zz5/image/upload/v1567174130/ff_nbwkbr.png" width="300px">
				</legend>
				<h2 class="align-center signin-intro">Welcome Back</h2>
                <?php  if (!empty($message)){echo $message;} ?>
				<fieldset>
					<input type="text" name="Email" placeholder="E-mail Address">
					<input type="password" name="tin" placeholder="Tax Identification Number">
					<input type="checkbox"><span>Remember Me</span><br>
                    <input class="btn-in" name="submit-login" type="submit" value="Login">
					<h4>Don't Have an Account? <span><a href="sign-up.php">Sign Up</a></span></h4>
				</fieldset>
			</form>
		</div>
		<div class="aside">
			<img src="f.png" width="200px;">
		</div>
	</div>
</body>
</html>