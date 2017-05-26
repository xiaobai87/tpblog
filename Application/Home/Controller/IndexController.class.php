<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		var_dump(D('member')->find());
    }
	public function a(){
		echo '11';
	}
}