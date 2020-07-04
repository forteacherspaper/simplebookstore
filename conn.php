<?php
#FileName="conn.php"
#Type="Mysql"
#HTTP="ture"
$hostname_conn="localhost";
$database_conn="bookdb";
$username_conn="root";
$password_conn="root";
$conn=mysqli_connect($hostname_conn,$username_conn,$password_conn,$database_conn) or trigger_error(mysqli_connect);

?>