<?php
session_start();
error_reporting(0);
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="../css/style.css" rel="stylesheet">

		<title>Admin-Login</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="../assets/mubslogo.png" alt="mubs icon" width="auto" height="150px">
				<a href="#"><h2>  MUBS HMS | Admin Login</h2></a>
				</div>
				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter Admin name and password to log in.<br />
								<span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password"><i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="admin_login">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> MUBS-hms</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>

	</body>
	<!-- end: BODY -->
</html>