<?php	
	require_once './config/config.php'; 
	//Page setting
	$pageName = "Login"; 
	$title = "TaxIt.ng || Login";
	$_SESSION['token'] = TOKEN;
	$loginFailed = "";
	$addmsg = "";
	if(isset($_SESSION['loginFailed']) && $_SESSION['loginFailed']){
		unset($_SESSION['loginFailed']);
		$loginFailed = "
			<div>
				Login Failed! Incorrect email or TIN
			</div>
			
		";
	}
	require_once 'template/head.php';
?>
<body>
<?php require_once 'template/nav.php'; ?>
<form method="POST" action="./config/login-process.php">
	<div class="form-container">
			<?php echo $loginFailed; ?>

                <h3 class="h3login">Login</h3>
                <div>
                    <label for="#email"><b>Email</b></label>
                    <div>
                        <input type="email" id="email" placeholder="Enter Email" name="email" required>
                    </div>
                    
                </div>
            
                <div>
                    <label for="#psw"><b>Tax Identification Number</b></label>
                    <div>
                        <input type="password" id="psw" placeholder="Enter TIN" name="tin" required>
                    </div>
                    
                </div>
            
                <button type="submit" name="token">Login</button>

                <div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                
                <div>
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot password?<a href="#"></a></span>
                </div>
        
        </div>
      
       
    </form>

<?php require_once 'template/footer.php';