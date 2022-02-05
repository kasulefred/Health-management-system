<?php
session_start();
error_reporting(0);
include('connect.php');

mubshcadmin();

if(isset($_POST['add']))
{	$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$staffid=$_POST['docid'];
$docaddress=$_POST['personaladdress'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$password=$_POST['npass'];
$sql=mysqli_query($con,"insert into doctors(specilization,doctorname,docid,address,contactno,docEmail,password) values('$docspecialization','$docname','$staffid','$docaddress','$doccontactno','$docemail','$password')");
if($sql==true)
{
echo "<script>alert('Doctor info added Successfully');</script>";
echo "<script>window.location.href ='manage_doctor.php'</script>";

}
else{
	echo "<script>alert('Doctor info added failed');</script>";
	
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="../css/style.css" rel="stylesheet">
		<title>Admin | Add Doctor</title>
	</head>
	<body>
		<div id="app">	
        <?php include('navigationbar.php');?>
	
			<div class="app-content">
				
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Doctor</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">


<div class="form-group">
    <label>
            Doctor Name
    </label>
<input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name" required>
</div>
<div class="form-group">
    <label for="mubsstaffid">
            Staff ID
    </label>
<input type="text" name="docid" class="form-control"  placeholder="Enter staff id" required>
</div>

<div class="form-group">
    <label for="address">
            Doctor personal Address
    </label>
<textarea name="personaladdress" class="form-control"  placeholder="Enter Doctor personal Address" required></textarea>
</div>
<div class="form-group">
<label for="fess">
            Doctor's Contact
    </label>
<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required>
</div>

<div class="form-group">
<label for="fess">
            Doctor Email
    </label>
<input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required >
<span id="email-availability-status"></span>
</div>

<div class="form-group">
    <label for="DoctorSpecialization">
        Doctor Specialization
    </label>
<select name="Doctorspecialization" class="form-control" required>
        <option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
                <option value="<?php echo htmlentities($row['specilization']);?>">
                    <?php echo htmlentities($row['specilization']);?>
                </option>
                <?php } ?>
                
            </select>
</div>


<div class="form-group">
    <label for="exampleInputPassword1">
            Password
    </label>
<input type="password" name="npass" class="form-control"  value="mubshealth" readonly>
</div>														


<button type="submit" name="add" id="submit" class="btn btn-o btn-primary">
    Add doctor
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
