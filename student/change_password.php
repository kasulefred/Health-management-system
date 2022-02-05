<?php
session_start();
error_reporting(0);
include('connect.php');
studentlogin();

if(isset($_POST['change']))
{
$sql=mysqli_query($con,"SELECT spassword FROM  tblstudent where spassword='".$_POST['currentpass']."' and ID='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$con=mysqli_query($con,"update tblstudent set spassword='".$_POST['newpass']."' where ID='".$_SESSION['id']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="../css/style.css" rel="stylesheet">

<title>student  | change Password</title>


</head>
<body>
<div id="app">		
<div class="app-content">

<?php include('navigationbar.php');?>>
<div class="main-content" >
<div class="wrap-content container" id="container">
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">

<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Change Password</h5>
</div>
<div class="panel-body">
<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
<?php echo htmlentities($_SESSION['msg1']="");?></p>	
<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
<div class="form-group">
<label for="exampleInputEmail1">
Current Password
</label>
<input type="password" name="currentpass" class="form-control"  placeholder="Enter Current Password" required>
</div>
<div class="form-group">
<label for="exampleInputPassword1">
New Password
</label>
<input type="password" name="newpass" class="form-control"  placeholder="New Password" required>
</div>

<button type="text" name="change" class="btn btn-o btn-primary">
Submit
</button>
</form>
</div>
</div>
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
