    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php"><b>Lockertopia</b></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="">Home</a></li>
              <li><a href="groups.php">Groups</a></li>
              <li><a href="assigner.php">Assigner</a></li>
              <li><a href="support.php">Support</a></li>
              
              <?php include('dropdown.php'); ?>

             
            </ul>       
              <?php if ($_SESSION['loggedin'] == "@loggedout" or !isset($_SESSION['loggedin'])){
					echo '<ul class="nav pull-right">
								<li><p class="navbar-text pull-right">Please <a href="login.php">Login</a></p></li>
								<li class="divider-vertical"></li>
								<li><p class="navbar-text pull-right"><a href="submitAccount.php">Sign Up</a></p></li>
							</ul>';
					}else{
						echo '  <ul class="nav pull-right">
									<li id="fat-menu" class="dropdown">
									<a href="account.php" class="username" data-toggle="dropdown">'.$_SESSION['loggedin'].'<b class="caret"></b></a></p>
										<ul class="dropdown-menu">
											<li><a href="account.php">Account</a></li>
											<li><a href="groupManager.php">Group Manager</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="logout.php">Logout</a></li>
										</ul>
									</li>
								</ul>';
					  }
		   		?>  
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
   
