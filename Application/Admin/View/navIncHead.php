<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">后台管理</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U("/Admin/Setting/index") ?>">系统设置 </a></li>
        <li><a href="<?php echo U("/Admin/Blog/index") ?>">博客管理</a></li>
        <li><a href="<?php echo U("/Admin/Auser/index") ?>">管理员管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="loginout.php">退出</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
