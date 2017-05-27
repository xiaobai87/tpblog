<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $do=I('get.do');
        if($do=='chk'){
            $auser=I('post.auser');
            $apass=I('post.apass');
            $admin=D('admin');
            $where=array(
                'auser'=>$auser,
                'apass'=>$apass,
            );
            $user=$admin->where($where)->find();
            if(!$user){
                return $this->error('账号或者密码错误','/Admin/Login/index');
            }
            session('aid',$user['aid']);
            return $this->success('操作完成','/Admin/Index/index');
        }
        $this->display();
    }
}