<?php
//连接数据库
define('MYSQL_HOST','118.24.119.40');
define('MYSQL_DB','kdqx');
define('MYSQL_USER','kdqx');
define('MYSQL_PW','f4Dc8b5z3BdWdEAd%');

$conn = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB);
mysqli_query($conn,'set names utf8');

?>