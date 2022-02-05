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

		<title>Doctor | Add Student</title>
	
	</head>
	<body>
		<div id="app">		
<div class="app-content">
<?php include('navigationbar.php');?>
						
<div class="main-content" >
<div class="wrap-content container" id="container">
Students <form action=""></form>
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

    <div class="form-group">
    <label for="StudentName">
    Student Name
    </label>
    <input type="text" name="sname" class="form-control"  placeholder="Enter student Name" required>
    </div>

    <div class="form-group">
    <label for="studentnumber">
    Student Number
    </label>
    <input type="text" name="snumber" class="form-control"  placeholder="Enter Student Name" required>
    </div>

    <div class="form-group">
    <label for="program">
    program
    </label>
    <input type="text" name="program" class="form-control"  placeholder="Enter Program.." required>
    </div>

    <div class="form-group">
    <label for="scontact">
    Student Contact
    </label>
    <input type="text" name="scontact" class="form-control"  placeholder="Enter Student Contact no" required maxlength="10" stern="[0-9]+">
    </div>

    <div class="form-group">
    <label class="block">
    Gender
    </label>
    <div class="clip-radio radio-primary">
    <input type="radio" id="rg-female" name="gender" value="female" >
    <label for="rg-female">
    Female
    </label>
    <input type="radio" id="rg-male" name="gender" value="male">
    <label for="rg-male">
    Male
    </label>
    </div>
    </div>

    <div class="form-group">
    <label for="address">
    Student Address
    </label>
    <textarea name="saddress" class="form-control"  placeholder="Enter Student Address" required></textarea>
    </div>

    <div class="form-group">
    <label for="sage">
    Student Age
    </label>
    <input type="text" name="sage" class="form-control"  placeholder="Enter Student Age" required>
    </div>

    <div class="form-group">
    <label>
    Medical Background
    </label>
    <textarea type="text" name="medback" class="form-control"  placeholder="Enter Student Medical History(if any)"></textarea>
    </div>	
<!-- mubshealth student default password "password" -->
    <div class="form-group">
    <label>
    Default Password
    </label>
	<span class="input-icon">
	<input type="text" class="form-control" name="password" value="password" readonly>
	<i class="fa fa-lock"></i> </span>
	</div>

<button type="submit" name="addstudent" id="submit" class="btn btn-o btn-primary">
Add student
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
