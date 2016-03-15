<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/mainpage.css">
</head>
<body bgcolor="#ffffff">   
<?php
 	session_start ();
 	include "sql_connect.php";
 	$user = $_SESSION ['currentuser'];
 	$sql = "select * from tb_user";
 	$result = mysql_query ( $sql, $con ) or die ( "Could not query: " . mysql_error () );
 	$name = mysql_result ( $result, 0, 1 );
	 $email = mysql_result ( $result, 0,3 );
 	$level = mysql_result ( $result, 0, 4);
 	$tel = mysql_result ( $result, 0, 5 );
	$status = mysql_result ( $result, 0, 20 );
	    if($status=='0') $status='正常';
    else if ($status=='1') $stutas='异常';
       if ($level=='0') $level='数据库录入员';
	   else if ($level=='1') $level='支付会计';
	   else if ($level=='2') $level='支付出纳员';
	   else if ($level=='3') $level='支付监督经理';
	   else if ($level=='4') $level='数据库管理员';
	   else if ($level=='5') $level='超级管理员';
 	mysql_free_result ( $result );
 	mysql_close ( $con );
?>
<div 	class="div_input">
		<br/>
			   <table >
			     <tr>
				   <th >账号</th>
				   <th>用户名</th>
				   <th>邮箱</th>
				   <th>类型</th>
				   <th>状态</th>
				 </tr>
				 <tr>
				   <th><?php echo "$name";  ?></th>
				   <th><?php echo "$email";  ?></th>
				   <th><?php echo "$level";  ?></th>
				   <th><?php echo "$tel";  ?></th>
				   <th><?php echo "$status";  ?></th>
				 </tr>
			   </table>
		</div>
</body>
</html>