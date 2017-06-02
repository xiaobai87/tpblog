<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章管理-后台管理</title>
    <link href="/Public/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <script src="/Public/js/jquery-3.2.1.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <?php include(THEME_PATH."navIncHead.php") ?>
    <div class="col-md-12">
    <div class="page-header">
    <h1>文章管理 <small  class="pull-right"><a href="<?php echo U("/Admin/Blog/add") ?>" class="btn btn-default">添加文章</a></small></h1>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th><th>标题</th><th>作者</th><th>发表时间</th><th>更新时间</th><th>操作</th>
        </tr>
        <?php foreach ($article as $item):?>
        <tr>
            <td><?php echo $item['pid'] ?></td>
            <td><?php echo $item['ptit'] ?></td>
            <td><?php echo $item['pauthor'] ?></td>
            <td><?php echo $item['pintime'] ?></td>
            <td><?php echo $item['puptime'] ?></td>
            <td><a href="<?php echo U('/Admin/Blog/add') ?>?aid=<?php echo $item['pid'] ?>">修改</a><a href="<?php echo U('/Admin/Blog/del') ?>?aid=<?php echo $item['aid'] ?>">删除</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</div>

</body>

</html>