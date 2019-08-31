<?php
    require_once 'config/connection.php';
    $userTin = base64_decode($_GET['welcome']);
    $userName = base64_decode($_GET['user']);
    
    require_once 'template/head.php';
?>

<body>
    <?php require_once 'template/nav.php'; ?>
    <div class="form-container">    
        <h2>Welcome <?php echo $userName; ?></h2>
        <h3>Your Tax Identification Number:  <small style="font-weight: 100; font-size:26px;"><em><?php echo $userTin; ?></em></small> please keep safe</h3>
        <p>
            Please click here to: <a href="login.php" style="color: gray;">Login</a>
        </p>
    </div>
    
    <?php require_once 'template/footer.php'; ?>
