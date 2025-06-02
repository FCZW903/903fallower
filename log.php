<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
$log = "IP: $ip - Time: $time" . PHP_EOL;
file_put_contents("ips.txt", $log, FILE_APPEND);
echo "IP تم تسجيله.";
?>
