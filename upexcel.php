<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<?php
if(move_uploaded_file($_FILES['file']['tmp_name'],'./uploads/up.xls'))//�ϴ��ļ����ɹ�����true
	{echo '�ϴ��ɹ�';
	}
	else
	{echo '�ϴ�ʧ��';}
include "sql_connect.php";
require_once 'excel_reader2.php';//�����ļ�
$data = new Spreadsheet_Excel_Reader();
//�����ı��������
$data->setOutputEncoding('UTF-8'); 
$data->read("./uploads/up.xls");//��ȡexcel
$arr=array();
$arb=array();
$wmark=0;
$name;
$email;
$post;//ְλ
$written='0';
$exam;//
$permission='0';
$ip='xx';
$date='xx';
for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
//��ʾÿ����Ԫ������
$arr[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][2];
$arb[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][3];
} 
foreach($arr as $k => $v){//���������޸����ݿ�
	$existsql = "SELECT email FROM xx WHERE email='$k' LIMIT 1";
	$exist = mysql_query($existsql);
	$row = mysql_fetch_array($exist, MYSQL_ASSOC);
    if (!mysql_num_rows($exist))  //�ж������Ƿ����
        {  
			if(!empty($k))//�����ڣ�����
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
	unlink('./uploads/up.xls');//ɾ���ļ�
	
}
echo "\n";
echo '��ӳɹ�';

?>
<meta http-equiv="Refresh" content="2; url=inputexcel.php" /><!--2�����תĳҳ��--> 
</body>
</html>
