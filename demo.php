<?php

header("Content-Type:text/html;charset=utf-8");
// 定义参数
define('ACCOUNT_ID', ''); // 你的账户ID
define('ACCESS_KEY',''); // 你的ACCESS_KEY
define('SECRET_KEY',''); // 你的SECRET_KEY

include "lib.php";

//实例化类库
$req = new req();
// 获取账户余额示例
$data = $req->get_detail_merged('btcusdt');

$array = json_decode(json_encode($data),TRUE);

echo "最新收盘价：BTC-USDT: ".$array['tick']['close'];


?>