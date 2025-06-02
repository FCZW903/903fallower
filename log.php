<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();
$time = date("Y-m-d H:i:s");

// سطر الحفظ
$logEntry = "[$time] - IP: $ip\n";

// اسم الملف
$logFile = 'log.txt';

// حفظ السطر داخل الملف
file_put_contents($logFile, $logEntry, FILE_APPEND);

echo "✅ تم تسجيل دخول جديد";
?>
