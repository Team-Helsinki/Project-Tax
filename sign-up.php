<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/tin-generator.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<?php

global  $name, $email, $phone;
if (isset($_REQUEST['submit-signup'])){

    $name = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $phone = $_REQUEST['phone'];

    $query = "SELECT email FROM profile WHERE email = '$email'";
    $result = mysqli_query($connection,$query);

    if (mysqli_num_rows($result) > 0){
        $message = "<h5>This Email has been used.</h5>";
    }
    else{

        $tin = getToken(10);

        $query = "INSERT INTO profile (name, email, phone, tin) VALUES ('$name','$email','$phone', '$tin')";

        if (mysqli_query($connection,$query)){
            $message = "<h5> Welcome {$name} your account has been created</h5>"; // shows the user that the account has been created also showing the full name
            $tin_message = "<h5> Your Tax Identification Number is: {$tin}. Please Keep it Confidential</h5>"; //Shows the user their TIN

        }else{
            $message = "<h5>An Error has occurred</h5>";
        }
    }
    mysqli_close($connection);
}
?>
	<div class="form-container">
		<div class="signup">
			<form class="signup-form" action="sign-up.php" method="post" name="signup_form" onsubmit="validateForm()"  id="signup_form">
				<legend>
					<img src="https://res.cloudinary.com/dcczd9zz5/image/upload/v1567174130/ff_nbwkbr.png" width="300px">
				</legend>
				<h2 class="align-center">Please Enter required Details</h2>
                <div id="messageDiv">
                    <?php  if (!empty($message)){echo $message;} ?>
                    <?php  if (!empty($tin_message)){echo $tin_message;} ?>
                </div>
				<fieldset>
					<input type="text" name="Name" placeholder="Full Name" required>
					<input type="Email" name="Email" placeholder="Email" required>
					<input type="tel" name="phone" placeholder="Phone Number +234xxxxxxxxxx" required>
					<input type="checkbox" required><span>I agree to the terms and Privacy Policy</span><br>
					<input class="btn-in" name="submit-signup" type="submit" value="Sign Up">
				</fieldset>

                <script src="includes/validateForm.js"></script>
			</form>
		</div>
		<div class="aside">
			<img src="f.png" width="200px;">
		</div>

	</div>



</body>
</html>