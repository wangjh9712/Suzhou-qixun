<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<title>科大企训网</title>
</head>

<body>
	<!-- navigator -->
	<?php require_once 'component/navi.php'?>
	<?php require_once 'component/connect.php'?>
	<!-- navigator end -->
	<!-- Carousel -->
	<div class="container-fluid" style="padding: 0; margin-top: 50px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 440px;">
			<ol class="carousel-indicators">
				<?php
				$sql = 'SELECT * FROM myindex ORDER BY no ASC';
				$result = mysqli_query($conn,$sql);
				$counter = 0;
				$output = '';
				while($row=mysqli_fetch_array($result)){
					if($counter == 0){
						$output .= '
						<li id="slide-'.$row['no'].'" date-target="#myCarousel" date-slide-to="'.$row['no'].'" class="active"></li>
						';
					}else{
						$output .= '
						<li id="slide-'.$row['no'].'" date-target="#myCarousel" date-slide-to="'.$row['no'].'"></li>
						';
					}
					$counter++;
				}
				echo $output;
				?>
			</ol>
			<div class="carousel-inner">
				<?php
				$result = mysqli_query($conn,$sql);
				$counter = 0;
				$output = '';
				while($row=mysqli_fetch_array($result)){
					if($counter == 0){
						$output .= '
						<div class="item active" style="background:'.$row['carousel_color'].';">
						<img src="'.$row['carousel_img'].'" class="img-responsive center-block">
						</div>
						';
					}else{
						$output .= '
						<div class="item" style="background:'.$row['carousel_color'].';">
						<img src="'.$row['carousel_img'].'" class="img-responsive center-block">
						</div>
						';
					}
					$counter++;
				}
				echo $output;
				?>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
	   </div>
	</div>
	<script type="text/javascript">
		$('#myCarousel').carousel({
			interval:4000,
			pause:"no",
		});
	<?php
	$result = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		echo('
		$("#slide-'.$row['no'].'").click(function(){
		$("#myCarousel").carousel('.$row['no'].');
		});
		');
	}
	?>

	</script>
    <!-- Carousel end-->
	<!-- Tab1 -->
	<div class="container" style="padding: 40px;">
		<div class="row"  style="margin-bottom: 20px;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="text-center">
					<small class="text-primary">「 为什么选择科大企训 」
					</small>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center" >
					<small>强大的师资力量，完美的实战型管理课程，让您的企业实现质的腾飞！
					</small>
				</h3>
			</div>
		</div>		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding: 20px;">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						<img src="img/tab1-1.png">
						</a>
					</div>
					<div class="media-body">
						<h4>课程内容</h4>
						<p class="text-muted"><del>其他：高校不知名的讲师编写，没有任何实战价值的教材！</del></p>
						<p>我们：知名企业家、管理学大师联合编写的具有实现性教材！</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding:20px;">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						<img src="img/tab1-2.png">
						</a>
					</div>
					<div class="media-body">
						<h4>师资力量</h4>
						<p class="text-muted"><del>其他：非欧美正牌大学毕业的、业界没有知名度的讲师！</del></p>
						<p>我们：美国哈佛、耶鲁等世界一流高校、享有声誉的名牌专家！</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding:20px;">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						<img src="img/tab1-3.png">
						</a>
					</div>
					<div class="media-body">
						<h4>课时安排</h4>
						<p class="text-muted"><del>其他：无法保证上课效率、没有时间表，当天任务无法完成！</del></p>
						<p>我们：保证正常的上课效率、制定一张时间表、当天的任务当天完成！</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding:20px;">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						<img src="img/tab1-4.png">
						</a>
					</div>
					<div class="media-body">
						<h4>服务团队</h4>
						<p class="text-muted"><del>其他：社会招聘的、服务水平参差不齐的普通员工！</del></p>
						<p>我们：内部培养、经受过良好高端服务培训的高标准员工！</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tab1 end -->
	<!-- Tab2 Tab3 -->
	<div style="background-color: #eee; padding: 60px 20px; text-align: center; margin: 30px 0;color: #666;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-push-6 col-md-6 col-md-push-6 col-lg-6 col-lg-push-6">
	                <img src="img/tab2.png" class="tabimg img-responsive center-block" style="width:40%; height:40%;vertical-align: middle;" >
	            </div>
				<div class="tabtxt col-xs-12 col-sm-6 col-sm-pull-6 col-md-6 col-md-pull-6 col-lg-6 col-lg-pull-6 text-center" style="margin-top: 0px;">
	                <h3>强大的学习体系</h3>
	                <p>经过管理学大师层层把关,让您的企业突飞猛进</p>
	            </div>	
			</div>
		</div>	
	</div>
	<div style="padding:60px 20px;text-align: center; margin: 30px 0;color: #666;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
					<img src="img/tab3.png" class="tabimg img-responsive center-block" style="width: 70%; height: 70%;vertical-align: middle;">
				</div>
				<div class="tabtxt col-xs-12 col-md-6 col-sm-6 col-lg-6" style="margin-top: 0px;">
					<h3>完美的管理方式</h3>
					<p>最新的管理培训方案,让您的企业赶超同行</p>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(window).on('load',function(){
		$('.tabtxt').eq(0).css('margin-top', ($('.tabimg').eq(0).height() - $('.tabtxt').eq(0).height()) / 2 + 'px');
	});
	$(window).on('resize',function(){
		$('.tabtxt').eq(0).css('margin-top', ($('.tabimg').eq(0).height() - $('.tabtxt').eq(0).height()) / 2 + 'px');
	});
	$(window).on('load',function(){
		$('.tabtxt').eq(1).css('margin-top', ($('.tabimg').eq(1).height() - $('.tabtxt').eq(1).height()) / 2 + 'px');
	});
	$(window).on('resize',function(){
		$('.tabtxt').eq(1).css('margin-top', ($('.tabimg').eq(1).height() - $('.tabtxt').eq(1).height()) / 2 + 'px');
	});
	</script>
	<!-- Tab2 Tab3 end -->
	<!-- footer -->
	<?php require_once 'component/footer.php' ?>
	<!-- footer end -->
</body>
</html>
