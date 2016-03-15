<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title></title>

</head>
<body>
 <?php 
    $num=$_POST["num"];
	$name=$_POST["name"]; 
	$passwd= $_POST["passwd"]; 
	$passwd1=$_POST["passwd1"];
	$mail=$_POST["mail"];
	$title=$_POST["title"];
	include "sql_connect.php";			
			$sql_1="select * from tb_member where member_id='{$num}'";
			$rs_1=mysql_query($sql_1,$con);
			if(mysql_num_rows($rs_1)!=0)
			{
				echo "<script language=\"JavaScript\">alert(\"帐号已存在！\")</script>";
				header('Location:adminapply.php');
			}
			else
			{	
					$sql="insert into tb_member(member_id,name,employee_num,title,passwd,email,tel,level,status) value('$num','$name','0','$title','$passwd','$mail','0','0','0')";
					if(!mysql_query($sql,$con))
					{
						die('error:'.mysql_error());
					} 
					echo "<script language=\"JavaScript\">alert(\"注册成功，请登录！\")</script>";
					 header('Location:login.php');
			}
			
						mysql_free_result ($rs_1);
						mysql_close($con);
?>  
</body>
</html>