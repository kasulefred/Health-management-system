<?php
session_start();
error_reporting(0);
include('connect.php');
mubshcadmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/style.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<?php include('navigationbar.php');?>
<section>
<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Doctors</h2>
											<p class="cl-effect-1">
												<a href="manage_doctor.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
											Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
</a>
											</p>
										</div>
									</div>  
                                    <div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage students</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-patient.php">
<?php $result = mysqli_query($con,"SELECT * FROM tblstudent ");
$num_rows = mysqli_num_rows($result);
{
?>
Total students :<?php echo htmlentities($num_rows);  
} ?>		
</a>
											</p>
										</div>
									</div>
</section>
</body>
</html>