<?php
//新增
require_once '../connect.php';
$no=$_POST['no'];
$image=$_POST['image'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];
$hot=$_POST['hot'];
$sql="UPDATE `news` set no='$no',image='$image',title='$title',content='$content',date='$date',hot='$hot'where no='$no'";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php?key="          
</script>