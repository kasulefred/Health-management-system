<?php
session_start();
error_reporting(0);
include('connect.php');
doc_login();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
  <link href="../css/style.css" rel="stylesheet">
		<title>Doctor | View Students</title>
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
<h5 class="over-title margin-bottom-15">Examine <span class="text-bold">Students</span></h5>
<?php
$viewstudentid=$_GET['viewid'];
$sq=mysqli_query($con,"select * from tblstudent where ID='$viewstudentid'");
$cnt=0;
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
$ret=mysqli_query($con,"select * from tblmedicalback  where studentID='$viewstudentid'");

echo $docname;
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
<?php $cnt=$cnt+1;} ?>
</table>
&nbsp;
<?php  ?>

<table class="">

 <form method="post" >
      <tr>
    <th>Blood Pressure :</th>
    <td>
    <input name="bp" placeholder="Blood Pressure" class="form-control wd-450" required></td>
  </tr>  
  <tr>                        
      <th>Weight :</th>
    <td>
    <input name="weight" placeholder="Weight" class="form-control wd-450" required></td>
  </tr>
  <tr>
    <th>Body Temprature :</th>
    <td>
    <input name="temp" placeholder="Temperature" class="form-control wd-450" required></td>
  </tr>
                         
     <tr>
    <th>Prescription :</th>
    <td>
    <textarea name="pres" placeholder="Medical Prescription" rows="12" cols="14" class="form-control wd-450" required></textarea></td>
  </tr>  
   
</table>
</div>
<div class="modal-footer">
 <button type="submit" name="examin" class="btn btn-primary">Submit</button>
  
  </form>
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