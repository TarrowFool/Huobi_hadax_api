<?php

header("Content-Type:text/html;charset=utf-8");
// 定义参数
define('ACCOUNT_ID', '52914421'); // 你的账户ID
define('ACCESS_KEY','128e9949-b83b5597-ad4adbfb-cb3f7'); // 你的ACCESS_KEY
define('SECRET_KEY','d8a521b4-742292d5-664eccc7-15d6a'); // 你的SECRET_KEY

include "lib.php";

//实例化类库
$req = new req();
// 获取账户余额示例
$data = $req->get_detail_merged('btcusdt');

$array = json_decode(json_encode($data),TRUE);

echo "<pre>";
print_r($array);
echo "</pre>";


echo "最新收盘价：BTC-USDT: ".$array['tick']['close'];


?>