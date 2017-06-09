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

    <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />
    <script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>
</head>

<body>
<div class="container">
    <?php include(THEME_PATH."navIncHead.php") ?>
    <div class="col-md-12">
    <div class="page-header">
    <h1>文章管理 <small  class="pull-right"><a href="<?php echo U('/Admin/Blog/index') ?>">返回</a></small></h1>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo U('Admin/Blog/save') ?>?pid=<?php echo $articles['pid'] ?> ">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-1 control-label">标题</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="ptit" id="ptit" placeholder="请输入标题"
            value="<?php echo $articles['ptit'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-1 control-label">作者</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="pauthor" id="pauthor" placeholder="请输入作者"
            value="<?php echo $articles['pauthor'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-1 control-label">正文</label>
            <div class="col-sm-10">
            <textarea id="editor" class="form-control" style="height:400px" name="pcontent"
            placeholder="请输入正文"><?php echo $articles['pcontent'] ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>
</div>

</body>
</html>
<script>
   $(function(){ 
    var editor = new Simditor( {  
        textarea : $('#editor'),
        upload : {  
            url : '<?php echo U("/Admin/Blog/upload") ?>', 
            fileKey: 'uploadfile',
        }   
    });  
   })  
</script>