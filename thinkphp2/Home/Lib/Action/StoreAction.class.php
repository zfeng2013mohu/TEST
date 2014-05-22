<?php
class StoreAction extends Action{
    public function index(){
        $s=M('Shops');
        $where['place_id']=$_GET['id'];
        $where['place_two']=$_GET['id'];
        $where['place_three']=$_GET['id'];
        $where['place_four']=$_GET['id'];
        $where['_logic']='or';
        $arr=$s->where($where)->select();
        $this->assign('store',$arr);
        //var_dump($arr);

        $p=M('Places');
        $where2['place_id'] = $_GET['id'];
        $place=$p->where($where2)->find();
        $this->assign('place',$place);
        //var_dump($place);
        $this->display();
    }
}