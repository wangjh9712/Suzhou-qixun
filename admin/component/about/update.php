<?php
//新增
require_once '../connect.php';
$no=$_POST['xuhao'];
$title=$_POST['title'];
$content=$_POST['content'];
$sql="UPDATE about set xuhao='$no',title='$title',content='$content' where xuhao='$no'";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php?key="          
</script>