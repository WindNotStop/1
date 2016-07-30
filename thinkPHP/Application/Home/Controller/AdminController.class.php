<?php

namespace Home\Controller;

use Think\Controller;
use Think\Model;

class AdminController extends Controller {
	public function index() {
		$remebera = cookie('remebera');
		$remeberb = cookie('remeberb');
		$this->assign('name',$remebera);
		$this->assign('password',$remeberb);
		$this->display ( 'login' );
	}
	public function login() {
		$condition ['name'] = $_POST ['name'];
		$condition ['password'] = $_POST ['password'];
		$admin = M ( 'Admin' )->where ( $condition )->find ();
		session( 'admin', $admin );
		cookie('remebera',$condition ['name'],10000000);
		cookie('remeberb',$condition ['password'],10000000);
		if ($admin) {
			$this->display ( 'main' );
		} else {
			$this->error ( '登录失败', 'index', 1 );
		}
	}
	public function show($type) {
		switch ($type) {
			case 'son' :
				$result=M('Admin')->select();
				$this->assign('son',$result);
				$this->assign('type','son');
				$this->display('main');
				break;
			case 'computer' :
				$result=M('Computer')->select();
				$this->assign('computer',$result);
				$this->assign('type','computer');
				$this->display('main');
				break;
		}
	}
	public function edit($type,$id) {
		switch ($type) {
			case 'son' :
				$result=M('Admin')->where("name='".$id."'")->find();
				$this->assign('name',$result['name']);
				$this->assign('role',$result['role']);
				$this->assign('head',$result['head']);
				$this->assign('top',$result['top']);
				$this->assign('roletype','son');
				$this->display('edit');
				break;
			case 'computer' :
				$result=M('Computer')->where("config_code='".$id."'")->find();
				$this->assign('type',$result['type']);
				$this->assign('son_type',$result['son_type']);
				$this->assign('size',$result['size']);
				$this->assign('colour',$result['colour']);
				$this->assign('config_code',$result['config_code']);
				$this->assign('media_price',$result['media_price']);
				$this->assign('take_price',$result['take_price']);
				$this->assign('cpu',$result['cpu']);
				$this->assign('ram',$result['ram']);
				$this->assign('rom',$result['rom']);
				$this->assign('resolution',$result['resolution']);
				$this->assign('os',$result['os']);
				$this->assign('video_card',$result['video_card']);
				$this->assign('after_sale',$result['after_sale']);
				$this->assign('battery',$result['battery']);
				$this->assign('keyboard',$result['keyboard']);
				$this->assign('camera',$result['camera']);
				$this->assign('speaker',$result['speaker']);
				$this->assign('other',$result['other']);
				$this->assign('pic',$result['pic']);
				$this->assign('roletype','computer');
				$this->display('edit');
				break;
		}
	}
	
	public function sort($roletype,$sort){
		switch ($roletype) {
			case 'computer' :
				$result=M('Computer')->order($sort)->select();
				$this->assign('computer',$result);
				$this->assign('type','computer');
				$this->display('main');
				break;
			case 'son':
				$result=M('Admin')->order($sort)->select();
				$this->assign('son',$result);
				$this->assign('type','son');
				$this->display('main');
				break;
		}
	}
	public function search($roletype){
		switch ($roletype) {
			case 'computer' :
				$search=$_POST['search'];
				$result=M('Computer')->where("config_code='".$search."'")->select();
				$this->assign('computer',$result);
				$this->assign('type','computer');
				$this->display('main');
				break;
			case 'son':
				$search=$_POST['search'];
				$result=M('Admin')->where("name='".$search."'")->select();
				$this->assign('son',$result);
				$this->assign('type','son');
				$this->display('main');
				break;
		}
	}
	
	public function save(){
		$this->error('还没开发完哦');
	}
	
}
