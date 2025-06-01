<?php
function getUserIP() {
    // تحقق من العناوين المختلفة
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();

// عرض الـ IP أو استخدامه كما تشاء
echo "IP الخاص بك هو: " . $ip;

file_put_contents("ips.txt", $ip . "\n", FILE_APPEND);

?>
