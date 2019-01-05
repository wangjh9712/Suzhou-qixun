<?php
//新增
require_once '../connect.php';
$no=$_POST['no'];
$carousel_img=$_POST['carousel_img'];
$carousel_color=$_POST['carousel_color'];
$sql="INSERT INTO myindex VALUES ('$no','$carousel_img','$carousel_color')";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php"          
</script>