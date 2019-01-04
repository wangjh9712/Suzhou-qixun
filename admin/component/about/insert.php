<?php
//新增
require_once '../connect.php';
$xuhao=$_POST['xuhao'];
$title=$_POST['title'];
$content=$_POST['content'];
$sql="INSERT INTO about (xuhao,title,content) VALUES ('$xuhao','$title','$content')";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php?key="          
</script>