<?php
session_start();
error_reporting(0);
include('connect.php');
studentlogin()

?>
<!DOCTYPE html>
<html lang="en">
	<head>	<link href="../css/style.css" rel="stylesheet">

		<title>View | student Information</title>
	</head>
	<body>
		<div id="app">	
        
	
<div class="app-content">
<div class="main-content" 
<?php include('navigationbar.php');?>>
<div class="wrap-content container" id="container">
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<?php
$studentid=$_SESSION['id'];
$query=mysqli_query($con,"select * from tblstudent where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
<?php echo $row['sname']."'s information";?></td></tr>

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
    
    <th>Student Medical background(if any)</th>
    <td><?php  echo $row['smedback'];?></td>
     <th>Student added Date</th>
    <td><?php echo $row['CreationDate'];?></td>
  </tr>
 
<?php }?>
</table>
<?php  
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
<th>Medical Prescription</th>
<th>Examiner</th>
<th>Visit Date</th>
</tr>
<?php 
$ret=mysqli_query($con,"select * from tblmedicalback where studentid='".$_SESSION['id']."'");
// SELECT tblmedicalback.BloodPressure, tblmedicalback.Weight,
// tblmedicalback.Temperature,tblmedicalback.MedicalPres,tblmedicalback.CreationDate,
// doctors.doctorname
// FROM tblmedicalback
// INNER JOIN doctors ON Orders.ID=doctors.id where tblmedicalback.doctid=doctors ;
$cnt=1;
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['BloodPressure'];?></td>
 <td><?php  echo $row['Weight'];?></td>
  <td><?php  echo $row['Temperature'];?></td>
  <td><?php  echo $row['MedicalPres'];?></td> 
  <td>Dr. <?php  echo $row['doctorname'];?></td>
  <td><?php  echo $row['CreationDate'];?></td> 
</tr>
<?php 
$cnt++;} ?>
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