<?php
namespace Admin\Controller;
use Think\Controller;
class SettingController extends AdmController {
    public function index(){
        $set=D('setting');
        var_dump($set->getAll());
        $this->display();
    }
}