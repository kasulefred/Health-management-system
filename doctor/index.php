<?php
session_start();
error_reporting(0);
include('connect.php');
doc_login();

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
<div id="app">	
<div class="app-content">
<?php include('navigationbar.php');?>		

<div class="main-content" >
<div class="wrap-content container" id="container">
<div class="container-fluid container-fullw bg-white">
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-white no-radius text-center">
            <div class="panel-body">
                <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                <h2 class="StepTitle">My Profile</h2>
                <?php $query=mysqli_query($con,"select * from doctors where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['doctorname'];
}?>
                <p class="links cl-effect-1">
                    <a href="managestudent.php">
                        Manage/work on a student
                    </a>
                </p>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>
</div>
</div>

</body>
</html>