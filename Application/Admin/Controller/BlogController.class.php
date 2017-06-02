<?php
namespace Admin\Controller;
use Think\Controller;
class BlogController extends AdmController {
    public function index(){
        $article=M('article');
        $articles=$article->select();
        $this->assign('articles',$articles);
        $this->display();
    }
    public function add(){
        $pid=I('get.pid');
        $article = M('article');
        $articles=array(
            'pid'=>0,
            'ptit'=>'',
            'pauthor'=>'',
            'pcontent'=>'',
        );
        if($pid>0){
            $articles=$article->where(array('pid'=>$pid))->find();
        };
        $this->assign("articles",$articles);
        $this->display();
    }
    public function del(){
        $article=M('article');
        $pid=I('get.pid');
        $where=array(
            'pid'=>$pid
        );
        $article->where($where)->delete();
        return $this->redirect('/Admin/Blog/index');
    }
    public function save(){
        if(IS_POST){
            $pid=I("get.pid");
            $article = D("article");
            $ptit=I('post.ptit');
            $pauthor=I('post.pauthor');
            $pcontent=I('post.pcontent');
            //检测是否为空
            $rules = array(
                array('ptit','require','标题不能为空'),
                array('pauthor','require','作者不能为空'),
                array('pcontent','require','正文不能为空'),
            );
            if (!$article->validate($rules)->create()){
                return $this->error($article->getError(),'/Admin/Blog/index');
            };
            //检测标题是否重复
            $where=array(
                'ptit'=>$ptit
            );
            $where=array();
            $where['ptit']=$auser;
            $where['pid']=array('neq',$pid);
            $isArticle=$article->where($where)->find();
            if($isArticle){
                return $this->error('标题已经存在','/Admin/Blog/index');
            };
            //准备数据，判断新增还是更新
            $sql=array(
                'ptit'=>$ptit,
                'pauthor'=>$pauthor,
                'pcontent'=>$pcontent,
            );
            if($pid>0){
                $sql['puptime']=time();
                $is=$article->where(array('pid'=>$pid))->save($sql);
                return $this->error("修改了{$is}条数据",'/Admin/Blog/index');
            }else{
                $sql['pintime']=time();
                $article->add($sql);
                return $this->success("添加成功",'/Admin/Blog/index');
            }
        }
    }
}