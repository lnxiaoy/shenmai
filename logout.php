<html>
	
	<head><meta http-equiv="Content-Type" content="text/html; charset=GB2312" /><title>�˳�ϵͳ</title></head>
<?php
	session_start();
	unset($_SESSION['currentuser']);
	echo "<script language=\"JavaScript\">alert(\"�˳��ɹ���\")</script>";
	header('Location:login.php');
?>  
</html>