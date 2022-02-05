<?php
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

    $sq="insert into students(Docid,sname,snumber,sprogram,scontact,sgender,sage,saddress,smedback,spassword) values('$docid','$sname','$snumber','$program','$scontact','$saddress','$sage','$gender','$medhis','$spassword')";
    $sql=mysqli_query($con,$sq);
    if($sql)
    {
        echo "<script>alert('Student info added Successfully');</script>";
        header('location:add-Student.php');

    }
}
//examin student
if(isset($_POST['examin']))
  {
    $viewstudentid=$_GET['viewid'];
    $docid=$_SESSION['id'];
    $docname=$_SESSION['name'];
    $bloodp=$_POST['bp'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
    $pres=$_POST['pres'];
    
    $query=mysqli_query($con, "insert into tblmedicalback(doctid,studentid,doctorname,BloodPressure,Weight,Temperature,MedicalPres)value('$docid','$viewstudentid','$docname','$bloodp','$weight','$temp','$pres')");
    if ($query==true) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='managestudent.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong.Record not added Please try again")</script>';
    }

  
}
// Doctors account login with mubs staffID or health centers ID
if(isset($_POST['logindoc']))
    {
    $sql=mysqli_query($con,"SELECT * FROM doctors WHERE docid='".$_POST['doctorid']."' and password='".$_POST['password']."'");
    $num=mysqli_fetch_array($sql);

    if($num>0)
        {
        $_SESSION['dctor_login']=$_POST['doctorid'];
        $_SESSION['id']=$num['id'];
        $_SESSION['name']=$num['doctorname'];
        echo "<script>window.location='index.php';</script>";    
    }
    else
        {
        echo "<script>window.location='login.php';</script>";

    }
}
// check staff/doctor's login info
function doc_login()
{
if($_SESSION['dctor_login']==0)
	{	
    echo "<script>window.location='login.php';</script>";
	}
}
