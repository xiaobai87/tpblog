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
        $aid=I('get.aid');
        $admin = D("admin");
        $user=array(
            'aid'=>0,
            'auser'=>'',
            'apass'=>'',
        );
        if($aid>0){
            $user=$admin->where(array('aid'=>$aid))->find();
        }
        $this->assign("user",$user);
        $this->display();
    }
    public function del(){
        $admin=M('admin');
        $aid=I('get.aid');
        $where=array(
            'aid'=>$aid
        );
        if($aid==session('aid')){
            return $this->error('不能删除自己','/Admin/Auser/index');

        }else{
           $admin->where($where)->delete();
            return $this->redirect('/Admin/Auser/index');
        }
    }
    public function save(){
        if(IS_POST){
            $aid=I("get.aid");
            $admin = D("admin");
            $auser=I('post.auser');
            $apass=I('post.apass');
            //检测是否为空
            $rules = array(
                array('auser','require','用户名不能为空'),
                array('apass','require','密码不能为空'),
            );
            if (!$admin->validate($rules)->create()){
                return $this->error($admin->getError(),'/Admin/Auser/index');
            };
            //检测用户名是否重复
            $where=array(
                'auser'=>$auser
            );
            $where=array();
            $where['auser']=$auser;
            $where['aid']=array('neq',$aid);
            $isAuser=$admin->where($where)->find();
            if($isAuser){
                return $this->error('用户名已经存在','/Admin/Auser/index');
            };


            //准备数据，判断新增还是更新
            $sql=array(
                'auser'=>$auser,
                'apass'=>$apass,
            );
            if($aid>0){
                $is=$admin->where(array('aid'=>$aid))->save();
                return $this->error("修改了{$is}条数据",'/Admin/Auser/index');
            }else{
                $admin->add($sql);
                return $this->success("添加成功",'/Admin/Auser/index');
            }
        }
    }
}