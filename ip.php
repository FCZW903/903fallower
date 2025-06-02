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

// بيانات البوت
$botToken = "2107326201:AAF6wYZfA8gLUH5CnqUu9nQ2x_JTnGKwC5Y";
$chatId = "2116258278";

$message = "🚨 <b>زائر جديد دخل الموقع</b>\n\n🌐 <b>IP:</b> $ip\n🕒 <b>الوقت:</b> " . date("Y-m-d H:i:s");

// تجهيز الطلب
$url = "https://api.telegram.org/bot$2107326201:AAF6wYZfA8gLUH5CnqUu9nQ2x_JTnGKwC5Y/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'HTML'
];

// تنفيذ الطلب باستخدام CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($response) {
    echo "✅ تم إرسال IP: $ip<br><pre>$response</pre>";
} else {
    echo "❌ فشل الإرسال. الخطأ: $error";
}
?>
