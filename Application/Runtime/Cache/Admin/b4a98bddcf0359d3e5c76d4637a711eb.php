<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理</title>
    <link href="/Public/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <script src="/Public/js/jquery-3.2.1.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <?php include(THEME_PATH."navIncHead.php") ?>
    <div class="col-md-8 col-md-offset-2">
    <div class="page-header">
    <h1>系统设置<small  class="pull-right"><a href="<?php echo U('/Admin/Index/index') ?>">返回</a></small></h1>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo U('Admin/Setting/save') ?>">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="auser" id="auser" placeholder="请输入用户名"
            value="<?php echo $user['auser'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>
</div>

</body>

</html>