<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
 	session_start ();
 	include "sql_connect.php";
 	$user = $_SESSION ['currentuser'];
 	$sql = "select * from tb_member where member_id='{$user}'";
 	$result = mysql_query ( $sql, $con ) or die ( "Could not query: " . mysql_error () );
 	$name = mysql_result ( $result, 0, 1 );
	 $employee_num = mysql_result ( $result, 0,2 );
 	$title = mysql_result ( $result, 0, 3);
 	$mail = mysql_result ( $result, 0, 5 );
	$tel = mysql_result ( $result, 0, 6 );
    $level = mysql_result ( $result, 0, 7 );
 	$status = mysql_result ( $result, 0, 8 );
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
              <table class="table table-bordered table-hover" style="text-align:center;">
                    <thead style="background-color:#eee;">
				   <th style="text-align:center;">姓名</th>
				   <th style="text-align:center;">邮箱</th>
				   <th style="text-align:center;">类型</th>
				   <th style="text-align:center;">状态</th>
				    <th style="text-align:center;">员工号</th>
					 <th style="text-align:center;">职务</th>
					 <th style="text-align:center;">电话</th>
                    </thead>
                    <tbody>
				   <td><?php echo "$name";  ?></td>
				   <td><?php echo "$mail";  ?></td>
                   <td><?php echo "$level";  ?></td>
				   <td><?php echo "$status";  ?></td>
                    <td><?php echo "$employee_num";  ?></td>
					 <td><?php echo "$title";  ?></td>
                     <td><?php echo "$tel";  ?></td>

                    </tbody>
			   </table>
</body>
</html>
