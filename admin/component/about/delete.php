<?php
//删除获得数据库信息
$no=$_GET['xuhao'];
require_once '../connect.php';	
//删除数据
$sql="DELETE FROM about WHERE xuhao='$no'";
$result=mysqli_query($conn,$sql);
?>
<script type="text/javascript">
//没有错误自动跳转到browse.php文件
window.location.href="browser.php?key="          
</script>
