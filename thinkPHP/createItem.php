<?php
// $access_token = "在这里填写你复制的字符串AccessToken";
$accessToken = "8Hs2p_OdaBd4uWLTnwdRFsR12OAvpCXQnoOCUB3QdiOkfge-tb1CPjGuLE0XFxNOgoHDYKitJRpfxyGfWTNZi0aOgNycW6f0aNLKd5lnfDGhDIX1I6XqnlbGrxsbD5mYLPFeAFAZDT";//用英文引号

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

	createMenu($accessToken);
	function createMenu($accessToken){
		// $data是转过格式的json数据
		$data =  '{
"button":
[
{
	"name":"知音乐",
	"sub_button":[
	{
		"type":"click",
		"name":"音乐实讯",
		"key":"public_show"
	},
	{
		"type":"view",
		"name":"玩音乐",
		"url":"http://www.usts.edu.cn/"
	},
	{
		"type":"view",
		"name":"北京国际网",
		"url":"http://www.bmf.org.cn/"
	}]
},
{
	"name":"玩音乐",
	"sub_button":[
	{
		"type":"view",
		"name":"找老师",
		"url":"http://dnf.qq.com/"
	}]
},																			
{
	"name":"我的地带",
	"sub_button":[
	{
		"type":"view",
		"name":"个人中心",
		"url":"http://1.ytz123.applinzi.com/index.php/Home/Index/index"
	},
	{
		"type":"view",
		"name":"作业",
		"url":"http://1.ytz123.applinzi.com/index.php/Home/Works/one"
	}]	
}
]
}';
		// 返回值是json格式的数据
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$accessToken);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$tmpInfo = curl_exec($ch);
		if (curl_errno($ch)) {
			echo curl_error($ch);
		}
		curl_close($ch);
		echo $tmpInfo;
	}
