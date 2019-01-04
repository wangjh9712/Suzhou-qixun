<?php
//新增
require_once '../connect.php';
$no=$_GET['no'];
$logo=$_GET['logo'];
$name=$_GET['name'];
$introduction=$_GET['introduction'];
$sql="INSERT INTO cases (no, logo, name, introduction) VALUES ('$no','$logo', '$name', '$introduction')";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	window.location.href="browser.php?key="          
</script>