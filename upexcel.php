<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
if(move_uploaded_file($_FILES['file']['tmp_name'],'./uploads/up.xls'))//上传文件，成功返回true
	{echo '上传成功';
	}
	else
	{echo '上传失败';}
include "sql_connect.php";
require_once 'excel_reader2.php';//引用文件
$data = new Spreadsheet_Excel_Reader();
//设置文本输出编码
$data->setOutputEncoding('UTF-8'); 
$data->read("./uploads/up.xls");//读取excel
$arr=array();
$arb=array();
$wmark=0;
$name;
$email;
$post;//职位
$written='0';
$exam;//
$permission='0';
$ip='xx';
$date='xx';
for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
//显示每个单元格内容
$arr[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][2];
$arb[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][3];
} 
foreach($arr as $k => $v){//遍历数组修改数据库
	$existsql = "SELECT email FROM xx WHERE email='$k' LIMIT 1";
	$exist = mysql_query($existsql);
	$row = mysql_fetch_array($exist, MYSQL_ASSOC);
    if (!mysql_num_rows($exist))  //判断数据是否存在
        {  
			if(!empty($k))//不存在，插入
				{
					$dsql = "INSERT INTO kids_user (name,email,post,written,exam,ip,date) VALUES ('$v','$k','$post','$written','$exam','$ip',NOW())";
					$email = mysql_query($dsql);
					//echo $dsql;
				}
foreach($arb as $kl => $vl){
	$existsql = "SELECT email FROM xx WHERE email='$kl' LIMIT 1";
	$exist = mysql_query($existsql);
	if($exist){
		$emailadd = "UPDATE xx SET post='$vl' WHERE email='$kl'";
		$email = mysql_query($emailadd);
	}
	unlink('./uploads/up.xls');//删除文件
	
}
echo "\n";
echo '添加成功';

?>
<meta http-equiv="Refresh" content="2; url=inputexcel.php" /><!--2秒后跳转某页面--> 
</body>
</html>
