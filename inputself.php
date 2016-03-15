<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<title>神脉科技</title>
	</head>
	<body>
	<div class="col-md-5 col-md-offset-1" style="border:1px solid #ccc;padding:20px;">
		 <form action="inputselfok.php" name="form2" method="post" onsubmit="return check()">
		 	<legend>数据录入</legend>
				<div class="form-group"><label>用户名:</label><input   type="text" name="name"/></div>
				<div class="form-group"><label>新浪号:</label><input   type="text" name="sina"/></div>
		 	 	<div class="form-group"><label>账号:</label><input   type="text" name="num"/></div>
				<div class="form-group"><label>地址:</label><input  type="text" name="address"/></div>
				<div class="form-group"><label>邮箱:</label><input   type="text" name="mail"/></div>
				<div class="form-group"><label>电话:</label><input   type="text" name="tel"/></div>
				<input class="btn btn-primary pull-right" type="submit" name="submit" value="提交"/>
			</form>
		</div>
		<div class="col-md-5 col-md-offset-1" style="border:1px solid #ccc;padding:20px;">
			<input class="text" style="margin-bottom:20px;"type="text" name="text" placeholder="文件路径"/>
			<form action="upexcel.php" method="post" enctype="multipart/form-data">
			<a href="inputself.php" target="methoddown"><input class="btn btn-primary" type="submit" name="submit" value="上传Excel"/></a>
			<a href="inputexcel.php" target="methoddown"><input class="btn btn-primary" type="submit" name="submit" value="确认录入"/></a>
			</form>
		</div>
	</body>
</html>