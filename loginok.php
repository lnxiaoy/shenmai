<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title></title>
</head>
<body>
<?php	
	$num=$_POST['num']; 
	$passwd=$_POST['passwd'];
	session_start(); 
	include "sql_connect.php";
	$sql="select * from tb_member where member_id='{$num}' and passwd='{$passwd}'";
	$sql_1="select * from tb_member where member_id='{$num}'";
	$rs_1=mysql_query($sql_1,$con);
	if(mysql_num_rows($rs_1)==0)
	{
		echo "<script language=\"JavaScript\">alert(\"帐号不存在！\")</script>";
		header('Location:login.php');
	}
	else
	{
			$rs=mysql_query($sql,$con);
			if(mysql_num_rows($rs)==0)
			{
				echo "<script language=\"JavaScript\">alert(\"密码错误！\")</script>";
				header('Location:login.php');			
			}
			else
			{
				$_SESSION['currentuser']=$num;
				header('Location:mainpage.php');
			}
	}
	
						mysql_free_result ($rs_1);
						mysql_close($con);
?>

</body>
</html>