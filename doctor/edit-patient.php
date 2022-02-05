<?php
session_start();
error_reporting(0);
include('connect.php');
doc_login();

if(isset($_POST['submt']))
{	
$eid=$_GET['editid'];
$sname=$_POST['sname'];
$snumber=$_POST['snumber'];
$program=$_POST['program'];
$scontact=$_POST['scontact'];
$saddress=$_POST['saddress'];
$sage=$_POST['sage'];
$medhis=$_POST['medhis'];

$sql=mysqli_query($con,"update tblstudent set saddress='$saddress', sname='$sname',snumber='$snumber',sprogram='$program',scontact='$scontact',sage='$sage', smedback='$medhis' where ID='$eid'");
if($sql==true)
{
echo "<script>alert('student info updated Successfully');</script>";
header('location:manage-patient.php');

}else{
    echo "<script>alert('student info updated failed');</script>";
   
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <link href="../css/style.css" rel="stylesheet">
		<title>Doctor | Edit Student</title>
	</head>
	<body>
		<div id="app">		
<div class="app-content">
<?php include('navigationbar.php');?>		
						
<div class="main-content" >
<div class="wrap-content container" id="container">
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Student</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $edid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblstudent where ID='$edid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label>
Student Name
</label>
<input type="text" name="sname" class="form-control"  value="<?php  echo $row['sname'];?>" readonly='true'>
</div>
<div class="form-group">
<label>
student Number
</label>
<input type="text" name="snumber" class="form-control"  value="<?php  echo $row['snumber'];?>" readonly='true'>
</div>
<div class="form-group">
<label>
Program
</label>
<input type="text" name="program" class="form-control"  value="<?php  echo $row['sprogram'];?>" readonly='true'>
</div>
<div class="form-group">
<label for="fess">
students contact
</label>
<input type="text" name="scontact" class="form-control"  value="<?php  echo $row['scontact'];?>" readonly='true'>
</div>
<!--<div class="form-group">-->
<!--              <label class="control-label">Gender: </label>-->
<!--              <?php  if($row['sgender']=="Female"){ ?>-->
<!--              <input type="radio" name="gender" id="gender" value="Female" checked="true" readonly='true'>Female-->
<!--              <input type="radio" name="gender" id="gender" value="male" readonly='true'>Male-->
<!--              <?php } else { ?>-->
<!--              <label>-->
<!--              <input type="radio" name="gender" id="gender" value="Male" checked="true" readonly='true'>Male-->
<!--              <input type="radio" name="gender" id="gender" value="Female" readonly='true'>Female-->
<!--              </label>-->
<!--             <?php } ?>-->
<!--            </div>-->
<div class="form-group">
<label for="address">
    Student Address
</label>
<textarea name="saddress" class="form-control" readonly='true'><?php  echo $row['saddress'];?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Student Age
</label>
<input type="text" name="sage" class="form-control"  value="<?php  echo $row['sage'];?>" readonly='true'>
</div>
 <div class="form-group">
<label for="fess">
 Medical History
</label>
 <textarea type="text" name="medhis" class="form-control"  placeholder="Enter Student Medical History(if any)" required><?php  echo $row['smedback'];?></textarea> 
 </div>
<div class="form-group">
<label for="fess">
 Creation Date
</label>
<input type="text" class="form-control"  value="<?php  echo $row['CreationDate'];?>" readonly='true'>
</div>
<?php } ?>
<button type="submit" name="submt" class="btn btn-o btn-primary">
Update
</button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="panel panel-white">
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
