<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<title>科大企训网</title>
	<style>
		@media screen and (max-width:1200px){
		h4{
			font-size: 18px;overflow: hidden; white-space: nowrap;text-overflow:ellipsis;
			}
		}
		@media screen and (max-width:992px){
		h4{
			font-size: 16px;overflow: hidden; white-space: nowrap;text-overflow:ellipsis;
			}
		}
		@media screen and (max-width:768px;){
		h4{
			font-size: 14px;overflow:visible; white-space:normal;
			}
		}
		.hidden-xs{color: #666;}
		.info-content{background-color: #fff;box-shadow: 2px 2px 3px #ccc;margin: 0 0 20px 0;}
	</style>
</head>

<body style="background-color: #EAEAEA;">
	<!-- navigator -->
	<?php require_once 'component/navi.php'?>
	<?php require_once 'component/connect.php'?>
	<!-- navigator end -->
	<div class="container-fluid jumbotron" style="background-image: url(img/bg.jpg);margin: 50px 0 0 0;padding: 60px 0;">
		<div class="container">
			<hgroup style="color: #ccc">
				<h2>资讯</h2>
				<h5>企业内训的最新动态、资源等...</h5>
			</hgroup>
		</div>
	</div>
	<!--content start-->
	<div class="container" style="padding: 40px 0">
		<div class="row">
			<div class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
				<div class="container-fluid">
					<?php
					$sql = 'SELECT * FROM news';
					$result = mysqli_query($conn,$sql);
					  	while($row = mysqli_fetch_array($result)){
					  		if($row['hot'] == 'no')
					  	  		echo "<div class='row info-content'>
										<div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
											<img src=".$row['image']." class='img-responsive' style='margin: 12px 0'>
										</div>
										<div class='col-lg-7 col-md-7 col-sm-7 col-xs-7'>
											<h4>".$row['title']."</h4>
											<p class='hidden-xs'>".$row['content']."</p>
											<p style='color: #666;'>admin".$row['date']."</p>
										</div>
									  </div>";
					  }
					?>
				</div>
			</div>
			<div class="col-md-4 hidden-xs hidden-sm col-lg-4" style="background-color: #fff;box-shadow: 2px 2px 3px #ccc;">
				<blockquote style="padding: 0; margin: 0">
					<h2 style="font-size: 20px; padding: 5px">热门资讯</h2>
				</blockquote>
				<div class="container-fluid">
					<?php
					$result = mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($result)){
							if($row["hot"]=='yes')
							echo "<div class='row'>
									<div class='col-lg-5 col-md-5 col-sm-5 col-xs-5' style='margin: 12px 0; padding: 0;'>
										<img src=".$row['image']." class='img-responsive'>
									</div>
									<div class='col-lg-7 col-md-7 col-sm-7 col-xs-7'>
										<h5 class='hidden-xs'>".$row['title']."</h5>
										<p style='color: #666;'>admin".$row['date']."</p>
									</div>
								</div>";	
					}
					?>
				</div>
			</div>
		</div>
	</div>
	
	<!--content end-->
	<!-- footer -->
	<?php require_once 'component/footer.php' ?>
	<!-- footer end -->
</body>
</html>
