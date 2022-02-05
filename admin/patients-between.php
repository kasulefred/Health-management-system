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
		<title>Doctor | Students report</title>
	</head>
	<body>
		<div id="app">		
        <?php include('navigationbar.php');?>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Students <span class="text-bold">Report</span></h5>

<form role="form" method="post">
														<div class="form-group">
															<label for="exampleInputPassword1">
																 From Date:
															</label>
					<input type="date" class="form-control" name="fromdate" id="fromdate" value="" required='true'>
														</div>
		
													<div class="form-group">
															<label for="exampleInputPassword1">
																 To Date::
															</label>
					 <input type="date" class="form-control" name="todate" id="todate" value="" required='true'>

														</div>	
														
														
														<button type="submit" name="find" id="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
<?php
	$fdate=$_POST['fromdate'];
	$tdate=$_POST['todate'];
?>
                                                    <h5 style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<table class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th class="center">#</th>
<th>Student Name</th>
<th>Student Number</th>
<th>Program </th>
<th>Gender </th>
<th>Contact </th>
<th>Address </th>
<th>Creation Date </th>
<th>Updation Date </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
if (isset($_POST['find'])){
	$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
	$sql=mysqli_query($con,"select * from tblstudent where date(CreationDate) between '$fdate' and '$tdate'");
	$cnt=0;

while($row=mysqli_fetch_array($sql))
{

?>
	<tr>
	<td class="center"><?php echo $cnt;?>.</td>
	<td class="hidden-xs"><?php echo $row['sname'];?></td>
	<td><?php echo $row['snumber'];?></td>
	<td><?php echo $row['sprogram'];?></td>
	<td><?php echo $row['sgender'];?></td>
	<td><?php echo $row['scontact'];?></td>
	<td><?php echo $row['saddress'];?></td>
	<td><?php echo $row['CreationDate'];?></td>
	<td><?php echo $row['UpdationDate'];?>
	</td>
	<td>

 <a href="view-patient.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i>View</a>

</td>
</tr>
<?php 
$cnt++;
 }
}?></tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>