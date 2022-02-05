<?php
session_start();
error_reporting(0);
include('connect.php');
doc_login();

if(isset($_POST['change']))
{
$sql=mysqli_query($con,"SELECT password FROM  doctors where password='".$_POST['currentpass']."' and id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$con=mysqli_query($con,"update doctors set password='".$_POST['newpass']."' where id='".$_SESSION['id']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
echo "<script>window.location='index.php'</script>";
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
<title>Doctor  | change Password</title>


</head>
<body>
<div id="app">		
<div class="app-content">

<?php include('navigationbar.php');?>

<!-- end: TOP NAVBAR -->
<div class="main-content" >
<div class="wrap-content container" id="container">
<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Doctor | Change Password</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Doctor</span>
</li>
<li class="active">
<span>Change Password</span>
</li>
</ol>
</div>
</section>
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
