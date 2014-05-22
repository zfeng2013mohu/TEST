<?php
class PositionAction extends Action{
    public function index(){
        $p=M('places');
        $arr = $p->select();
        $this->assign('data',$arr);
        //var_dump($arr);
        $this->display();
    }
}