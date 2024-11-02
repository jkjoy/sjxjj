<?php
// 设置视频文件夹路径
$videoDir = __DIR__ . './video';

// 检查文件夹是否存在
if (!is_dir($videoDir)) {
    http_response_code(404);
    echo "视频文件夹不存在";
    exit();
}

// 获取文件夹中的所有视频文件
$videos = glob($videoDir . '/*.mp4');

// 检查是否有视频文件
if (empty($videos)) {
    http_response_code(404);
    echo "没有找到任何视频文件";
    exit();
}

// 随机选择一个视频文件
$randomVideo = $videos[array_rand($videos)];

// 设置适当的 Content-Type 头
header('Content-Type: video/mp4');
header('Content-Length: ' . filesize($randomVideo));

// 直接读取并输出视频文件
readfile($randomVideo);
exit();
