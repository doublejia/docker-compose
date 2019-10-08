<?php

$conn = new mysqli('10.10.10.1:3306', 'root', '565859');

if (!$conn) die('error');

echo "<pre>";
echo "DB success \n";

$redis = new Redis();
if ($redis->connect('10.10.10.2', 6379)) {
    echo "Redis success\n";
}


$http = new swoole_http_server("127.0.0.1", 9501);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();
