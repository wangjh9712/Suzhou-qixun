<?php
//新增
require_once '../connect.php';
$no=$_POST['no'];
$image=$_POST['image'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];
$hot=$_POST['hot'];
$sql="INSERT INTO `news`(`no`, `image`, `title`, `content`, `date`, `hot`) VALUES ('$no','$image','$title','$content','$date','$hot')";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php?key="          
</script>