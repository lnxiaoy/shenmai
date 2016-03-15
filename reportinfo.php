<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>       
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
              <table class="table table-bordered table-hover" style="text-align:center;">
                    <thead style="background-color:#eee;">
				   <th  style="text-align:center;" >账号</th>
				   <th  style="text-align:center;">用户名</th>
				   <th  style="text-align:center;">邮箱</th>
				   <th  style="text-align:center;">类型</th>
				   <th  style="text-align:center;">状态</th>
				   </thead>
				   <tbody>
				   <td><?php echo "$name";  ?></td>
				   <td><?php echo "$email";  ?></td>
				   <td><?php echo "$level";  ?></td>
				   <td><?php echo "$tel";  ?></td>
				   <td><?php echo "$status";  ?></td>
				</tbody>

			   </table>
              <table class="table table-bordered table-hover" style="text-align:center;">
                    <thead style="background-color:#eee;">
				   <th   style="text-align:center;" >账号</th>
				   <th   style="text-align:center;">设备</th>
				   <th   style="text-align:center;">当前状态</th>
				   <th   style="text-align:center;">悬赏金额</th>
				   <th   style="text-align:center;">操作</th>
				</thead>
				<tbody>
				   <td>000001</td>
				   <td>3c:2d:5s:1a:2s</td>
				   <td>报案</td>
				   <td>100</td>
				   <td><input class="btn btn-success" type="submit" name="submit" value="通过"/></td>
				</tbody>
			   </table>

</body>
</html>