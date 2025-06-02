<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
file_put_contents("log.txt", "[$time] - IP: $ip\n", FILE_APPEND);
echo "تم تسجيل IP: $ip";
?>
