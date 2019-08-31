<?php
    require_once './config/config.php'; 

	require_once 'template/head.php';    
?>
<body>
    <?php require_once 'template/nav.php'; ?>
    <div class="form-container">
<h3 class="h3login">Sign up</h3>
        <form method="POST" action="config/signup-process.php">
            <div>
                <label for="signup-email">Email</label><br>
                <input id="signup-email" type="email" name="email" placeholder="Please enter your emali" required>
            </div>
                <br>
            <div >
                <label for="signup-phone" >PhoneNo</label><br>
                <input id="signup-phone" type="text" name="phone" placeholder="Please enter your phoneNo" required>
            </div>
                <br>
            <div >
                <label for="signup-name" >Name</label><br>
                <input id="signup-name" type="text" name="name" placeholder="Please enter your name" required>
            </div>
                <br>
            <button type="submit" name="signup" name="token">Sign up</button>
        </form>
</div>
<?php require_once 'template/footer.php'; ?>

