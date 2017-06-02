<?php
namespace Admin\Controller;
use Think\Controller;
class BlogController extends AdmController {
    public function index(){
        $article=M('article');
        $articles=$article->select();
        $this->assign('article',$articles);
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

}