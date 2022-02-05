<?php
session_start();
include('connect.php');
$_SESSION['dctor_login']=="";
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="login.php";
</script>
