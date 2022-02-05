<?php
include('connect.php');
session_start();
$_SESSION['student_login']==0;
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="login.php";
</script>
