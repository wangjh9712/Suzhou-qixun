<?php
//新增
require_once '../connect.php';
$no=$_POST['no'];
$carousel_img=$_POST['carousel_img'];
$carousel_color=$_POST['carousel_color'];
$sql="UPDATE myindex SET no='$no',carousel_img='$carousel_img',carousel_color='$carousel_color' WHERE no='$no'";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php"          
</script>