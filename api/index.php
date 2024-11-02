<?php
// 获取当前脚本的绝对路径
$scriptPath = realpath(__DIR__ . '/..' . $_SERVER["PHP_SELF"]);

// 检查路径是否合法
if (strpos($scriptPath, __DIR__) !== 0) {
    die('Invalid path');
}

// 检查文件是否存在
if (file_exists($scriptPath)) {
    // 文件存在时的处理逻辑
    echo 'File exists: ' . $scriptPath;
} else {
    // 文件不存在时的处理逻辑
    require_once __DIR__ . '/../sjxjj.php';
}

// 输出当前脚本的相对路径
echo $_SERVER["PHP_SELF"];
