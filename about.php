<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.list-group a:link{color: #0059b2;}
		.list-group a:visited{color: #0059b2;}
    ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li:first-child{
        border-top: none;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    ul.nav-tabs li:first-child a{
        border-radius: 4px 4px 0 0;
    }
    ul.nav-tabs li:last-child a{
        border-radius: 0 0 4px 4px;
    }
    ul.nav-tabs.affix{
        top:90px;
    }
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<title>科大企训网</title>
	<!-- navi -->
	<?php require_once 'component/navi.php'?>
	<?php require_once 'component/connect.php'?>
	<!-- navi end -->
</head>
<body data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid jumbotron" style="background-image: url(img/bg.jpg);margin: 50px 0 0 0;padding: 60px 0;">
		<div class="container">
			<hgroup style="color: #ccc">
				<h2>关于</h2>
				<h5>本机构的成长介绍...</h5>
			</hgroup>
		</div>
	</div>
	<div id="about" style="margin:0px; background-color:#EAEAEA; padding-top:40px; padding-bottom:20px; padding-left:20px; padding-right:20px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" id="myScrollspy">
					<ul class="nav nav-tabs nav-stacked list-group" data-spy="affix" data-offset-top="210">
						<?php
						if ($result = mysqli_query($conn, 'SELECT title FROM about')){
							$i=1;
							while($row=mysqli_fetch_assoc($result)){
							echo "<li><a class='list-group-item' href='#$i'>".$row['title']."</a></li>";
							$i++;
							}
						}
						?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" style="background-color:#FFFFFF; box-shadow: 2px 2px 3px #ccc;">
					<p style="font-size:16px; font-family:'Microsoft YaHei UI'; line-height:30px">
						<?php
						if ($result = mysqli_query($conn, 'SELECT content,title FROM about')){
							$i=1;
							while($row=mysqli_fetch_assoc($result)){						
							echo "<h3 id='$i' style='font-size:24px; margin: 0 0 10px 0; padding: 20px 0 0px 0;'>".$row['title']."</h3><hr />";
							echo "<p style='font-size:16px; font-family:Microsoft YaHei UI; line-height:30px'>".$row['content']."</p>";
							$i++;
							}
						}
						?>
					</p>
				</div>
			</div>
		</div>
	</div>


	<!-- navigator end -->
	
	<!-- footer -->
	<?php require 'component/footer.php' ?>
	<!-- footer end -->
</body>
</html>
