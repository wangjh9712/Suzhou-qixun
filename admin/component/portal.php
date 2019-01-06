<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>科大企训网 - 后台</title>
  <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body>
  <?require_once 'connect.php'?>
  <!-- 控制面板内容 -->
  <div class="layui-main">
  	<div class="layui-row" style="margin-top: 10px;">
  	  <div class="layui-col-md12">
  	  	<blockquote class="layui-elem-quote layui-bg-red">你好，欢迎使用「科大企训网」管理系统。</blockquote>
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>更新记录</legend>
        </fieldset>
        <ul class="layui-timeline">
          <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
              <h3 class="layui-timeline-title">2019年1月6日</h3>
              <p>
                下面，
                <br>我宣布，
                <br>科大企训网，
                <br>后台管理系统，
                <br>今天，
                <br><s>成立了！</s>
                <br>完成了！
              </p>
            </div>
          </li>
          <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
              <h3 class="layui-timeline-title">2019年1月5日</h3>
              <p>
                首页完成了哦
                <br>在jyanhwei同学的努力下，首页也完成了
                <br>这个人可是Gang 4的灵魂人物啊
                <br>没有了你，我们该
                <br>怎么办啊
              </p>
            </div>
          </li>
          <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
              <h3 class="layui-timeline-title">2018年12月31日</h3>
              <p>
                资讯页面完成
                <br>紧接着就是资讯页面的完成了
                <br>同样在XiaoHuZi的榜样力量下，WS同学也加班工作，终于
                <br>完成了资讯页
                <br>OK
              </p>
            </div>
          </li>
          <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
              <h3 class="layui-timeline-title">2018年12月30日</h3>
              <p>
                案例页面也完成了
                <br>小十七同学在小胡子同学率先完成的情况下，铭记榜样的力量
                <br>终于也完成了他那个辣鸡案例页面
                <br>啊啊啊啊
                <br>完了
              </p>
            </div>
          </li>
          <li class="layui-timeline-item">
            <i class="layui-icon layui-timeline-axis"></i>
            <div class="layui-timeline-content layui-text">
              <h3 class="layui-timeline-title">2018年12月23日</h3>
              <p>
                关于页面制作完成
                <br>XiaoHuZi先做好了关于页面
                <br>作为小组的先锋队员，XiaoHuZi率先完成任务
                <br>他这样为我们做出了榜样
                <br>这种做法值得我们每一个人去学习！
              </p>
            </div>
          </li>
        </ul>  
  	  </div>
  	</div>
  </div>

<script src="../layui/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
});
</script>
</body>
</html>