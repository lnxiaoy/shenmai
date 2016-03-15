<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body bgcolor="#ffffff">
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

				   <th  style="text-align:center;" >付款账号</th>
				   <th  style="text-align:center;">付款金额</th>
				   <th  style="text-align:center;">付款人冻结</th>
				   <th  style="text-align:center;">收款账号</th>
				    <th  style="text-align:center;">银行卡号</th>
					 <th  style="text-align:center;">开户名</th>
					 <th  style="text-align:center;">金额</th>
					 <th  style="text-align:center;">操作</th>
					</thead>
					<tbody>
				   <td>0000000001</td>
				   <td>200</td>
                   <td>50</td>
				   <td>0000000002</td>
                    <td>134019573094523</td>
					 <td>李四</td>
                     <td>50</td>
					 <td><input class="btn btn-success" type="submit" name="submit" value="申请付款"/></td>

					</tbody>
			   </table>
</body>
</html>