<html>
	
	<head><meta http-equiv="Content-Type" content="text/html; charset=GB2312" /><title>退出系统</title></head>
<?php
	session_start();
	unset($_SESSION['currentuser']);
	echo "<script language=\"JavaScript\">alert(\"退出成功！\")</script>";
	header('Location:login.php');
?>  
</html>