<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title></title>

</head>
<body>
 <?php 
    $num=$_POST["num"];
	$name=$_POST["name"]; 
	$sina= $_POST["sina"]; 
	$address=$_POST["address"];
	$mail=$_POST["mail"];
	$title=$_POST["tel"];
	include "sql_connect.php";			
			$sql_1="select * from tb_user where member_id='{$num}'";
			$rs_1=mysql_query($sql_1,$con);
			if(mysql_num_rows($rs_1)!=0)
			{
				echo "<script language=\"JavaScript\">alert(\"用户已存在！\")</script>";
				header('Location:inputself.php');
			}
			else
			{	
					$sql="insert into tb_user(user_id,name,sina,address,email,tel) value('$num','$name','$sina','$address','$mail','$tel')";
					if(!mysql_query($sql,$con))
					{
						die('error:'.mysql_error());
					} 
					echo "<script language=\"JavaScript\">alert(\"录入成功！\")</script>";
					 header('Location:inputself.php');
			}
			
						mysql_free_result ($rs_1);
						mysql_close($con);
?>  
</body>
</html>