<?php
namespace Admin\Controller;
use Think\Controller;
class AuserController extends AdmController {
    public function index(){
        $admin=M('admin');
        $users=$admin->select();
        $this->assign('data',$users);
        $this->display();
    }
    public function add(){
        
        $admin = D("admin");

        $this->display();
    }
    public function save(){
        
        
        $auser=I('post.auser');
        $apass=I('post.apass');
        $rules = array(
            array('auser','require','用户名不能为空'),
            array('apass','require','密码不能为空'),
        );
        $admin = D("admin");
        if (!$admin->validate($rules)->create()){
            return $this->error($admin->getError(),'/Admin/Auser/index');
        };
        $sql=array(
            'auser'=>$auser,
            'apass'=>$apass,
        );
        $is=$admin->add($sql);
        if($is){
            return $this->success('添加成功','/Admin/Auser/index');
        }

    }
}