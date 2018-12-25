<nav class="navbar navbar-default navbar-fixed-top" style="margin: 0;">
	<div class="container">
		<div class="navbar-header navbar-left">
			<button type="buttom" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img class="navbar-brand" src="img/logo.png" alt="wzsw" style="padding:0px;">
		</div>
		<div class="collapse navbar-collapse navbar-right" id="navi">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
				<li><a href="news.php"><span class="glyphicon glyphicon-list"></span> 资讯</a></li>
				<li><a href="cases.php"><span class="glyphicon glyphicon-fire"></span> 案例</a></li>
				<li><a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> 关于</a></li>
			</ul>
		</div>
	</div>
</nav>
<script type="text/javascript">
	var filename = location.href;
	filename = filename.substring(filename.lastIndexOf('/')+1); 
	selector = 'a[href="' + filename + '"]';
	$(selector).parent().addClass("active");
</script>