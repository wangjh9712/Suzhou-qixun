<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>科大企训网 - 后台</title>
  <link rel="stylesheet" href="layui/css/layui.css">
  <style type="text/css">
    .layadmin-iframe {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    }
  </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">科大企训网</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">登出</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree">
        <li class="layui-nav-item"><a href="component/index/browser.php" target="content">轮播图</a></li>
        <li class="layui-nav-item"><a href="component/news/browser.php?key=" target="content">资讯</a></li>
        <li class="layui-nav-item"><a href="component/cases/browser.php?key=" target="content">案例</a></li>
        <li class="layui-nav-item"><a href="component/about/browser.php?key=" target="content">关于</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <iframe class="layadmin-iframe layui-anim layui-anim-scale" frameborder="0" scrolling="auto" name="content" src="component/portal.php"></iframe>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    Powered By Layui . Made with <span style="color: red;font-size: 18px;"> ❤</span>
  </div>
</div>
<script src="layui/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
 
});

</script>
</body>
</html>