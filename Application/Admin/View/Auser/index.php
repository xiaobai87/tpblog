<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理</title>
    <link href="/Public/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <?php include(THEME_PATH."navIncHead.php") ?>
    <div class="col-md-8 col-md-offset-2">
    <div class="page-header">
    <h1>管理员管理 <small  class="pull-right"><a href="<?php echo U("/Admin/Auser/add") ?>" class="btn btn-default">添加管理员</a></small></h1>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th><th>用户名</th><th>操作</th>
        </tr>
        <?php foreach ($data as $key):?>
        <tr>
            <td><?php echo $key['aid'] ?></td>
            <td><?php echo $key['auser'] ?></td>
            <td><a href="<?php echo U('/Admin/Auser/add') ?>?aid=<?php echo $key['aid'] ?>">修改</a><a href="<?php echo U('/Admin/Auser/delete') ?>?aid=<?php echo $key['aid'] ?>">删除</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</div>

</body>

</html>