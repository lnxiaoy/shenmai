<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>神脉科技</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-re.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="height:150px;background-color:#06406C;">
                <h1 style="color:white;text-align:center;padding-top:20px;">神脉科技管理系统</h1>
                <h4 style="color:white;text-align:center;">企业宣言-------</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" style="margin-top:20px;">
                <div class="carousel slide" data-ride="carousel" id="carou" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="item active ">
                            <div class="thumbnail" style="padding:0;">
                                <a href="">
                                    <img src="img/1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="item  ">
                            <div class="thumbnail" style="padding:0;">
                                <a href="">
                                    <img src="img/7.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumbnail" style="padding:0;">
                                <a href="">
                                    <img src="img/6.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carou" class="active"></li>
                        <li data-slide-to="1" data-target="#carou"></li>
                        <li data-slide-to="2" data-target="#carou"></li>
                    </ol>
                    <a class="carousel-control left" href="#carou" data-slide="prev"><span class="glyphicon-chevron-left glyphicon"></span></a>
                    <a class="carousel-control right" href="#carou" data-slide="next"><span class="glyphicon-chevron-right glyphicon"></span></a>
                </div>
            </div>
            <div style="margin-top:20px;border:1px solid #ccc;padding:20px;" class="col-md-3">
                
                <form action="adminapplyok.php" name="form2" method="post" onsubmit="return check()">
                	<legend>用户注册</legend>
                    <div class="form-group"><label>用户名:</label><input  type="text" name="name"/></div>
                    <div class="form-group"><label>账号:</label><input type="text" name="num"/></div>
                    <div class="form-group"><label>密码:</label><input  type="password" name="passwd"/></div>
                    <div class="form-group"><label>确认:</label><input  type="password" name="passwd1"/></div>
                    <div class="form-group"><label>邮箱:</label><input  type="text" name="mail"/></div>
                    <div class="form-group"><label>岗位:</label><input  type="text" name="title"/></div>
                    <input class="btn btn-primary pull-right" type="submit" name="submit" value="提交" />
                </form>
                <form action="login.php" name="form1" method="post" onsubmit="return check()">
                    <input class="btn btn-info" type="submit" name="submit" value="已有账号请登录" />
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
</script>

</html>
