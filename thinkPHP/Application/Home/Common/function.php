<?php
function checkLogin($lasturl) {
	if (!isset($_SESSION['IDCard'])||!isset($_SESSION['name'])) {
		session('lasturl',$lasturl);
		redirect(U('Index/Login/index','',''));
	}
}

function strchange($str) {
	$newstr = '';
	switch($str) {
		case '音乐实讯':
			$newstr = 'flfg@2x';
			break;
		case '社保': 
			$newstr = 'ghxz@2x';
			break;
		case '民政、残联':
			$newstr = 'ghyd@2x';
			break;
		case 'myinfor':
			$newstr = '/Index/MyInfor/myinfor';
			break;
	}
	return $newstr;
}

function getMenuInfo($url) {
	$response = file_get_contents($url);
	$data = json_decode($response,true);
	$arr = array();
	for($i = 0; $i < 4; $i++) {
		$arr[$i] = array(
			0=>$data["News"][$i]["title"],
			1=>$data["News"][$i]["title"],
			2=>$data["News"][$i]["ImageURL"],
			3=>$data["News"][$i]["ip"]
			);
	}
	return $arr;
}
//检查验证码
function check_verify($code, $id = '') {
	$verify = new \Think\Verify ();
	return $verify->check ( $code, $id );
}

