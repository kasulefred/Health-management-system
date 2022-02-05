<?php   
$con=mysqli_connect('localhost','id18198680_root','bX_SPQX|U4%*@LM5','id18198680_mubs_hc');

if(isset($_POST['sub']))
{	
$eid=$_SESSION['id'];
$nok=$_POST['kin'];
$nokcontact=$_POST['kincontact'];

$sql=mysqli_query($con,"update tblstudent set next_of_kin='$nok',next_of_kin_number='$nokcontact' where ID='$eid'");
if($sql)
{
echo "<script>alert('Next of Kin info updated Successfully');</script>";
header('location:./student_profile.php');

}
}

//student login
// with:  
    //MUBS student registration number/ students number and 
    //default password.
    //wordpress reference
if(isset($_POST['std_login']))
    {
    $sql=mysqli_query($con,"SELECT * FROM tblstudent WHERE snumber='".$_POST['student_number']."' and spassword='".$_POST['password']."'");
    $num=mysqli_fetch_array($sql);

    if($num>0)
        {
        $_SESSION['student_login']=$_POST['student_number'];
        $_SESSION['id']=$num['ID'];
        echo "<script>window.location='index.php';</script>";
    }
    else
        {
            echo "<script>window.location='login.php';</script>";
    }
}
//check student login
function studentlogin()
{
if($_SESSION['student_login']==0)
	{	
        echo "<script>window.location='login.php';</script>";	}
}
