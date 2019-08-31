<?php
	require_once 'config/connection.php';
	require_once 'config/functions.php';
	require_once 'config/key.php';
	$_SESSION['token'] = true;
	$name = $_SESSION['login']['name'];

	//Page setting
	$pageName = "Dashboard"; 
	$title = "TaxIt.ng || Dashboard" ;
require_once 'template/head.php';

?>
<body>
<a id="class">
      <nav>
        <ul class="menu">
          <li class="logo">
            <a href="#"><b>TaxItNG</b> </a>
          </li>
        </ul>
        <ul class="pull-right">
          <li class="dropdown">
            <a href="#"><?php echo $name;?></a>
            <div class="dropdown-content">
              <ul>
                <li><a class="dropcolor" href="#">Setting</a></li>
                <li><a class="dropcolor" href="index.php">
                    Logout
                </a>
            </li>
              </ul>
            </div>
          </li>
          <li class="toggle">
            <a href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </nav>
    </a>
    <div class="main flex-container">
      <?php require_once 'template/sidebar.php';?>
      <main id="Dasboard">
        <header>
          <h2>Profile</h2>
        </header>
        <section>
          <p>
            Profile Content
          </p>
        </section>
      </main>
    </div>
    <?php require_once 'template/footer.php';?>