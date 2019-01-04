<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<title>科大企训网</title>
</head>

<body style="background-color: #eee">
	<!-- navigator -->
	<?php require_once 'component/navi.php'?>
	<?php require_once 'component/connect.php'?>
	<!-- navigator end -->
	<div class="container-fluid jumbotron" style="background-image: url(img/bg.jpg);margin: 50px 0 0 0;padding: 60px 0;">
		<div class="container">
			<hgroup style="color: #ccc">
				<h2>案例</h2>
				<h5>和各大明星企业有着紧密合作...</h5>
			</hgroup>
		</div>
	</div>
	<div class="container" style="padding: 40px 0; text-align: center;">
		<div class="row" style="padding: 15px;">
			<?php
			$sql="SELECT * FROM cases";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
				echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12' style='margin: 0 0 20px 0;'>";
					echo "<div class='thumbnail'>";
						echo "<img src='".$row['logo']."'>";
						echo "<div class='caption'>";
							echo "<h4 class='text-center'>".$row['name']."</h4>";
							echo "<p class='text-center'>".$row['introduction']."</p>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
				}
			?>
		</div>
	</div>
	<!-- footer -->
	<?php require_once 'component/footer.php' ?>
	<!-- footer end -->
</body>
</html>
