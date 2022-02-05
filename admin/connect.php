<?php
// connection
$con=mysqli_connect('localhost','id18198680_root','bX_SPQX|U4%*@LM5','id18198680_mubs_hc');


//addstudent
if(isset($_POST['addstudent']))
{
    $docid=$_SESSION['id'];
    $sname=$_POST['sname'];
    $snumber=$_POST['snumber'];
    $program=$_POST['program'];
    $scontact=$_POST['scontact'];
    $gender=$_POST['gender'];
    $saddress=$_POST['saddress'];
    $sage=$_POST['sage'];
    $medhis=$_POST['medback'];
    $spassword=$_POST['password'];

    $sq="insert into tblstudent(Docid,sname,snumber,sprogram,scontact,sgender,sage,saddress,smedback,spassword) values('$docid','$sname','$snumber','$program','$scontact','$saddress','$sage','$gender','$medhis','$spassword')";
    $sql=mysqli_query($con,$sq);
        if($sql)
        {
            echo "<script>alert('Student info added Successfully');</script>";
            header('location:add_student.php');

        }
}

// mubs docs specialisation
if(isset($_POST['addspec']))
{
$sql=mysqli_query($con,"insert into doctorSpecilization(specilization) values('".$_POST['doctorspecilization']."')");
$_SESSION['msg']="Doctor Specialization added successfully !!";
}

if(isset($_GET['deletespace']))
		  {
		          mysqli_query($con,"delete from doctorSpecilization where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }

          //admin information
if(isset($_POST['admin_login']))
{
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$mh_c_ms="index.php";
$_SESSION['adminlogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$mh_c_ms");
exit();
}
else
{

$host  = $_SERVER['HTTP_HOST'];
$_SESSION['adminlogin']=$_POST['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$_SESSION['errmsg']="Invalid username or password";
$mh_c_ms="login.php";
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$mh_c_ms");
exit();
}
// check adminlogin
}
function mubshcadmin()
{
if(strlen($_SESSION['adminlogin'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];   //hostname
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$mh_c_ms="login.php";		
		header("Location: http://$host$uri/$mh_c_ms");
	}
}
?>