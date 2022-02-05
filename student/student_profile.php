<?php
session_start();
error_reporting(0);
include('connect.php');
studentlogin()

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="../css/style.css" rel="stylesheet">
		<title>student | Profile</title>
	</head>
	<body>

		<div id="app">		

<div class="container-fluid container-fullw bg-white">
<?php include('navigationbar.php');?>
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Students</span></h5>

<table class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th>Student Name</th>
<th>Student Number</th>
<th>Program </th>
<th>Gender </th>
<th>Contact </th>
<th>Address </th>
<th>Next of kin </th>
<th>N.O.K contact</th>
<th>Date added</th>
</tr>
</thead>
<tbody>
<?php
 $query=mysqli_query($con,"select * from tblstudent where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{?>
	<tr>
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
	
</tr>
<?php 
 }?></tbody>
</table>
&nbsp;
<form action="" method="post">
    <fieldset>
        <legend>Next of kin</legend>
        <input type="text" name="kin" placeholder="Next of kin.."required>
        <input type="text" name="kincontact" placeholder="N.O.K Contact.." required>    
        <button type="submit" name="sub">Update</button>    
    </fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>