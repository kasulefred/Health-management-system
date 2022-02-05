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
		<title>Doctor | Manage Students</title>
	</head>
	<body>
		<div id="app">		

<div class="container-fluid container-fullw bg-white">
<?php include('navigationbar.php');?>		

<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Students</span></h5>

<form role="form" method="post" name="search">
<div class="form-group">
<label>
Search by Name/Student No.
</label>
<input type="text" name="src" class="form-control" value="" required='true'>
</div>
<button type="submit" name="search" id="srch" class="btn btn-o btn-primary">
Search
</button>
<button type="submit" name="" id="srch" class="btn btn-o btn-primary" onclick="window.location='managestudent.php'">
refresh
</button>
</form>		

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
<th>Next of kin </th>
<th>N.O.K contact</th>
<th>Creation Date </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
if(isset($_POST['search']))
{ 
	$sdata=$_POST['src'];
	$sql=mysqli_query($con,"select * from tblstudent where sname LIKE '%$sdata%' or snumber like '%$sdata%'");

}
else{
	$sql=mysqli_query($con,"select * from tblstudent");
}
$cnt=1;
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
	<td><?php echo $row['next_of_kin'];?></td>
	<td><?php echo $row['next_of_kin_number'];?></td>
	<td><?php echo $row['CreationDate'];?></td>
	</td>
	<td>

<a href="edit-patient.php?editid=<?php echo $row['ID'];?>"><i class="fa fa-edit">Edit</i></a> || <a href="view-patient.php?viewid=<?php echo $row['ID'];?>">View<i class="fa fa-eye"></i></a> || <a href="delete.php?deleteid=<?php echo $row['ID'];?>">delete<i class="fa fa-eye"></i></a>

</td>
</tr>
<?php 
$cnt++;
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