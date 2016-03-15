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
                <a href="logout.php" target="main" class="btn btn-info pull-right">注销</a></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 list-group" style="margin-top:20px;border-right:1px solid #ccc;">
                <legend>管理界面</legend>
                <a href="#" class="list-group-item active " style="border:0px;" id="userinfo">个人信息</a>
                <a href="#" class="list-group-item" style="border:0px;"id="manage">管理成员</a>
                <a href="#" class="list-group-item" style="border:0px;"id="datain">数据库录入</a>
                <a href="#" class="list-group-item" style="border:0px;" id="datamanage">数据库管理</a>
                <a href="#" class="list-group-item" style="border:0px;"id="payacc">支付会计</a>
                <a href="#" class="list-group-item" style="border:0px;"id="paymanage">支付管理</a>
                <a href="#" class="list-group-item" style="border:0px;"id="payexamine">支付审核</a>
            </div>
            <div class="col-md-9" style="margin-top:20px;" id="content">
              <table class="table table-bordered table-hover" style="text-align:center;">
                    <thead style="background-color:#eee;">
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
$(document).ready(function() {
  $.ajax({
    url: 'userinfo.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});
$("#userinfo").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
  $.ajax({
    url: 'userinfo.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});
$("#manage").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'managemember.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});
$("#datain").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'inputself.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});$("#datamanage").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'examine.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});$("#payacc").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'reportinfo.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});$("#paymanage").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'paymanage.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});$("#payexamine").click(function(event) {
  $(this).parent().find('a').attr('class', 'list-group-item');
  $(this).attr('class', 'active list-group-item');
    $.ajax({
    url: 'payexamine.php',
    dataType: 'html',
  })
  .done(function(data,textStatus) {
    $("#content").html(data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});
</script>

</html>
