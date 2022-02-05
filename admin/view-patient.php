<?php
session_start();
error_reporting(0);
include('connect.php');
mubshcadmin();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
  <link href="../css/style.css" rel="stylesheet">

		<title>Doctor | Manage Students</title>
	</head>
	<body>
		<div id="app">	
        <?php include('navigationbar.php');?>
	
<div class="app-content">
<div class="main-content" >
<div class="wrap-content container" id="container">
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Students</span></h5>
<?php
$viewstudentid=$_GET['viewid'];
$sq=mysqli_query($con,"select * from tblstudent where ID='$viewstudentid'");
$cnt=1;
while ($row=mysqli_fetch_array($sq)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Student Details</td></tr>

    <tr>
    <th scope>Student Name</th>
    <td><?php echo $row['sname'];?></td>
    <th scope>Student Number</th>
    <td><?php echo $row['snumber'];?></td>
  </tr>
  <tr>
    <th scope>Student Contact</th>
    <td><?php echo $row['scontact'];?></td>
    <th>Student Address</th>
    <td><?php echo $row['saddress'];?></td>
  </tr>
    <tr>
    <th>Gender</th>
    <td><?php echo $row['sgender'];?></td>
    <th>Age as of date Added</th>
    <td><?php  echo $row['sage'];?></td>
  </tr>
  
  <tr>
    
    <!-- <th>Student Medical background(if any)</th>
    <td>//<?php  //echo $row['smedback'];?>//</td> -->
     <th>Student added Date</th>
    <td><?php echo $row['CreationDate'];?></td>
  </tr>
 
<?php }?>
</table>
<?php  

$ret=mysqli_query($con,"select * from tblmedicalback  where studentID='$viewstudentid'");
$cnt=1;


 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="8" >Medical History</th> 
  </tr>
  <tr>
    <th>#</th>
<th>Blood Pressure</th>
<th>Weight</th>
<th>Body Temprature</th>
<th>Visit Date(As of)</th>
</tr>
<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['BloodPressure'];?></td>
 <td><?php  echo $row['Weight'];?></td>
  <td><?php  echo $row['Temperature'];?></td>
  <td><?php  echo $row['CreationDate'];?></td> 
</tr>
<?php $cnt=$cnt+1;} ?>
</table>
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