<?php 

$appid = "wx93043b5738f94fc6";
//$appid = "wx5a18692b982e9a83";
$appSecret = "824c88ae32ad75c6fa5c1990b2168040";
//$appSecret = "c911e91da1013b53af8fad5f2302d8a7";

// $appid = "在这里设置你的APPID";
// $appSecret = "在这里输入你的AppSecret";


echo getAccessToken($appid, $appSecret);

//须 开启php.ini 中的 extension=php_openssl.dll
function getAccessToken($appid, $appSecret){
	$appid = trim($appid);
	$secret = trim($appSecret);
	$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
	$json=http_request_json($url);//这个地方不能用file_get_contents
	$data=json_decode($json,true);
	if($data['access_token']){
		return $data['access_token'];
	}else{
		return "获取access_token错误";
	}		
}

 function http_request_json($url){  
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;  
	}
 ?>